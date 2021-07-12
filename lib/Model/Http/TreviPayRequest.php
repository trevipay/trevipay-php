<?php
declare(strict_types=1);

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
        ?string $apiKey = null
    ): Transfer {
        return $this->transferBuilder
            ->setHttpMethod($httpMethod)
            ->setMethodName($methodName)
            ->setHeaders($this->getHeaders($apiKey))
            ->setBody($this->getBody($request, $httpMethod))
            ->setUri($this->getUri($methodName, $httpMethod, $request, $id))
            ->setDebugData($this->prepareDebugData($methodName, $httpMethod, $request, $id))
            ->setExpectedStatusCode($expectedStatusCode)
            ->build();
    }

    private function getHeaders(?string $apiKey = null): array
    {
        return [
            'Authorization' => $this->getAuthorizationHeaderValue($apiKey),
            'Content-Type' => 'application/json',
        ];
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
        return $request && $httpMethod !== 'GET' ? json_encode($request, JSON_UNESCAPED_SLASHES) : '';
    }

    /**
     * @param string $methodName
     * @param string $httpMethod
     * @param array $request
     * @param string|null $id
     * @return string
     */
    private function getUri(string $methodName, string $httpMethod, array $request, ?string $id): string
    {
        unset($request['id']);

        $params = '';
        if ($request && $httpMethod === 'GET') {
            $params = '?' . http_build_query($request);
        }

        return $this->configProvider->getUri($methodName, $id) . $params;
    }
}
