<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model;

use TreviPay\TreviPay\Api\ConfigProviderInterface;
use TreviPay\TreviPay\ApiClient;
use TreviPay\TreviPay\Exception\ApiClientException;

class ClientConfigProvider implements ConfigProviderInterface
{
    /**
     * @var string|null
     */
    private $apiKey;

    /**
     * @var string
     */
    private $baseUri;

    /**
     * @var MaskValue
     */
    private $maskValue;

    public function __construct(
        MaskValue $maskValue
    ) {
        $this->maskValue = $maskValue;
    }

    /**
     * @param string|null $apiKey
     * @return ClientConfigProvider
     */
    public function setApiKey(?string $apiKey): ClientConfigProvider
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * @param string $baseUri
     * @return ClientConfigProvider
     */
    public function setBaseUri(string $baseUri): ClientConfigProvider
    {
        $this->baseUri = $baseUri;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    /**
     * @param string $methodName
     * @param string|null $id
     * @param bool $maskId
     * @return string
     * @throws ApiClientException
     */
    public function getUri(string $methodName, ?string $id = null, bool $maskId = false): string
    {
        $apiUrl = $this->baseUri;
        if (!$apiUrl) {
            throw new ApiClientException('API URL is not set.');
        }

        $apiEndpoint = $apiUrl . ApiClient::API_URL_PATH . $methodName;
        if ($id) {
            if ($maskId && $methodName === ApiClient::API_PATH_BUYERS) {
                $id = $this->maskValue->mask((string)$id);
            }

            $apiEndpoint .= '/' . $id;
            if ($methodName === ApiClient::API_PATH_BUYERS) {
                $apiEndpoint .= '/status';
            }
        }

        return $apiEndpoint;
    }
}
