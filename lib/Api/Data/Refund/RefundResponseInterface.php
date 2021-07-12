<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Refund;

interface RefundResponseInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param string $id
     * @return RefundResponseInterface
     */
    public function setId(string $id): RefundResponseInterface;

    /**
     * @return string
     */
    public function getChargeId(): string;

    /**
     * @param string $chargeId
     * @return RefundResponseInterface
     */
    public function setChargeId(string $chargeId): RefundResponseInterface;

    /**
     * @return string
     */
    public function getSellerId(): string;

    /**
     * @param string $sellerId
     * @return RefundResponseInterface
     */
    public function setSellerId(string $sellerId): RefundResponseInterface;

    /**
     * @return string
     */
    public function getBuyerId(): string;

    /**
     * @param string $buyerId
     * @return RefundResponseInterface
     */
    public function setBuyerId(string $buyerId): RefundResponseInterface;

    /**
     * @return string
     */
    public function getStatus(): string;

    /**
     * @param string $status
     * @return RefundResponseInterface
     */
    public function setStatus(string $status): RefundResponseInterface;

    /**
     * @return string
     */
    public function getCurrency(): string;

    /**
     * @param string $currency
     * @return RefundResponseInterface
     */
    public function setCurrency(string $currency): RefundResponseInterface;

    /**
     * @return int
     */
    public function getTotalAmount(): int;

    /**
     * @param int $totalAmount
     * @return RefundResponseInterface
     */
    public function setTotalAmount(int $totalAmount): RefundResponseInterface;

    /**
     * @return int
     */
    public function getTaxAmount(): int;

    /**
     * @param int $taxAmount
     * @return RefundResponseInterface
     */
    public function setTaxAmount(int $taxAmount): RefundResponseInterface;

    /**
     * @return int
     */
    public function getShippingAmount(): int;

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
    public function getRefundAmountCurrency(): ?string;

    /**
     * @param string $refundAmountCurrency
     * @return RefundResponseInterface
     */
    public function setRefundAmountCurrency(string $refundAmountCurrency): RefundResponseInterface;

    /**
     * @return int|null
     */
    public function getRefundAmount(): ?int;

    /**
     * @param int $refundAmount
     * @return RefundResponseInterface
     */
    public function setRefundAmount(int $refundAmount): RefundResponseInterface;

    /**
     * @return string
     */
    public function getRefundReason(): string;

    /**
     * @param string $refundReason
     * @return RefundResponseInterface
     */
    public function setRefundReason(string $refundReason): RefundResponseInterface;

    /**
     * @return string|null
     */
    public function getRefundComment(): ?string;

    /**
     * @param string $refundComment
     * @return RefundResponseInterface
     */
    public function setRefundComment(string $refundComment): RefundResponseInterface;

    /**
     * @return RefundDetailInterface[]
     */
    public function getDetails(): array;

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
     * @param array $shippingTaxDetails
     * @return RefundResponseInterface
     */
    public function setShippingTaxDetails(array $shippingTaxDetails): RefundResponseInterface;
}
