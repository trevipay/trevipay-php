<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data\Authorization;

use TreviPay\TreviPay\Api\Data\Authorization\AuthorizationResponseInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class AuthorizationResponse extends RequestDataObject implements AuthorizationResponseInterface
{
    private const ID = 'id';

    private const SELLER_ID = 'seller_id';

    private const BUYER_ID = 'buyer_id';

    private const CURRENCY = 'currency';

    private const PREAUTHORIZED_AMOUNT = 'authorized_amount';

    private const CAPTURED_AMOUNT = 'captured_amount';

    private const FOREIGN_EXCHANGE_FEE = 'foreign_exchange_fee';

    private const STATUS = 'status';

    private const PO_NUMBER = 'po_number';

    private const EXPIRES = 'expires';

    private const CREATED = 'created';

    private const MODIFIED = 'modified';

    /**
     * @return string|null
     */
    public function getId(): ?string
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
     * @return string|null
     */
    public function getSellerId(): ?string
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
     * @return string|null
     */
    public function getBuyerId(): ?string
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
     * @return string|null
     */
    public function getCurrency(): ?string
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
     * @return int|null
     */
    public function getAuthorizedAmount(): ?int
    {
        return $this->getData(self::PREAUTHORIZED_AMOUNT);
    }

    /**
     * @param int $authorizedAmount
     * @return AuthorizationResponseInterface
     */
    public function setAuthorizedAmount(int $authorizedAmount): AuthorizationResponseInterface
    {
        return $this->setData(self::PREAUTHORIZED_AMOUNT, $authorizedAmount);
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
     * @return string|null
     */
    public function getStatus(): ?string
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
     * @return string|null
     */
    public function getExpires(): ?string
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
