<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Webhook;

use TreviPay\TreviPay\Api\Data\Webhook\WebhookInterface;
use TreviPay\TreviPay\ApiClientInterface;
use TreviPay\TreviPay\Exception\ApiClientException;
use TreviPay\TreviPay\Model\Data\Webhook\Webhook;
use TreviPay\TreviPay\Model\Http\TreviPayRequest;

class WebhookApiCall
{
    public const METHOD_NAME = 'webhooks';

    /**
     * @var ApiClientInterface
     */
    private $apiClient;

    /**
     * @var TreviPayRequest
     */
    private $treviPayRequest;

    public function __construct(
        ApiClientInterface $apiClient,
        TreviPayRequest $treviPayRequest
    ) {
        $this->apiClient = $apiClient;
        $this->treviPayRequest = $treviPayRequest;
    }

    /**
     * @param array $requestData
     * @return WebhookInterface
     * @throws ApiClientException
     */
    public function create(
        array $requestData
    ): WebhookInterface {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            $requestData,
            null,
            'POST',
            201
        );

        $result = $this->apiClient->execute($transfer);

        return new Webhook($result);
    }

    /**
     * @return WebhookInterface[]
     * @throws ApiClientException
     */
    public function list(): array
    {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME
        );

        $result = $this->apiClient->execute($transfer);

        $webhooks = [];
        foreach ($result as $item) {
            $webhooks[] = new Webhook($item);
        }

        return $webhooks;
    }

    /**
     * @param string $id
     * @return WebhookInterface
     * @throws ApiClientException
     */
    public function retrieve(string $id): WebhookInterface
    {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            [],
            $id
        );

        $result = $this->apiClient->execute($transfer);

        return new Webhook($result);
    }

    /**
     * @param array $requestData
     * @return WebhookInterface
     * @throws ApiClientException
     */
    public function update(array $requestData): WebhookInterface
    {
        if (!isset($requestData['id'])) {
            throw new ApiClientException('ID is required');
        }
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            $requestData,
            $requestData['id'],
            'POST'
        );

        $result = $this->apiClient->execute($transfer);

        return new Webhook($result);
    }

    /**
     * @param string $id
     * @param string|null $apiKey
     * @return WebhookInterface
     * @throws ApiClientException
     */
    public function delete(string $id, ?string $apiKey = null): WebhookInterface
    {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            [],
            $id,
            'DELETE',
            200,
            $apiKey
        );

        $result = $this->apiClient->execute($transfer);

        return new Webhook($result);
    }
}
