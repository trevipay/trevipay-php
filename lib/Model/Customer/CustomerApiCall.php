<?php


namespace TreviPay\TreviPay\Model\Customer;

use TreviPay\TreviPay\Api\Data\Buyer\BuyerResponseInterface;
use TreviPay\TreviPay\Api\Data\Customer\CustomerResponseInterface;
use TreviPay\TreviPay\ApiClientInterface;
use TreviPay\TreviPay\Exception\ApiClientException;
use TreviPay\TreviPay\Model\Data\Customer\CustomerResponse;
use TreviPay\TreviPay\Model\Http\TreviPayRequest;

class CustomerApiCall
{
    private const METHOD_NAME = 'customers';

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
     * @throws ApiClientException
     */
    public function retrieve(string $id): CustomerResponseInterface
    {
        $transfer = $this->treviPayRequest->create(
            self::METHOD_NAME,
            [],
            $id
        );
        $result = $this->apiClient->execute($transfer);

        return new CustomerResponse($result);
    }
}
