<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Charge\CreateMethod;

use TreviPay\TreviPay\Api\Data\Charge\ChargeResponseInterface;

interface CreateAChargeRequestInterface extends ChargeResponseInterface
{
    /**
     * @param string $sellerId
     * @return ChargeResponseInterface
     */
    public function setSellerId(string $sellerId): ChargeResponseInterface;

    /**
     * @param string $buyerId
     * @return ChargeResponseInterface
     */
    public function setBuyerId(string $buyerId): ChargeResponseInterface;

    /**
     * @param string $currency
     * @return ChargeResponseInterface
     */
    public function setCurrency(string $currency): ChargeResponseInterface;

    /**
     * @param int $totalAmount
     * @return ChargeResponseInterface
     */
    public function setTotalAmount(int $totalAmount): ChargeResponseInterface;

    /**
     * @param int $taxAmount
     * @return ChargeResponseInterface
     */
    public function setTaxAmount(int $taxAmount): ChargeResponseInterface;

    /**
     * @param int $shippingAmount
     * @return ChargeResponseInterface
     */
    public function setShippingAmount(int $shippingAmount): ChargeResponseInterface;

    /**
     * @param int $shippingTaxAmount
     * @return ChargeResponseInterface
     */
    public function setShippingTaxAmount(int $shippingTaxAmount): ChargeResponseInterface;

    /**
     * @param int $discountAmount
     * @return ChargeResponseInterface
     */
    public function setDiscountAmount(int $discountAmount): ChargeResponseInterface;

    /**
     * @param string $orderUrl
     * @return ChargeResponseInterface
     */
    public function setOrderUrl(string $orderUrl): ChargeResponseInterface;

    /**
     * @param string $orderNumber
     * @return ChargeResponseInterface
     */
    public function setOrderNumber(string $orderNumber): ChargeResponseInterface;

    /**
     * @param string $poNumber
     * @return ChargeResponseInterface
     */
    public function setPoNumber(string $poNumber): ChargeResponseInterface;

    /**
     * @param string $authorizationId
     * @return CreateAChargeRequestInterface
     */
    public function setAuthorizationId(string $authorizationId): CreateAChargeRequestInterface;

    /**
     * @param string $previousChargeId
     * @return ChargeResponseInterface
     */
    public function setPreviousChargeId(string $previousChargeId): ChargeResponseInterface;

    /**
     * @param string $comment
     * @return ChargeResponseInterface
     */
    public function setComment(string $comment): ChargeResponseInterface;

    /**
     * @param array $items
     * @return ChargeResponseInterface
     */
    public function setDetails(array $items): ChargeResponseInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
