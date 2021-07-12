<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data\Buyer;

use TreviPay\TreviPay\Api\Data\Buyer\BuyerResponseInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class BuyerResponse extends RequestDataObject implements BuyerResponseInterface
{
    public const ID = 'id';

    public const CUSTOMER_ID = 'customer_id';

    public const NAME = 'name';

    public const CLIENT_REFERENCE_BUYER_ID = 'client_reference_buyer_id';

    public const BUYER_STATUS = 'buyer_status';

    public const CURRENCY = 'currency';

    public const CREDIT_LIMIT = 'credit_limit';

    public const CREDIT_AVAILABLE = 'credit_available';

    public const CREDIT_BALANCE = 'credit_balance';

    public const CREDIT_AUTHORIZED = 'credit_authorized';

    public const M2_REQUIRED_FIELDS = [
        self::ID,
        self::NAME,
        self::BUYER_STATUS,
        self::CURRENCY,
        self::CREDIT_LIMIT,
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
     * @return BuyerResponseInterface
     */
    public function setId(string $id): BuyerResponseInterface
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @return string
     */
    public function getCustomerId(): string
    {
        return $this->getData(self::CUSTOMER_ID);
    }

    /**
     * @param string $customerId
     * @return BuyerResponseInterface
     */
    public function setCustomerId(string $customerId): BuyerResponseInterface
    {
        return $this->setData(self::CUSTOMER_ID, $customerId);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->getData(self::NAME);
    }

    /**
     * @param string $businessName
     * @return BuyerResponseInterface
     */
    public function setName(string $businessName): BuyerResponseInterface
    {
        return $this->setData(self::NAME, $businessName);
    }

    /**
     * @return string
     */
    public function getClientReferenceBuyerId(): string
    {
        return $this->getData(self::CLIENT_REFERENCE_BUYER_ID);
    }

    /**
     * @param string $clientReferenceBuyerId
     * @return BuyerResponseInterface
     */
    public function setClientReferenceBuyerId(string $clientReferenceBuyerId): BuyerResponseInterface
    {
        return $this->setData(self::CLIENT_REFERENCE_BUYER_ID, $clientReferenceBuyerId);
    }

    /**
     * @return string
     */
    public function getBuyerStatus(): string
    {
        return $this->getData(self::BUYER_STATUS);
    }

    /**
     * @param string $status
     * @return BuyerResponseInterface
     */
    public function setBuyerStatus(string $status): BuyerResponseInterface
    {
        return $this->setData(self::BUYER_STATUS, $status);
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->getData(self::CURRENCY);
    }

    /**
     * @param string $currency
     * @return BuyerResponseInterface
     */
    public function setCurrency(string $currency): BuyerResponseInterface
    {
        return $this->setData(self::CURRENCY, $currency);
    }

    /**
     * @return int
     */
    public function getCreditLimit(): int
    {
        return $this->getData(self::CREDIT_LIMIT);
    }

    /**
     * @param int $creditLimit
     * @return BuyerResponseInterface
     */
    public function setCreditLimit(int $creditLimit): BuyerResponseInterface
    {
        return $this->setData(self::CREDIT_LIMIT, $creditLimit);
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
     * @return BuyerResponseInterface
     */
    public function setCreditAvailable(int $creditAvailable): BuyerResponseInterface
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
     * @return BuyerResponseInterface
     */
    public function setCreditBalance(int $creditBalance): BuyerResponseInterface
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
     * @return BuyerResponseInterface
     */
    public function setCreditAuthorized(int $creditAuthorized): BuyerResponseInterface
    {
        return $this->setData(self::CREDIT_AUTHORIZED, $creditAuthorized);
    }
}
