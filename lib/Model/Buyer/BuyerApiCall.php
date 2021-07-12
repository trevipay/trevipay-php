<?php
declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Buyer;

use TreviPay\TreviPay\Api\Data\Buyer\BuyerResponseInterface;
use TreviPay\TreviPay\ApiClientInterface;
use TreviPay\TreviPay\Exception\ApiClientException;
use TreviPay\TreviPay\Model\Data\Buyer\BuyerResponse;
use TreviPay\TreviPay\Model\Http\TreviPayRequest;

class BuyerApiCall
{
    private const METHOD_NAME = 'buyers';

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
     * @param string $id
     * @return BuyerResponseInterface
     * @throws ApiClientException
     */
    public function retrieve(string $id): BuyerResponseInterface
    {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            [],
            $id
        );
        $result = $this->apiClient->execute($transfer);

        return new BuyerResponse($result);
    }
}
