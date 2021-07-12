<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Charge;

interface ChargeResponseInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param string $id
     * @return ChargeResponseInterface
     */
    public function setId(string $id): ChargeResponseInterface;

    /**
     * @return string
     */
    public function getSellerId(): string;

    /**
     * @param string $sellerId
     * @return ChargeResponseInterface
     */
    public function setSellerId(string $sellerId): ChargeResponseInterface;

    /**
     * @return string
     */
    public function getBuyerId(): string;

    /**
     * @param string $buyerId
     * @return ChargeResponseInterface
     */
    public function setBuyerId(string $buyerId): ChargeResponseInterface;

    /**
     * @return string
     */
    public function getStatus(): string;

    /**
     * @param string $status
     * @return ChargeResponseInterface
     */
    public function setStatus(string $status): ChargeResponseInterface;

    /**
     * @return string
     */
    public function getCurrency(): string;

    /**
     * @param string $currency
     * @return ChargeResponseInterface
     */
    public function setCurrency(string $currency): ChargeResponseInterface;

    /**
     * @return int
     */
    public function getTotalAmount(): int;

    /**
     * @param int $totalAmount
     * @return ChargeResponseInterface
     */
    public function setTotalAmount(int $totalAmount): ChargeResponseInterface;

    /**
     * @return int
     */
    public function getTaxAmount(): int;

    /**
     * @param int $taxAmount
     * @return ChargeResponseInterface
     */
    public function setTaxAmount(int $taxAmount): ChargeResponseInterface;

    /**
     * @return int
     */
    public function getShippingAmount(): int;

    /**
     * @param int $shippingAmount
     * @return ChargeResponseInterface
     */
    public function setShippingAmount(int $shippingAmount): ChargeResponseInterface;

    /**
     * @return int
     */
    public function getShippingTaxAmount(): int;

    /**
     * @param int $shippingTaxAmount
     * @return ChargeResponseInterface
     */
    public function setShippingTaxAmount(int $shippingTaxAmount): ChargeResponseInterface;

    /**
     * @return int
     */
    public function getShippingDiscountAmount(): int;

    /**
     * @param int $shippingDiscountAmount
     * @return ChargeResponseInterface
     */
    public function setShippingDiscountAmount(int $shippingDiscountAmount): ChargeResponseInterface;

    /**
     * @return int|null
     */
    public function getDiscountAmount(): ?int;

    /**
     * @param int $discountAmount
     * @return ChargeResponseInterface
     */
    public function setDiscountAmount(int $discountAmount): ChargeResponseInterface;

    /**
     * @return int|null
     */
    public function getForeignExchangeFee(): ?int;

    /**
     * @param int $foreignExchangeFee
     * @return ChargeResponseInterface
     */
    public function setForeignExchangeFee(int $foreignExchangeFee): ChargeResponseInterface;

    /**
     * @return int
     */
    public function getOriginalTotalAmount(): int;

    /**
     * @param int $originalTotalAmount
     * @return ChargeResponseInterface
     */
    public function setOriginalTotalAmount(int $originalTotalAmount): ChargeResponseInterface;

    /**
     * @return string
     */
    public function getPaidAmountCurrency(): string;

    /**
     * @param string $paidAmountCurrency
     * @return ChargeResponseInterface
     */
    public function setPaidAmountCurrency(string $paidAmountCurrency): ChargeResponseInterface;

    /**
     * @return int
     */
    public function getPaidAmount(): int;

    /**
     * @param int $paidAmount
     * @return ChargeResponseInterface
     */
    public function setPaidAmount(int $paidAmount): ChargeResponseInterface;

    /**
     * @return string
     */
    public function getOrderUrl(): string;

    /**
     * @param string $orderUrl
     * @return ChargeResponseInterface
     */
    public function setOrderUrl(string $orderUrl): ChargeResponseInterface;

    /**
     * @return string
     */
    public function getOrderNumber(): string;

    /**
     * @param string $orderNumber
     * @return ChargeResponseInterface
     */
    public function setOrderNumber(string $orderNumber): ChargeResponseInterface;

    /**
     * @return string|null
     */
    public function getPoNumber(): ?string;

    /**
     * @param string $poNumber
     * @return ChargeResponseInterface
     */
    public function setPoNumber(string $poNumber): ChargeResponseInterface;

    /**
     * @return string|null
     */
    public function getPreviousChargeId(): ?string;

    /**
     * @param string $previousChargeId
     * @return ChargeResponseInterface
     */
    public function setPreviousChargeId(string $previousChargeId): ChargeResponseInterface;

    /**
     * @return string|null
     */
    public function getComment(): ?string;

    /**
     * @param string $comment
     * @return ChargeResponseInterface
     */
    public function setComment(string $comment): ChargeResponseInterface;

    /**
     * @return string|null
     */
    public function getDueDate(): ?string;

    /**
     * @param string $dueDate
     * @return ChargeResponseInterface
     */
    public function setDueDate(string $dueDate): ChargeResponseInterface;

    /**
     * @return string
     */
    public function getCreated(): string;

    /**
     * @param string $created
     * @return ChargeResponseInterface
     */
    public function setCreated(string $created): ChargeResponseInterface;

    /**
     * @return string
     */
    public function getModified(): string;

    /**
     * @param string $modified
     * @return ChargeResponseInterface
     */
    public function setModified(string $modified): ChargeResponseInterface;

    /**
     * @return ChargeDetailInterface[]
     */
    public function getDetails(): array;

    /**
     * @param array $items
     * @return ChargeResponseInterface
     */
    public function setDetails(array $items): ChargeResponseInterface;

    /**
     * @return string|null
     */
    public function getCancellationReason(): ?string;

    /**
     * @param string $cancellationReason
     * @return ChargeResponseInterface
     */
    public function setCancellationReason(string $cancellationReason): ChargeResponseInterface;

    /**
     * @return string|null
     */
    public function getReturnComment(): ?string;

    /**
     * @param string $returnComment
     * @return ChargeResponseInterface
     */
    public function setReturnComment(string $returnComment): ChargeResponseInterface;

    /**
     * @return string|null
     */
    public function getReturnReason(): ?string;

    /**
     * @param string $returnReason
     * @return ChargeResponseInterface
     */
    public function setReturnReason(string $returnReason): ChargeResponseInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;

    /**
     * @return string|null
     */
    public function getInvoiceUrl(): ?string;

    /**
     * @param string $invoiceUrl
     * @return ChargeResponseInterface
     */
    public function setInvoiceUrl(string $invoiceUrl): ChargeResponseInterface;

     /**
     * @return string|null
     */
    public function getCancellationComment(): ?string;

    /**
     * @param string $cancellationComment
     * @return ChargeResponseInterface
     */
    public function setCancellationComment(string $cancellationComment): ChargeResponseInterface;


    /**
     * @return string|null
     */
    public function getDisputeComment(): ?string;

    /**
     * @param string $disputeComment
     * @return ChargeResponseInterface
     */
    public function setDisputeComment(string $disputeComment): ChargeResponseInterface;

    /**
     * @return string|null
     */
    public function getDisputeReason(): ?string;

    /**
     * @param string $disputeReason
     * @return ChargeResponseInterface
     */
    public function setDisputeReason(string $disputeReason): ChargeResponseInterface;

    /**
     * @return string|null
     */
    public function getBuyerCurrency(): ?string;

    /**
     * @param string $buyerCurrency
     * @return ChargeResponseInterface
     */
    public function setBuyerCurrency(string $buyerCurrency): ChargeResponseInterface;

    /**
     * @return int|null
     */
    public function getBuyerTotalAmount(): ?int;

    /**
     * @param int $buyerTotalAmount
     * @return ChargeResponseInterface
     */
    public function setBuyerTotalAmount(int $buyerTotalAmount): ChargeResponseInterface;

    /**
     * @return int|null
     */
    public function getBuyerOpenAmount(): ?int;

    /**
     * @param int $buyerOpenAmount
     * @return ChargeResponseInterface
     */
    public function setBuyerOpenAmount(int $buyerOpenAmount): ChargeResponseInterface;

     /**
     * @return bool|null
     */
    public function getInDispute(): ?bool;

    /**
     * @param bool $inDispute
     * @return ChargeResponseInterface
     */
    public function setInDispute(bool $inDispute): ChargeResponseInterface;

    /**
     * @return int|null
     */
    public function getChargePaymentDays(): ?int;

    /**
     * @param int $chargePaymentDays
     * @return ChargeResponseInterface
     */
    public function setChargePaymentDays(int $chargePaymentDays): ChargeResponseInterface;

    /**
     * @return array|null
     */
    public function getMetadata(): ?array;

    /**
     * @param array $metadata
     * @return ChargeResponseInterface
     */
    public function setMetadata(array $metadata): ChargeResponseInterface;
}
