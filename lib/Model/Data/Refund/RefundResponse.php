<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data\Refund;

use TreviPay\TreviPay\Api\Data\Refund\RefundResponseInterface;
use TreviPay\TreviPay\Api\Data\Refund\RefundDetailInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

/**
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 */
class RefundResponse extends RequestDataObject implements RefundResponseInterface
{
    private const ID = 'id';
    private const CHARGE_ID = 'charge_id';
    private const SELLER_ID = 'seller_id';
    private const BUYER_ID = 'buyer_id';
    private const STATUS = 'status';
    private const CURRENCY = 'currency';
    private const TOTAL_AMOUNT = 'total_amount';
    private const TAX_AMOUNT = 'tax_amount';
    private const SHIPPING_AMOUNT = 'shipping_amount';
    private const SHIPPING_TAX_AMOUNT = 'shipping_tax_amount';
    private const SHIPPING_TAX_DETAILS = 'shipping_tax_details';
    private const SHIPPING_DISCOUNT_AMOUNT = 'shipping_discount_amount';
    private const DISCOUNT_AMOUNT = 'discount_amount';
    private const REFUND_AMOUNT = 'refund_amount';
    private const REFUND_AMOUNT_CURRENCY = 'refund_amount_currency';
    private const REFUND_REASON = 'refund_reason';
    private const REFUND_COMMENT = 'refund_comment';
    private const DETAILS = 'details';

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->getData(self::ID);
    }

    /**
     * @param string $id
     * @return RefundResponseInterface
     */
    public function setId(string $id): RefundResponseInterface
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @return string
     */
    public function getChargeId(): string
    {
        return $this->getData(self::CHARGE_ID);
    }

    /**
     * @param string $setChargeId
     * @return RefundResponseInterface
     */
    public function setChargeId(string $setChargeId): RefundResponseInterface
    {
        return $this->setData(self::CHARGE_ID, $setChargeId);
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
     * @return RefundResponseInterface
     */
    public function setSellerId(string $sellerId): RefundResponseInterface
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
     * @return RefundResponseInterface
     */
    public function setBuyerId(string $buyerId): RefundResponseInterface
    {
        return $this->setData(self::BUYER_ID, $buyerId);
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
     * @return RefundResponseInterface
     */
    public function setStatus(string $status): RefundResponseInterface
    {
        return $this->setData(self::STATUS, $status);
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
     * @return RefundResponseInterface
     */
    public function setCurrency(string $currency): RefundResponseInterface
    {
        return $this->setData(self::CURRENCY, $currency);
    }

    /**
     * @return int
     */
    public function getTotalAmount(): int
    {
        return $this->getData(self::TOTAL_AMOUNT);
    }

    /**
     * @param int $totalAmount
     * @return RefundResponseInterface
     */
    public function setTotalAmount(int $totalAmount): RefundResponseInterface
    {
        return $this->setData(self::TOTAL_AMOUNT, $totalAmount);
    }

    /**
     * @return int
     */
    public function getTaxAmount(): int
    {
        return $this->getData(self::TAX_AMOUNT);
    }

    /**
     * @param int $taxAmount
     * @return RefundResponseInterface
     */
    public function setTaxAmount(int $taxAmount): RefundResponseInterface
    {
        return $this->setData(self::TAX_AMOUNT, $taxAmount);
    }

    /**
     * @return int
     */
    public function getShippingAmount(): int
    {
        return $this->getData(self::SHIPPING_AMOUNT);
    }

    /**
     * @param int $shippingAmount
     * @return RefundResponseInterface
     */
    public function setShippingAmount(int $shippingAmount): RefundResponseInterface
    {
        return $this->setData(self::SHIPPING_AMOUNT, $shippingAmount);
    }

    /**
     * @return int|null
     */
    public function getShippingTaxAmount(): ?int
    {
        return $this->getData(self::SHIPPING_TAX_AMOUNT);
    }

    /**
     * @param int $shippingTaxAmount
     * @return RefundResponseInterface
     */
    public function setShippingTaxAmount(int $shippingTaxAmount): RefundResponseInterface
    {
        return $this->setData(self::SHIPPING_TAX_AMOUNT, $shippingTaxAmount);
    }

    /**
     * @return array|null
     */
    public function getShippingTaxDetails(): ?array
    {
        return $this->getData(self::SHIPPING_TAX_DETAILS);
    }

    /**
     * @param array|null $shippingTaxDetails
     * @return RefundResponseInterface
     */
    public function setShippingTaxDetails(?array $shippingTaxDetails): RefundResponseInterface
    {
        return $this->setData(self::SHIPPING_TAX_DETAILS, $shippingTaxDetails);
    }

    /**
     * @return int|null
     */
    public function getShippingDiscountAmount(): ?int
    {
        return $this->getData(self::SHIPPING_DISCOUNT_AMOUNT);
    }

    /**
     * @param int $shippingDiscountAmount
     * @return RefundResponseInterface
     */
    public function setShippingDiscountAmount(int $shippingDiscountAmount): RefundResponseInterface
    {
        return $this->setData(self::SHIPPING_DISCOUNT_AMOUNT, $shippingDiscountAmount);
    }

    /**
     * @return int|null
     */
    public function getDiscountAmount(): ?int
    {
        return $this->getData(self::DISCOUNT_AMOUNT);
    }

    /**
     * @param int $discountAmount
     * @return RefundResponseInterface
     */
    public function setDiscountAmount(int $discountAmount): RefundResponseInterface
    {
        return $this->setData(self::DISCOUNT_AMOUNT, $discountAmount);
    }

    /**
     * @return string|null
     */
    public function getRefundAmountCurrency(): ?string
    {
        return $this->getData(self::REFUND_AMOUNT_CURRENCY);
    }

    /**
     * @param string $refundAmountCurrency
     * @return RefundResponseInterface
     */
    public function setRefundAmountCurrency(string $refundAmountCurrency): RefundResponseInterface
    {
        return $this->setData(self::REFUND_AMOUNT_CURRENCY, $refundAmountCurrency);
    }


    /**
     * @return int|null
     */
    public function getRefundAmount(): ?int
    {
        return $this->getData(self::REFUND_AMOUNT);
    }

    /**
     * @param int $refundAmount
     * @return RefundResponseInterface
     */
    public function setRefundAmount(int $refundAmount): RefundResponseInterface
    {
        return $this->setData(self::REFUND_AMOUNT, $refundAmount);
    }

    /**
     * @return string|null
     */
    public function getRefundComment(): ?string
    {
        return $this->getData(self::REFUND_COMMENT);
    }

    /**
     * @param string $refundComment
     * @return RefundResponseInterface
     */
    public function setRefundComment(string $refundComment): RefundResponseInterface
    {
        return $this->setData(self::REFUND_COMMENT, $refundComment);
    }

    /**
     * @return string
     */
    public function getRefundReason(): string
    {
        return $this->getData(self::REFUND_REASON);
    }

    /**
     * @param string $refundReason
     * @return RefundResponseInterface
     */
    public function setRefundReason(string $refundReason): RefundResponseInterface
    {
        return $this->setData(self::REFUND_REASON, $refundReason);
    }

    /**
     * @return RefundDetailInterface[]
     */
    public function getDetails(): array
    {
        return $this->getData(self::DETAILS);
    }

    /**
     * @param array $items
     * @return RefundResponseInterface
     */
    public function setDetails(array $items): RefundResponseInterface
    {
        return $this->setData(self::DETAILS, $items);
    }

    public function getRequestData(): array
    {
        $requestData = parent::getRequestData();
        if ($this->getData(self::DETAILS)) {
            $details = [];
            /** @var RefundDetailInterface $detail */
            foreach ($this->getData(self::DETAILS) as $detail) {
                $details[] = $detail->getRequestData();
            }
            $requestData[self::DETAILS] = $details;
        }


        return $requestData;
    }
}
