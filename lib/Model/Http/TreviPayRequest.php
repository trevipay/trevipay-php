<?php


namespace TreviPay\TreviPay\Model\Http;

use TreviPay\TreviPay\Api\ConfigProviderInterface;
use TreviPay\TreviPay\Http\Transfer;
use TreviPay\TreviPay\Http\TransferBuilder;
use TreviPay\TreviPay\Model\MaskValue;

class TreviPayRequest
{
    /**
     * @var TransferBuilder
     */
    private $transferBuilder;

    /**
     * @var ConfigProviderInterface
     */
    private $configProvider;

    /**
     * @var MaskValue
     */
    private $maskValue;

    public const IDEMPOTENCY_KEY = 'idempotency_key';

    public function __construct(
        TransferBuilder $transferBuilder,
        ConfigProviderInterface $configProvider,
        MaskValue $maskValue
    ) {
        $this->transferBuilder = $transferBuilder;
        $this->configProvider = $configProvider;
        $this->maskValue = $maskValue;
    }

    public function getConfigProvider(): ConfigProviderInterface
    {
        return $this->configProvider;
    }

    /**
     * @param string $methodName
     * @param array $request
     * @param string|null $id
     * @param string $httpMethod
     * @param int $expectedStatusCode
     * @param string|null $apiKey
     * @return Transfer
     */
    public function create(
        string $methodName,
        array $request = [],
        ?string $id = null,
        string $httpMethod = 'GET',
        int $expectedStatusCode = 200,
        ?string $apiKey = null,
        ?string $additionalPathParam = null
    ): Transfer {

        return $this->transferBuilder
            ->setHttpMethod($httpMethod)
            ->setMethodName($methodName)
            ->setHeaders($this->getHeaders($apiKey, $this->getIdempotencyKey($request)))
            ->setBody($this->getBody($request, $httpMethod))
            ->setUri($this->getUri($methodName, $httpMethod, $request, $id, $additionalPathParam))
            ->setDebugData($this->prepareDebugData($methodName, $httpMethod, $request, $id))
            ->setExpectedStatusCode($expectedStatusCode)
            ->build();
    }

    public function getHeaders(?string $apiKey = null, ?string $idempotentKey = null): array
    {
        $headers = [
            'Authorization' => $this->getAuthorizationHeaderValue($apiKey),
            'Content-Type' => 'application/json',
            'User-Agent' => $this->configProvider->getIntegrationInfo()
        ];

        if ($idempotentKey) {
            $headers['Idempotency-Key'] = $idempotentKey;
        }

        return $headers;
    }

    private function getAuthorizationHeaderValue(?string $apiKey = null): string
    {
        return 'Bearer ' . (!empty($apiKey) ? $apiKey : $this->configProvider->getApiKey());
    }

    /**
     * @param string $methodName
     * @param string $httpMethod
     * @param array $request
     * @param string|null $id
     * @return array
     */
    private function prepareDebugData(
        string $methodName,
        string $httpMethod,
        array $request,
        ?string $id = null
    ): array {
        $methodNameForDebug = $this->getMethodNameForDebug($methodName, $httpMethod, (bool)$id);

        return [
            'type' => sprintf('call to the MSTS API (%s)', $methodNameForDebug),
            'request_url' => $this->configProvider->getUri($methodName, $id, true),
            'request_http_method' => $httpMethod,
            'request_auth_header' => 'Authorization: Bearer '
                . $this->maskValue->mask(str_replace('Bearer ', '', $this->getAuthorizationHeaderValue())),
            'request' => $this->maskValue->maskValues($request, $methodName),
        ];
    }

    private function getMethodNameForDebug(
        string $methodName,
        string $httpMethod,
        bool $withId
    ): string {
        $translations = [
            'authorizations' => [
                'POST' => 'Create a authorization',
                'DELETE' => 'Cancel a authorization',
                'UPDATE' => 'Update a authorization',
            ],
            'buyers' => [
                'GET' => 'Gets the status and refund information for a buyer',
            ],
            'refunds' => [
                'GET' => 'Gets all refund notes for charge',
                'GET_BY_ID' => 'Retrieve a refund note',
                'POST' => 'Create a refund note',
            ],
            'charges' => [
                'POST' => 'Create a charge',
                'DELETE' => 'Cancel a charge',
                'UPDATE' => 'Return a charge',
                'GET_BY_ID' => 'Retrieve a charge',
            ],
            'webhooks' => [
                'POST' => 'Create a webhook',
                'GET' => 'List webhooks',
                'DELETE' => 'Delete a webhook',
                'UPDATE' => 'Update a webhook',
            ],
        ];
        $httpMethod = strtoupper($httpMethod);
        if ($httpMethod === 'POST' && $withId) {
            $httpMethod = 'UPDATE';
        } elseif ($httpMethod === 'GET' && $withId) {
            $httpMethod = 'GET_BY_ID';
        }
        if (isset($translations[$methodName]) && isset($translations[$methodName][$httpMethod])) {
            return $translations[$methodName][$httpMethod];
        }

        return '';
    }

    /**
     * @param array $request
     * @param string $httpMethod
     * @return string
     */
    private function getBody(array $request, string $httpMethod): string
    {
        if ($this->getIdempotencyKey($request)) {
            $request = array_filter($request, fn($key) => $key !== self::IDEMPOTENCY_KEY,ARRAY_FILTER_USE_KEY);
        }
        return $request && $httpMethod !== 'GET' ? json_encode($request, JSON_UNESCAPED_SLASHES) : '';
    }

    /**
     * @param string $methodName
     * @param string $httpMethod
     * @param array $request
     * @param string|null $id
     * @param string|null $additionalPathParam
     * @return string
     */
    private function getUri(
        string $methodName,
        string $httpMethod,
        array $request,
        ?string $id,
        ?string $additionalPathParam
    ): string {
        unset($request['id']);

        $params = '';
        if ($request && $httpMethod === 'GET') {
            $params = '?' . http_build_query($request);
        }

        $formattedAdditionalPathParam = '';
        if ($additionalPathParam !== null) {
            $formattedAdditionalPathParam = substr($additionalPathParam, 0, 1) === '/'
                ? $additionalPathParam
                : '/' . $additionalPathParam;
        }

        return $this->configProvider->getUri($methodName, $id) . $params . $formattedAdditionalPathParam;
    }
    /**
     * GetIdempotencyKey
     * get idempotency key from request body
     * @param array $request
     * @return string | null
     */
    private function getIdempotencyKey(array $request): string | null {
        if (array_key_exists(self::IDEMPOTENCY_KEY, $request)) {
            return $request[self::IDEMPOTENCY_KEY];
        }
        return null;
    }
}
