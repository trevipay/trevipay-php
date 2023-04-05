<?php


namespace TreviPay\TreviPay\Api\Data\Authorization;

interface AuthorizationResponseInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param string $id
     * @return AuthorizationResponseInterface
     */
    public function setId(string $id): AuthorizationResponseInterface;

    /**
     * @return string
     */
    public function getSellerId(): string;

    /**
     * @param string $sellerId
     * @return AuthorizationResponseInterface
     */
    public function setSellerId(string $sellerId): AuthorizationResponseInterface;

    /**
     * @return string
     */
    public function getBuyerId(): string;

    /**
     * @param string $buyerId
     * @return AuthorizationResponseInterface
     */
    public function setBuyerId(string $buyerId): AuthorizationResponseInterface;

    /**
     * @return string
     */
    public function getCustomerId(): string;

    /**
     * @param string $customerId
     * @return AuthorizationResponseInterface
     */
    public function setCustomerId(string $customerId): AuthorizationResponseInterface;

    /**
     * @return string
     */
    public function getCurrency(): string;

    /**
     * @param string $currency
     * @return AuthorizationResponseInterface
     */
    public function setCurrency(string $currency): AuthorizationResponseInterface;

    /**
     * @return int
     */
    public function getAuthorizedAmount(): int;

    /**
     * @param int $authorizedAmount
     * @return AuthorizationResponseInterface
     */
    public function setAuthorizedAmount(int $authorizedAmount): AuthorizationResponseInterface;

    /**
     * @return int|null
     */
    public function getCapturedAmount(): ?int;

    /**
     * @param int $capturedAmount
     * @return AuthorizationResponseInterface
     */
    public function setCapturedAmount(int $capturedAmount): AuthorizationResponseInterface;

    /**
     * @return int|null
     */
    public function getForeignExchangeFee(): ?int;

    /**
     * @param int $foreignExchangeFee
     * @return AuthorizationResponseInterface
     */
    public function setForeignExchangeFee(int $foreignExchangeFee): AuthorizationResponseInterface;

    /**
     * @return string
     */
    public function getStatus(): string;

    /**
     * @param string $status
     * @return AuthorizationResponseInterface
     */
    public function setStatus(string $status): AuthorizationResponseInterface;

    /**
     * @return string|null
     */
    public function getPoNumber(): ?string;

    /**
     * @param string $poNumber
     * @return AuthorizationResponseInterface
     */
    public function setPoNumber(string $poNumber): AuthorizationResponseInterface;

    /**
     * @return string
     */
    public function getExpires(): string;

    /**
     * @param string $expires
     * @return AuthorizationResponseInterface
     */
    public function setExpires(string $expires): AuthorizationResponseInterface;

    /**
     * @return string|null
     */
    public function getCreated(): ?string;

    /**
     * @param string $created
     * @return AuthorizationResponseInterface
     */
    public function setCreated(string $created): AuthorizationResponseInterface;

    /**
     * @return string|null
     */
    public function getModified(): ?string;

    /**
     * @param string $modified
     * @return AuthorizationResponseInterface
     */
    public function setModified(string $modified): AuthorizationResponseInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
