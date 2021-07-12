<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Charge;

use TreviPay\TreviPay\Api\Data\Charge\ChargeResponseInterface;
use TreviPay\TreviPay\ApiClientInterface;
use TreviPay\TreviPay\Exception\ApiClientException;
use TreviPay\TreviPay\Exception\ResponseException;
use TreviPay\TreviPay\Model\Http\TreviPayRequest;

class ChargeApiCall
{
    private const METHOD_NAME = 'charges';

    /**
     * @var ApiClientInterface
     */
    private $apiClient;

    /**
     * @var MapCharge
     */
    private $mapCharge;

    /**
     * @var TreviPayRequest
     */
    private $treviPayRequest;

    public function __construct(
        ApiClientInterface $apiClient,
        MapCharge $mapCharge,
        TreviPayRequest $treviPayRequest
    ) {
        $this->apiClient = $apiClient;
        $this->mapCharge = $mapCharge;
        $this->treviPayRequest = $treviPayRequest;
    }

    /**
     * @param array $requestData
     * @return ChargeResponseInterface
     * @throws ApiClientException
     */
    public function create(array $requestData): ChargeResponseInterface
    {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            $requestData,
            null,
            'POST',
            201
        );
        $result = $this->apiClient->execute($transfer);

        $chargeList = $this->mapCharge->execute([$result]);

        if (!isset($chargeList[0])) {
            throw new ResponseException('Charge was not returned');
        }

        return $chargeList[0];
    }

    /**
     * @param array $requestData
     * @return ChargeResponseInterface[]
     * @throws ApiClientException
     */
    public function list(array $requestData): array
    {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            $requestData
        );
        $result = $this->apiClient->execute($transfer);

        return $this->mapCharge->execute($result);
    }

    /**
     * @param string $id
     * @return ChargeResponseInterface
     * @throws ApiClientException
     */
    public function retrieve(string $id): ChargeResponseInterface
    {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            [],
            $id
        );
        $result = $this->apiClient->execute($transfer);

        $chargeList = $this->mapCharge->execute([$result]);

        if (!isset($chargeList[0])) {
            throw new ResponseException('Charge was not returned');
        }

        return $chargeList[0];
    }
}
