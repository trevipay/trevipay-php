<?php

declare(strict_types=1);

namespace TreviPay\TreviPay;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use TreviPay\TreviPay\Exception\ApiClientException;
use TreviPay\TreviPay\Exception\IncorrectStatusCodeException;
use TreviPay\TreviPay\Exception\ResponseException;
use TreviPay\TreviPay\Http\Transfer;
use TreviPay\TreviPay\Model\Data\ErrorResponse;
use TreviPay\TreviPay\Model\Data\ValidationError;
use TreviPay\TreviPay\Model\MaskValue;
use Psr\Log\LoggerInterface;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ApiClient implements ApiClientInterface
{
    /**
     * Path to the concrete version of the TreviPay API
     */
    public const TREVIPAY_API_URL_PATH = 'api/v2/';

    public const CHECKOUT_APP_API_PATH = 'v1/';

    public const API_PATH_BUYERS = 'buyers';

    /**
     * @var LoggerInterface
     */
    private $treviPayLogger;

    /**
     * @var MaskValue
     */
    private $maskValue;

    /**
     * @var ClientInterface
     */
    private $guzzleHttpClient;

    public function __construct(
        LoggerInterface $treviPayLogger,
        MaskValue $maskValue,
        ClientInterface $client
    ) {
        $this->treviPayLogger = $treviPayLogger;
        $this->maskValue = $maskValue;
        $this->guzzleHttpClient = $client;
    }

    /**
     * @param Transfer $transfer
     * @return array
     * @throws ResponseException
     * @throws IncorrectStatusCodeException
     * @throws ApiClientException
     */
    public function execute(
        Transfer $transfer
    ): array {
        $request = new Request(
            $transfer->getHttpMethod(),
            $transfer->getUri(),
            $transfer->getHeaders(),
            $transfer->getBody()
        );

        try {
            $debugData = $transfer->getDebugData();
            $response = $this->guzzleHttpClient->send(
                $request,
                ['allow_redirects' => false, 'max' => 0, 'protocols' => ['https', 'connect_timeout' => 30]]
            );

            $responseBody = json_decode((string)$response->getBody(), true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new ResponseException('Incorrect response');
            }
            $resultDebug = $this->maskValue->maskValues($responseBody, $transfer->getMethodName());
            $debugData['response_expected_http_code'] = $transfer->getExpectedStatusCode();
            $debugData['response_http_code'] = $response->getStatusCode();
            $debugData['response_raw'] = json_encode($resultDebug);
            $debugData['response'] = $resultDebug;
            $this->treviPayLogger->info('Performing a call to the TreviPay API', $debugData);
        } catch (ClientException $clientException) {
            $debugData['http_error'] = [
                'error' => $clientException->getMessage(),
                'code' => $clientException->getCode(),
            ];

            $errorResponse = null;
            $response = $clientException->getResponse();
            if ($response) {
                $responseBody = json_decode((string)$response->getBody(), true);
                if (json_last_error() !== JSON_ERROR_NONE) {
                    throw new ResponseException('Incorrect response');
                }
                $debugData['response_expected_http_code'] = $transfer->getExpectedStatusCode();
                $debugData['response_http_code'] = $response->getStatusCode();
                $debugData['response'] = $this->maskValue->maskValues($responseBody, $transfer->getMethodName());
                $this->treviPayLogger->error('Error during performing a call to the TreviPay API', $debugData);

                $errorResponse = $this->prepareErrorResponse($responseBody);
            } else {
                $this->treviPayLogger->error('Error during performing a call to the TreviPay API', $debugData);
            }
            throw new ResponseException(
                $clientException->getMessage(),
                $errorResponse,
                $clientException,
                $clientException->getCode()
            );
        } catch (GuzzleException $clientException) {
            throw new ResponseException($clientException->getMessage(), null, $clientException);
        }

        /** @var Response $response */
        $response->getBody()->rewind();
        $this->validateStatusCode(
            (string)$response->getBody(),
            $transfer->getExpectedStatusCode(),
            $response->getStatusCode()
        );

        return $responseBody;
    }

    /**
     * @param mixed $responseBody
     * @return ErrorResponse|null
     */
    private function prepareErrorResponse($responseBody): ?ErrorResponse
    {
        if (!isset($responseBody['code']) || !isset($responseBody['message'])) {
            return null;
        }

        $errorResponse = new ErrorResponse($responseBody['code'], $responseBody['message']);
        if (!isset($responseBody['validationErrors'])) {
            return $errorResponse;
        }

        foreach ($responseBody['validationErrors'] as $rawValidationError) {
            $validationError = new ValidationError();
            $validationError->setDataPath($rawValidationError['dataPath']);
            $validationError->setMessage($rawValidationError['message']);
            $errorResponse->addValidationError($validationError);
        }

        return $errorResponse;
    }

    /**
     * @param string $responseBody
     * @param int $expectedStatusCode
     * @param int $actualStatusCode
     * @throws IncorrectStatusCodeException
     * @throws ResponseException
     */
    private function validateStatusCode(
        string $responseBody,
        int $expectedStatusCode,
        int $actualStatusCode
    ): void {
        if ($this->isExpectedStatusCode($expectedStatusCode, $actualStatusCode)) {
            return;
        }

        $unserializedResponse = json_decode($responseBody, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new ResponseException('Incorrect response');
        }

        $errorResponse = new ErrorResponse((string)$actualStatusCode, $unserializedResponse['message'] ?? null);
        throw new IncorrectStatusCodeException(
            sprintf(
                'Response http status code does not match the API specification. '
                    . 'The expected http status code is %s, received %s',
                $expectedStatusCode,
                $actualStatusCode
            ),
            $errorResponse,
            new ApiClientException($responseBody)
        );
    }

    private function isExpectedStatusCode(int $expectedStatusCode, int $actualStatusCode): bool
    {
        return $expectedStatusCode === $actualStatusCode;
    }
}
