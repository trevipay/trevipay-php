<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Authorization;

use TreviPay\TreviPay\Api\Data\Authorization\AuthorizationResponseInterface;
use TreviPay\TreviPay\ApiClientInterface;
use TreviPay\TreviPay\Exception\ApiClientException;
use TreviPay\TreviPay\Model\Data\Authorization\AuthorizationResponse;
use TreviPay\TreviPay\Model\Http\TreviPayRequest;

class AuthorizationApiCall
{
    private const METHOD_NAME = 'authorizations';

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
     * @return AuthorizationResponseInterface
     * @throws ApiClientException
     */
    public function create(
        array $requestData
    ): AuthorizationResponseInterface {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            $requestData,
            null,
            'POST',
            201
        );

        $result = $this->apiClient->execute($transfer);

        return new AuthorizationResponse($result);
    }

    /**
     * @param string $id
     * @return AuthorizationResponseInterface
     * @throws ApiClientException
     */
    public function cancel(string $id): AuthorizationResponseInterface
    {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            [],
            $id,
            'POST',
            200,
            null,
            'cancel'
        );
        $result = $this->apiClient->execute($transfer);

        return new AuthorizationResponse($result);
    }

    /**
     * @param array $requestData
     * @return AuthorizationResponseInterface
     * @throws ApiClientException
     */
    public function update(
        array $requestData
    ): AuthorizationResponseInterface {
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

        return new AuthorizationResponse($result);
    }

    /**
     * @param string $id
     * @return AuthorizationResponseInterface
     * @throws ApiClientException
     */
    public function retrieve(string $id): AuthorizationResponseInterface
    {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            [],
            $id
        );
        $result = $this->apiClient->execute($transfer);

        return new AuthorizationResponse($result);
    }
}
