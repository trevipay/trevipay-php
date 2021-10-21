<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data\Customer;

use TreviPay\TreviPay\Api\Data\Customer\CustomerResponseInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class CustomerResponse extends RequestDataObject implements CustomerResponseInterface
{
    public const ID = 'id';

    public const CUSTOMER_NAME = 'customer_name';

    public const CLIENT_REFERENCE_CUSTOMER_ID = 'client_reference_customer_id';

    public const CUSTOMER_STATUS = 'customer_status';

    public const CURRENCY = 'currency';

    public const CREDIT_APPROVED = 'credit_approved';

    public const CREDIT_AVAILABLE = 'credit_available';

    public const CREDIT_BALANCE = 'credit_balance';

    public const CREDIT_AUTHORIZED = 'credit_authorized';

    public const REQUIRED_FIELDS = [
        self::ID,
        self::CUSTOMER_NAME,
        self::CLIENT_REFERENCE_CUSTOMER_ID,
        self::CUSTOMER_STATUS,
        self::CURRENCY,
        self::CREDIT_APPROVED,
        self::CREDIT_AVAILABLE,
        self::CREDIT_BALANCE,
        self::CREDIT_AUTHORIZED
    ];

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->getData(self::ID);
    }

    /**
     * @param string $id
     * @return CustomerResponseInterface
     */
    public function setId(string $id): CustomerResponseInterface
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @return string
     */
    public function getCustomerName(): string
    {
        return $this->getData(self::CUSTOMER_NAME);
    }

    /**
     * @param string $customerName
     * @return CustomerResponseInterface
     */
    public function setCustomerName(string $customerName): CustomerResponseInterface
    {
        return $this->setData(self::CUSTOMER_NAME, $customerName);
    }

    /**
     * @return string
     */
    public function getClientReferenceCustomerId(): string
    {
        return $this->getData(self::CLIENT_REFERENCE_CUSTOMER_ID);
    }

    /**
     * @param string $clientReferenceCustomerId
     * @return CustomerResponseInterface
     */
    public function setClientReferenceCustomerId(string $clientReferenceCustomerId): CustomerResponseInterface
    {
        return $this->setData(self::CLIENT_REFERENCE_CUSTOMER_ID, $clientReferenceCustomerId);
    }

    /**
     * @return string
     */
    public function getCustomerStatus(): string
    {
        return $this->getData(self::CUSTOMER_STATUS);
    }

    /**
     * @param string $status
     * @return CustomerResponseInterface
     */
    public function setCustomerStatus(string $status): CustomerResponseInterface
    {
        return $this->setData(self::CUSTOMER_STATUS, $status);
    }

    /**
     * @return string|string[]
     */
    public function getCurrency()
    {
        return $this->getData(self::CURRENCY);
    }

    /**
     * @param string|string[] $currency
     * @return CustomerResponseInterface
     */
    public function setCurrency($currency): CustomerResponseInterface
    {
        return $this->setData(self::CURRENCY, $currency);
    }

    /**
     * @return int
     */
    public function getCreditApproved(): int
    {
        return $this->getData(self::CREDIT_APPROVED);
    }

    /**
     * @param int $creditApproved
     * @return CustomerResponseInterface
     */
    public function setCreditApproved(int $creditApproved): CustomerResponseInterface
    {
        return $this->setData(self::CREDIT_APPROVED, $creditApproved);
    }

    /**
     * @return int
     */
    public function getCreditAvailable(): int
    {
        return $this->getData(self::CREDIT_AVAILABLE);
    }

    /**
     * @param int $creditAvailable
     * @return CustomerResponseInterface
     */
    public function setCreditAvailable(int $creditAvailable): CustomerResponseInterface
    {
        return $this->setData(self::CREDIT_AVAILABLE, $creditAvailable);
    }

    /**
     * @return int
     */
    public function getCreditBalance(): int
    {
        return $this->getData(self::CREDIT_BALANCE);
    }

    /**
     * @param int $creditBalance
     * @return CustomerResponseInterface
     */
    public function setCreditBalance(int $creditBalance): CustomerResponseInterface
    {
        return $this->setData(self::CREDIT_BALANCE, $creditBalance);
    }

    /**
     * @return int
     */
    public function getCreditAuthorized(): int
    {
        return $this->getData(self::CREDIT_AUTHORIZED);
    }

    /**
     * @param int $creditAuthorized
     * @return CustomerResponseInterface
     */
    public function setCreditAuthorized(int $creditAuthorized): CustomerResponseInterface
    {
        return $this->setData(self::CREDIT_AUTHORIZED, $creditAuthorized);
    }
}
