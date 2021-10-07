<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Buyer;

interface BuyerResponseInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param string $id
     * @return BuyerResponseInterface
     */
    public function setId(string $id): BuyerResponseInterface;

    /**
     * @return string
     */
    public function getCustomerId(): string;

    /**
     * @param string $customerId
     * @return BuyerResponseInterface
     */
    public function setCustomerId(string $customerId): BuyerResponseInterface;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $businessName
     * @return BuyerResponseInterface
     */
    public function setName(string $businessName): BuyerResponseInterface;

    /**
     * @return string|null
     */
    public function getClientReferenceBuyerId(): ?string;

    /**
     * @param string $clientReferenceBuyerId
     * @return BuyerResponseInterface
     */
    public function setClientReferenceBuyerId(string $clientReferenceBuyerId): BuyerResponseInterface;

    /**
     * @return string
     */
    public function getBuyerStatus(): string;

    /**
     * @param string $status
     * @return BuyerResponseInterface
     */
    public function setBuyerStatus(string $status): BuyerResponseInterface;

    /**
     * @return string
     */
    public function getCurrency(): string;

    /**
     * @param string $currency
     * @return BuyerResponseInterface
     */
    public function setCurrency(string $currency): BuyerResponseInterface;

    /**
     * @return int
     */
    public function getCreditLimit(): int;

    /**
     * @param int $creditLimit
     * @return BuyerResponseInterface
     */
    public function setCreditLimit(int $creditLimit): BuyerResponseInterface;

    /**
     * @return int
     */
    public function getCreditAvailable(): int;

    /**
     * @param int $creditAvailable
     * @return BuyerResponseInterface
     */
    public function setCreditAvailable(int $creditAvailable): BuyerResponseInterface;

    /**
     * @return int
     */
    public function getCreditBalance(): int;

    /**
     * @param int $creditBalance
     * @return BuyerResponseInterface
     */
    public function setCreditBalance(int $creditBalance): BuyerResponseInterface;

    /**
     * @return int
     */
    public function getCreditAuthorized(): int;

    /**
     * @param int $creditAuthorized
     * @return BuyerResponseInterface
     */
    public function setCreditAuthorized(int $creditAuthorized): BuyerResponseInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
