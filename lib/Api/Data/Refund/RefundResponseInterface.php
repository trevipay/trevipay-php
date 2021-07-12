<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Refund;

use TreviPay\TreviPay\Api\Data\Refund\RefundDetailInterface;

interface RefundResponseInterface
{
    /**
     * @return string|null
     */
    public function getId(): ?string;

    /**
     * @param string $id
     * @return RefundResponseInterface
     */
    public function setId(string $id): RefundResponseInterface;

    /**
     * @return string|null
     */
    public function getChargeId(): ?string;

    /**
     * @param string $chargeId
     * @return RefundResponseInterface
     */
    public function setChargeId(string $chargeId): RefundResponseInterface;

    /**
     * @return string|null
     */
    public function getSellerId(): ?string;

    /**
     * @param string $sellerId
     * @return RefundResponseInterface
     */
    public function setSellerId(string $sellerId): RefundResponseInterface;

    /**
     * @return string|null
     */
    public function getBuyerId(): ?string;

    /**
     * @param string $buyerId
     * @return RefundResponseInterface
     */
    public function setBuyerId(string $buyerId): RefundResponseInterface;

    /**
     * @return string|null
     */
    public function getStatus(): ?string;

    /**
     * @param string $status
     * @return RefundResponseInterface
     */
    public function setStatus(string $status): RefundResponseInterface;

    /**
     * @return string|null
     */
    public function getCurrency(): ?string;

    /**
     * @param string $currency
     * @return RefundResponseInterface
     */
    public function setCurrency(string $currency): RefundResponseInterface;

    /**
     * @return int|null
     */
    public function getTotalAmount(): ?int;

    /**
     * @param int $totalAmount
     * @return RefundResponseInterface
     */
    public function setTotalAmount(int $totalAmount): RefundResponseInterface;

    /**
     * @return int|null
     */
    public function getTaxAmount(): ?int;

    /**
     * @param int $taxAmount
     * @return RefundResponseInterface
     */
    public function setTaxAmount(int $taxAmount): RefundResponseInterface;

    /**
     * @return int|null
     */
    public function getShippingAmount(): ?int;

    /**
     * @param int $shippingAmount
     * @return RefundResponseInterface
     */
    public function setShippingAmount(int $shippingAmount): RefundResponseInterface;

    /**
     * @return int|null
     */
    public function getShippingTaxAmount(): ?int;

    /**
     * @param int $shippingTaxAmount
     * @return RefundResponseInterface
     */
    public function setShippingTaxAmount(int $shippingTaxAmount): RefundResponseInterface;

    /**
     * @return int|null
     */
    public function getShippingDiscountAmount(): ?int;

    /**
     * @param int $shippingDiscountAmount
     * @return RefundResponseInterface
     */
    public function setShippingDiscountAmount(int $shippingDiscountAmount): RefundResponseInterface;

    /**
     * @return int|null
     */
    public function getDiscountAmount(): ?int;

    /**
     * @param int $discountAmount
     * @return RefundResponseInterface
     */
    public function setDiscountAmount(int $discountAmount): RefundResponseInterface;

    /**
     * @return string|null
     */
    public function getCreditAmountCurrency(): ?string;

    /**
     * @param string $creditAmountCurrency
     * @return RefundResponseInterface
     */
    public function setCreditAmountCurrency(string $creditAmountCurrency): RefundResponseInterface;

    /**
     * @return int|null
     */
    public function getCreditAmount(): ?int;

    /**
     * @param int $creditAmount
     * @return RefundResponseInterface
     */
    public function setCreditAmount(int $creditAmount): RefundResponseInterface;

    /**
     * @return string|null
     */
    public function getCreditReason(): ?string;

    /**
     * @param string $creditReason
     * @return RefundResponseInterface
     */
    public function setCreditReason(string $creditReason): RefundResponseInterface;

    /**
     * @return string|null
     */
    public function getCreditComment(): ?string;

    /**
     * @param string $creditComment
     * @return RefundResponseInterface
     */
    public function setCreditComment(string $creditComment): RefundResponseInterface;

    /**
     * @return RefundDetailInterface[]
     */
    public function getDetails(): ?array;

    /**
     * @param array $items
     * @return RefundResponseInterface
     */
    public function setDetails(array $items): RefundResponseInterface;

    /**
     * @return RefundDetailInterface[]
     */
    public function getShippingTaxDetails(): ?array;

    /**
     * @param array $items
     * @return RefundResponseInterface
     */
    public function setShippingTaxDetails(array $items): RefundResponseInterface;
}
