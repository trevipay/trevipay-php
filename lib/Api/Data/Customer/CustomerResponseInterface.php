<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Customer;

interface CustomerResponseInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param string $id
     * @return CustomerResponseInterface
     */
    public function setId(string $id): CustomerResponseInterface;

    /**
     * @return string
     */
    public function getCustomerName(): string;

    /**
     * @param string $customerName
     * @return CustomerResponseInterface
     */
    public function setCustomerName(string $customerName): CustomerResponseInterface;

    /**
     * @return string
     */
    public function getClientReferenceCustomerId(): string;

    /**
     * @param string $clientReferenceCustomerId
     * @return CustomerResponseInterface
     */
    public function setClientReferenceCustomerId(string $clientReferenceCustomerId): CustomerResponseInterface;

    /**
     * @return string
     */
    public function getCustomerStatus(): string;

    /**
     * @param string $status
     * @return CustomerResponseInterface
     */
    public function setCustomerStatus(string $status): CustomerResponseInterface;

    /**
     * @return string|string[]
     */
    public function getCurrency();

    /**
     * @param string|string[] $currency
     * @return CustomerResponseInterface
     */
    public function setCurrency($currency): CustomerResponseInterface;

    /**
     * @return int
     */
    public function getCreditApproved(): int;

    /**
     * @param int $creditApproved
     * @return CustomerResponseInterface
     */
    public function setCreditApproved(int $creditApproved): CustomerResponseInterface;

    /**
     * @return int
     */
    public function getCreditAvailable(): int;

    /**
     * @param int $creditAvailable
     * @return CustomerResponseInterface
     */
    public function setCreditAvailable(int $creditAvailable): CustomerResponseInterface;

    /**
     * @return int
     */
    public function getCreditBalance(): int;

    /**
     * @param int $creditBalance
     * @return CustomerResponseInterface
     */
    public function setCreditBalance(int $creditBalance): CustomerResponseInterface;

    /**
     * @return int
     */
    public function getCreditAuthorized(): int;

    /**
     * @param int $creditAuthorized
     * @return CustomerResponseInterface
     */
    public function setCreditAuthorized(int $creditAuthorized): CustomerResponseInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
