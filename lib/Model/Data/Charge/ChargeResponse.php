<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data\Charge;

use TreviPay\TreviPay\Api\Data\Charge\ChargeDetailInterface;
use TreviPay\TreviPay\Api\Data\Charge\ChargeResponseInterface;
use TreviPay\TreviPay\Api\Data\Charge\ShipToInterface;
use TreviPay\TreviPay\Api\Data\Charge\SupplierInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

/**
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 */
class ChargeResponse extends RequestDataObject implements ChargeResponseInterface
{
    /**
     * Identifier of a Charge
     */
    private const ID = 'id';

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

    private const FOREIGN_EXCHANGE_FEE = 'foreign_exchange_fee';

    private const ORIGINAL_TOTAL_AMOUNT = 'original_total_amount';

    private const PAID_AMOUNT_CURRENCY = 'paid_amount_currency';

    private const PAID_AMOUNT = 'paid_amount';

    private const ORDER_URL = 'order_url';

    private const INVOICE_URL = 'invoice_url';

    private const CANCELLATION_COMMENT = 'cancellation_comment';

    private const DISPUTE_COMMENT = 'dispute_comment';

    private const DISPUTE_REASON = 'dispute_reason';

    private const IN_DISPUTE = 'in_dispute';

    private const BUYER_CURRENCY = 'buyer_currency';

    private const BUYER_TOTAL_AMOUNT = 'buyer_total_amount';

    private const BUYER_OPEN_AMOUNT = 'buyer_open_amount';

    private const CHARGE_PAYMENT_DAYS = 'charge_payment_days';

    private const ORDER_NUMBER = 'order_number';

    private const PO_NUMBER = 'po_number';

    private const PREVIOUS_CHARGE_ID = 'previous_charge_id';

    private const COMMENT = 'comment';

    private const SUPPLIER = 'supplier';

    private const SHIP_TO = 'ship_to';

    private const DUE_DATE = 'due_date';

    private const CREATED = 'created';

    private const MODIFIED = 'modified';

    private const DETAILS = 'details';

    private const CANCELLATION_REASON = 'cancellation_reason';

    private const RETURN_COMMENT = 'return_comment';

    private const RETURN_REASON = 'return_reason';

    private const METADATA = 'metadata';

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->getData(self::ID);
    }

    /**
     * @param string $id
     * @return ChargeResponseInterface
     */
    public function setId(string $id): ChargeResponseInterface
    {
        return $this->setData(self::ID, $id);
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
     * @return ChargeResponseInterface
     */
    public function setSellerId(string $sellerId): ChargeResponseInterface
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
     * @return ChargeResponseInterface
     */
    public function setBuyerId(string $buyerId): ChargeResponseInterface
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
     * @return ChargeResponseInterface
     */
    public function setStatus(string $status): ChargeResponseInterface
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
     * @return ChargeResponseInterface
     */
    public function setCurrency(string $currency): ChargeResponseInterface
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
     * @return ChargeResponseInterface
     */
    public function setTotalAmount(int $totalAmount): ChargeResponseInterface
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
     * @return ChargeResponseInterface
     */
    public function setTaxAmount(int $taxAmount): ChargeResponseInterface
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
     * @return ChargeResponseInterface
     */
    public function setShippingAmount(int $shippingAmount): ChargeResponseInterface
    {
        return $this->setData(self::SHIPPING_AMOUNT, $shippingAmount);
    }

    /**
     * @return int
     */
    public function getShippingTaxAmount(): int
    {
        return $this->getData(self::SHIPPING_TAX_AMOUNT);
    }

    /**
     * @param int $shippingTaxAmount
     * @return ChargeResponseInterface
     */
    public function setShippingTaxAmount(int $shippingTaxAmount): ChargeResponseInterface
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
     * @return ChargeResponseInterface
     */
    public function setShippingTaxDetails($shippingTaxDetails): ChargeResponseInterface
    {
        return $this->setData(self::SHIPPING_TAX_DETAILS, $shippingTaxDetails);
    }

    /**
     * @return int
     */
    public function getShippingDiscountAmount(): int
    {
        return $this->getData(self::SHIPPING_DISCOUNT_AMOUNT);
    }

    /**
     * @param int $shippingDiscountAmount
     * @return ChargeResponseInterface
     */
    public function setShippingDiscountAmount(int $shippingDiscountAmount): ChargeResponseInterface
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
     * @return ChargeResponseInterface
     */
    public function setDiscountAmount(int $discountAmount): ChargeResponseInterface
    {
        return $this->setData(self::DISCOUNT_AMOUNT, $discountAmount);
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
     * @return ChargeResponseInterface
     */
    public function setForeignExchangeFee(int $foreignExchangeFee): ChargeResponseInterface
    {
        return $this->setData(self::FOREIGN_EXCHANGE_FEE, $foreignExchangeFee);
    }

    /**
     * @return int
     */
    public function getOriginalTotalAmount(): int
    {
        return $this->getData(self::ORIGINAL_TOTAL_AMOUNT);
    }

    /**
     * @param int $originalTotalAmount
     * @return ChargeResponseInterface
     */
    public function setOriginalTotalAmount(int $originalTotalAmount): ChargeResponseInterface
    {
        return $this->setData(self::ORIGINAL_TOTAL_AMOUNT, $originalTotalAmount);
    }

    /**
     * @return string
     */
    public function getPaidAmountCurrency(): string
    {
        return $this->getData(self::PAID_AMOUNT_CURRENCY);
    }

    /**
     * @param string $paidAmountCurrency
     * @return ChargeResponseInterface
     */
    public function setPaidAmountCurrency(string $paidAmountCurrency): ChargeResponseInterface
    {
        return $this->setData(self::PAID_AMOUNT_CURRENCY, $paidAmountCurrency);
    }

    /**
     * @return int
     */
    public function getPaidAmount(): int
    {
        return $this->getData(self::PAID_AMOUNT);
    }

    /**
     * @param int $paidAmount
     * @return ChargeResponseInterface
     */
    public function setPaidAmount(int $paidAmount): ChargeResponseInterface
    {
        return $this->setData(self::PAID_AMOUNT, $paidAmount);
    }

    /**
     * @return string
     */
    public function getOrderUrl(): string
    {
        return $this->getData(self::ORDER_URL);
    }

    /**
     * @param string $orderUrl
     * @return ChargeResponseInterface
     */
    public function setOrderUrl(string $orderUrl): ChargeResponseInterface
    {
        return $this->setData(self::ORDER_URL, $orderUrl);
    }

    /**
     * @return string|null
     */
    public function getInvoiceUrl(): ?string
    {
        return $this->getData(self::INVOICE_URL);
    }

    /**
     * @param string $invoiceUrl
     * @return ChargeResponseInterface
     */
    public function setInvoiceUrl(string $invoiceUrl): ChargeResponseInterface
    {
        return $this->setData(self::INVOICE_URL, $invoiceUrl);
    }

    /**
     * @return string|null
     */
    public function getCancellationComment(): ?string
    {
        return $this->getData(self::CANCELLATION_COMMENT);
    }

    /**
     * @param string $cancellationComment
     * @return ChargeResponseInterface
     */
    public function setCancellationComment(string $cancellationComment): ChargeResponseInterface
    {
        return $this->setData(self::CANCELLATION_COMMENT, $cancellationComment);
    }

    /**
     * @return string|null
     */
    public function getDisputeComment(): ?string
    {
        return $this->getData(self::DISPUTE_COMMENT);
    }

    /**
     * @param string $disputeComment
     * @return ChargeResponseInterface
     */
    public function setDisputeComment(string $disputeComment): ChargeResponseInterface
    {
        return $this->setData(self::DISPUTE_COMMENT, $disputeComment);
    }

    /**
     * @return string|null
     */
    public function getDisputeReason(): ?string
    {
        return $this->getData(self::DISPUTE_REASON);
    }

    /**
     * @param string $disputeReason
     * @return ChargeResponseInterface
     */
    public function setDisputeReason(string $disputeReason): ChargeResponseInterface
    {
        return $this->setData(self::DISPUTE_REASON, $disputeReason);
    }

    /**
     * @return bool|null
     */
    public function getInDispute(): ?bool
    {
        return $this->getData(self::IN_DISPUTE);
    }

    /**
     * @param bool $inDispute
     * @return ChargeResponseInterface
     */
    public function setInDispute(bool $inDispute): ChargeResponseInterface
    {
        return $this->setData(self::IN_DISPUTE, $inDispute);
    }

    /**
     * @return string|null
     */
    public function getBuyerCurrency(): ?string
    {
        return $this->getData(self::BUYER_CURRENCY);
    }

    /**
     * @param string $buyerCurrency
     * @return ChargeResponseInterface
     */
    public function setBuyerCurrency(string $buyerCurrency): ChargeResponseInterface
    {
        return $this->setData(self::BUYER_CURRENCY, $buyerCurrency);
    }

    /**
     * @return string|null
     */
    public function getBuyerTotalAmount(): ?int
    {
        return $this->getData(self::BUYER_TOTAL_AMOUNT);
    }

    /**
     * @param int $buyerTotalAmount
     * @return ChargeResponseInterface
     */
    public function setBuyerTotalAmount(int $buyerTotalAmount): ChargeResponseInterface
    {
        return $this->setData(self::BUYER_TOTAL_AMOUNT, $buyerTotalAmount);
    }

    /**
     * @return string|null
     */
    public function getBuyerOpenAmount(): ?int
    {
        return $this->getData(self::BUYER_OPEN_AMOUNT);
    }

    /**
     * @param int $buyerOpenAmount
     * @return ChargeResponseInterface
     */
    public function setBuyerOpenAmount(int $buyerOpenAmount): ChargeResponseInterface
    {
        return $this->setData(self::BUYER_OPEN_AMOUNT, $buyerOpenAmount);
    }

    /**
     * @return string|null
     */
    public function getChargePaymentDays(): ?int
    {
        return $this->getData(self::CHARGE_PAYMENT_DAYS);
    }

    /**
     * @param int $chargePaymentDays
     * @return ChargeResponseInterface
     */
    public function setChargePaymentDays(int $chargePaymentDays): ChargeResponseInterface
    {
        return $this->setData(self::CHARGE_PAYMENT_DAYS, $chargePaymentDays);
    }

    /**
     * @return string
     */
    public function getOrderNumber(): string
    {
        return $this->getData(self::ORDER_NUMBER);
    }

    /**
     * @param string $orderNumber
     * @return ChargeResponseInterface
     */
    public function setOrderNumber(string $orderNumber): ChargeResponseInterface
    {
        return $this->setData(self::ORDER_NUMBER, $orderNumber);
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
     * @return ChargeResponseInterface
     */
    public function setPoNumber(string $poNumber): ChargeResponseInterface
    {
        return $this->setData(self::PO_NUMBER, $poNumber);
    }

    /**
     * @return string|null
     */
    public function getPreviousChargeId(): ?string
    {
        return $this->getData(self::PREVIOUS_CHARGE_ID);
    }

    /**
     * @param string $previousChargeId
     * @return ChargeResponseInterface
     */
    public function setPreviousChargeId(string $previousChargeId): ChargeResponseInterface
    {
        return $this->setData(self::PREVIOUS_CHARGE_ID, $previousChargeId);
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->getData(self::COMMENT);
    }

    /**
     * @param string $comment
     * @return ChargeResponseInterface
     */
    public function setComment(string $comment): ChargeResponseInterface
    {
        return $this->setData(self::COMMENT, $comment);
    }

    /**
     * @return SupplierInterface|null
     */
    public function getSupplier(): ?SupplierInterface
    {
        return $this->getData(self::SUPPLIER);
    }

    /**
     * @param SupplierInterface $supplier
     * @return ChargeResponseInterface
     */
    public function setSupplier(SupplierInterface $supplier): ChargeResponseInterface
    {
        return $this->setData(self::SUPPLIER, $supplier);
    }

    /**
     * @return ShipToInterface|null
     */
    public function getShipTo(): ?ShipToInterface
    {
        return $this->getData(self::SHIP_TO);
    }

    /**
     * @param ShipToInterface $shipTo
     * @return ChargeResponseInterface
     */
    public function setShipTo(ShipToInterface $shipTo): ChargeResponseInterface
    {
        return $this->setData(self::SHIP_TO, $shipTo);
    }

    /**
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->getData(self::DUE_DATE);
    }

    /**
     * @param string $dueDate
     * @return ChargeResponseInterface
     */
    public function setDueDate(string $dueDate): ChargeResponseInterface
    {
        return $this->setData(self::DUE_DATE, $dueDate);
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->getData(self::CREATED);
    }

    /**
     * @param string $created
     * @return ChargeResponseInterface
     */
    public function setCreated(string $created): ChargeResponseInterface
    {
        return $this->setData(self::CREATED, $created);
    }

    /**
     * @return string
     */
    public function getModified(): string
    {
        return $this->getData(self::MODIFIED);
    }

    /**
     * @param string $modified
     * @return ChargeResponseInterface
     */
    public function setModified(string $modified): ChargeResponseInterface
    {
        return $this->setData(self::MODIFIED, $modified);
    }

    /**
     * @return ChargeDetailInterface[]
     */
    public function getDetails(): array
    {
        return $this->getData(self::DETAILS);
    }

    /**
     * @param array $items
     * @return ChargeResponseInterface
     */
    public function setDetails(array $items): ChargeResponseInterface
    {
        return $this->setData(self::DETAILS, $items);
    }

    /**
     * @return string|null
     */
    public function getCancellationReason(): ?string
    {
        return $this->getData(self::CANCELLATION_REASON);
    }

    /**
     * @param string $cancellationReason
     * @return ChargeResponseInterface
     */
    public function setCancellationReason(string $cancellationReason): ChargeResponseInterface
    {
        return $this->setData(self::CANCELLATION_REASON, $cancellationReason);
    }

    /**
     * @return string|null
     */
    public function getReturnComment(): ?string
    {
        return $this->getData(self::RETURN_COMMENT);
    }

    /**
     * @param string $returnComment
     * @return ChargeResponseInterface
     */
    public function setReturnComment(string $returnComment): ChargeResponseInterface
    {
        return $this->setData(self::RETURN_COMMENT, $returnComment);
    }

    /**
     * @return string|null
     */
    public function getReturnReason(): ?string
    {
        return $this->getData(self::RETURN_REASON);
    }

    /**
     * @param string $returnReason
     * @return ChargeResponseInterface
     */
    public function setReturnReason(string $returnReason): ChargeResponseInterface
    {
        return $this->setData(self::RETURN_REASON, $returnReason);
    }

    /**
     * @return array|null
     */
    public function getMetadata(): ?array
    {
        return $this->getData(self::METADATA);
    }

    /**
     * @param array $metadata
     * @return ChargeResponseInterface
     */
    public function setMetadata(array $metadata): ChargeResponseInterface
    {
        return $this->setData(self::METADATA, $metadata);
    }

    public function getRequestData(): array
    {
        $requestData = parent::getRequestData();
        if ($this->getData(self::DETAILS)) {
            $details = [];
            /** @var ChargeDetailInterface $detail */
            foreach ($this->getData(self::DETAILS) as $detail) {
                $details[] = $detail->getRequestData();
            }
            $requestData[self::DETAILS] = $details;
        }
        /** @var ShipToInterface|array $shipTo */
        $shipTo = $this->getData(self::SHIP_TO);
        if ($shipTo && $shipTo instanceof ShipToInterface) {
            $requestData[self::SHIP_TO] = $shipTo->getRequestData();
        }

        return $requestData;
    }
}
