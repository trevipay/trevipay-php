<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Authorization\CreateMethod;

interface CreateAnAuthorizationRequestInterface
{
    /**
     * @return string|null
     */
    public function getSellerId(): ?string;

    /**
     * @param string $sellerId
     * @return CreateAnAuthorizationRequestInterface
     */
    public function setSellerId(string $sellerId): CreateAnAuthorizationRequestInterface;

    /**
     * @return string|null
     */
    public function getBuyerId(): ?string;

    /**
     * @param string $buyerId
     * @return CreateAnAuthorizationRequestInterface
     */
    public function setBuyerId(string $buyerId): CreateAnAuthorizationRequestInterface;

    /**
     * @return string|null
     */
    public function getCurrency(): ?string;

    /**
     * @param string $currency
     * @return CreateAnAuthorizationRequestInterface
     */
    public function setCurrency(string $currency): CreateAnAuthorizationRequestInterface;

    /**
     * @return int|null
     */
    public function getAuthorizedAmount(): ?int;

    /**
     * @param int $authorizedAmount
     * @return CreateAnAuthorizationRequestInterface
     */
    public function setAuthorizedAmount(int $authorizedAmount): CreateAnAuthorizationRequestInterface;

    /**
     * @return string|null
     */
    public function getPoNumber(): ?string;

    /**
     * @param string $poNumber
     * @return CreateAnAuthorizationRequestInterface
     */
    public function setPoNumber(string $poNumber): CreateAnAuthorizationRequestInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
