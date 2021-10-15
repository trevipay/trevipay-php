<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data\Authorization;

use TreviPay\TreviPay\Api\Data\Authorization\AuthorizationResponseInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class AuthorizationResponse extends RequestDataObject implements AuthorizationResponseInterface
{
    public const ID = 'id';

    public const SELLER_ID = 'seller_id';

    public const BUYER_ID = 'buyer_id';

    public const CUSTOMER_ID = 'customer_id';

    public const CURRENCY = 'currency';

    public const AUTHORIZED_AMOUNT = 'authorized_amount';

    public const CAPTURED_AMOUNT = 'captured_amount';

    public const FOREIGN_EXCHANGE_FEE = 'foreign_exchange_fee';

    public const STATUS = 'status';

    public const PO_NUMBER = 'po_number';

    public const EXPIRES = 'expires';

    public const CREATED = 'created';

    public const MODIFIED = 'modified';

    public const REQUIRED_FIELDS = [
        self::ID,
        self::SELLER_ID,
        self::BUYER_ID,
        self::CUSTOMER_ID,
        self::CURRENCY,
        self::AUTHORIZED_AMOUNT,
        self::CAPTURED_AMOUNT,
        self::FOREIGN_EXCHANGE_FEE,
        self::STATUS,
        self::EXPIRES,
        self::CREATED,
        self::MODIFIED,
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
     * @return AuthorizationResponseInterface
     */
    public function setId(string $id): AuthorizationResponseInterface
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @return string
     */
    public function getSellerId(): string
    {
        return $this->getData(self::SELLER_ID);
    }

    /**
     * @param string $sellerId
     * @return AuthorizationResponseInterface
     */
    public function setSellerId(string $sellerId): AuthorizationResponseInterface
    {
        return $this->setData(self::SELLER_ID, $sellerId);
    }

    /**
     * @return string
     */
    public function getBuyerId(): string
    {
        return $this->getData(self::BUYER_ID);
    }

    /**
     * @param string $buyerId
     * @return AuthorizationResponseInterface
     */
    public function setBuyerId(string $buyerId): AuthorizationResponseInterface
    {
        return $this->setData(self::BUYER_ID, $buyerId);
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
     * @return AuthorizationResponseInterface
     */
    public function setCustomerId(string $customerId): AuthorizationResponseInterface
    {
        return $this->setData(self::CUSTOMER_ID, $customerId);
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
     * @return AuthorizationResponseInterface
     */
    public function setCurrency(string $currency): AuthorizationResponseInterface
    {
        return $this->setData(self::CURRENCY, $currency);
    }

    /**
     * @return int
     */
    public function getAuthorizedAmount(): int
    {
        return $this->getData(self::AUTHORIZED_AMOUNT);
    }

    /**
     * @param int $authorizedAmount
     * @return AuthorizationResponseInterface
     */
    public function setAuthorizedAmount(int $authorizedAmount): AuthorizationResponseInterface
    {
        return $this->setData(self::AUTHORIZED_AMOUNT, $authorizedAmount);
    }

    /**
     * @return int|null
     */
    public function getCapturedAmount(): ?int
    {
        return $this->getData(self::CAPTURED_AMOUNT);
    }

    /**
     * @param int $capturedAmount
     * @return AuthorizationResponseInterface
     */
    public function setCapturedAmount(int $capturedAmount): AuthorizationResponseInterface
    {
        return $this->setData(self::CAPTURED_AMOUNT, $capturedAmount);
    }

    /**
     * @return int|null
     */
    public function getForeignExchangeFee(): ?int
    {
        return $this->getData(self::FOREIGN_EXCHANGE_FEE);
    }

    /**
     * @param int $foreignExchangeFee
     * @return AuthorizationResponseInterface
     */
    public function setForeignExchangeFee(int $foreignExchangeFee): AuthorizationResponseInterface
    {
        return $this->setData(self::FOREIGN_EXCHANGE_FEE, $foreignExchangeFee);
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @param string $status
     * @return AuthorizationResponseInterface
     */
    public function setStatus(string $status): AuthorizationResponseInterface
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * @return string|null
     */
    public function getPoNumber(): ?string
    {
        return $this->getData(self::PO_NUMBER);
    }

    /**
     * @param string $poNumber
     * @return AuthorizationResponseInterface
     */
    public function setPoNumber(string $poNumber): AuthorizationResponseInterface
    {
        return $this->setData(self::PO_NUMBER, $poNumber);
    }

    /**
     * @return string
     */
    public function getExpires(): string
    {
        return $this->getData(self::EXPIRES);
    }

    /**
     * @param string $expires
     * @return AuthorizationResponseInterface
     */
    public function setExpires(string $expires): AuthorizationResponseInterface
    {
        return $this->setData(self::EXPIRES, $expires);
    }

    /**
     * @return string|null
     */
    public function getCreated(): ?string
    {
        return $this->getData(self::CREATED);
    }

    /**
     * @param string $created
     * @return AuthorizationResponseInterface
     */
    public function setCreated(string $created): AuthorizationResponseInterface
    {
        return $this->setData(self::CREATED, $created);
    }

    /**
     * @return string|null
     */
    public function getModified(): ?string
    {
        return $this->getData(self::MODIFIED);
    }

    /**
     * @param string $modified
     * @return AuthorizationResponseInterface
     */
    public function setModified(string $modified): AuthorizationResponseInterface
    {
        return $this->setData(self::MODIFIED, $modified);
    }
}
