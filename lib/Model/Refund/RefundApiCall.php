<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Refund;

use TreviPay\TreviPay\Api\Data\Refund\RefundResponseInterface;
use TreviPay\TreviPay\ApiClientInterface;
use TreviPay\TreviPay\Exception\ApiClientException;
use TreviPay\TreviPay\Exception\ResponseException;
use TreviPay\TreviPay\Model\Http\TreviPayRequest;

class RefundApiCall
{
    private const METHOD_NAME = 'refunds';

    /**
     * @var ApiClientInterface
     */
    private $apiClient;

    /**
     * @var MapRefund
     */
    private $mapRefund;

    /**
     * @var TreviPayRequest
     */
    private $treviPayRequest;

    public function __construct(
        ApiClientInterface $apiClient,
        MapRefund $mapRefund,
        TreviPayRequest $treviPayRequest
    ) {
        $this->apiClient = $apiClient;
        $this->mapRefund = $mapRefund;
        $this->treviPayRequest = $treviPayRequest;
    }

    /**
     * @param array $requestData
     * @return RefundResponseInterface
     * @throws ApiClientException
     */
    public function create(array $requestData): RefundResponseInterface
    {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            $requestData,
            null,
            'POST',
            201
        );
        $result = $this->apiClient->execute($transfer);
        $refundList = $this->mapRefund->execute([$result]);

        if (!isset($refundList[0])) {
            throw new ResponseException('Refund was not returned');
        }

        return $refundList[0];
    }

    /**
     * @param array $requestData
     * @return RefundResponseInterface[]
     * @throws ApiClientException
     */
    public function list(array $requestData): array
    {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            $requestData
        );
        $result = $this->apiClient->execute($transfer);

        return $this->mapRefund->execute($result);
    }

    /**
     * @param string $id
     * @return RefundResponseInterface
     * @throws ApiClientException
     */
    public function retrieve(string $id): RefundResponseInterface
    {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            [],
            $id
        );
        $result = $this->apiClient->execute($transfer);

        $refundList = $this->mapRefund->execute([$result]);

        if (!isset($refundList[0])) {
            throw new ResponseException('Refund was not returned');
        }

        return $refundList[0];
    }
}
