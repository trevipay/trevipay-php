<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Buyer;

interface BuyerResponseInterface
{
    /**
     * @return string|null
     */
    public function getId(): ?string;

    /**
     * @param string $id
     * @return BuyerResponseInterface
     */
    public function setId(string $id): BuyerResponseInterface;

    /**
     * @return string|null
     */
    public function getBusinessName(): ?string;

    /**
     * @param string $businessName
     * @return BuyerResponseInterface
     */
    public function setBusinessName(string $businessName): BuyerResponseInterface;

    /**
     * @return string|null
     */
    public function getClientReferenceId(): ?string;

    /**
     * @param string $clientReferenceId
     * @return BuyerResponseInterface
     */
    public function setClientReferenceId(string $clientReferenceId): BuyerResponseInterface;

    /**
     * @return string|null
     */
    public function getStatus(): ?string;

    /**
     * @param string $status
     * @return BuyerResponseInterface
     */
    public function setStatus(string $status): BuyerResponseInterface;

    /**
     * @return array|null
     */
    public function getCurrency(): ?array;

    /**
     * @param array $currency
     * @return BuyerResponseInterface
     */
    public function setCurrency(array $currency): BuyerResponseInterface;

    /**
     * @return int|null
     */
    public function getCreditApproved(): ?int;

    /**
     * @param int $creditApproved
     * @return BuyerResponseInterface
     */
    public function setCreditApproved(int $creditApproved): BuyerResponseInterface;

    /**
     * @return int|null
     */
    public function getCreditBalance(): ?int;

    /**
     * @param int $creditBalance
     * @return BuyerResponseInterface
     */
    public function setCreditBalance(int $creditBalance): BuyerResponseInterface;

    /**
     * @return int|null
     */
    public function getCreditAuthorized(): ?int;

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
