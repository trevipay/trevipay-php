<?php


namespace TreviPay\TreviPay\Model\Data\Refund;

use TreviPay\TreviPay\Api\Data\Refund\RefundDetailInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class RefundDetail extends RequestDataObject implements RefundDetailInterface
{
    private const SKU = 'sku';
    private const DESCRIPTION = 'description';
    private const QUANTITY = 'quantity';
    private const UNIT_PRICE = 'unit_price';
    private const TAX_AMOUNT = 'tax_amount';
    private const DISCOUNT_AMOUNT = 'discount_amount';
    private const SUBTOTAL = 'subtotal';
    private const TAX_DETAILS = 'tax_details';

    /**
     * @return string|null
     */
    public function getSku(): ?string
    {
        return $this->getData(self::SKU);
    }

    /**
     * @param string $sku
     * @return RefundDetailInterface
     */
    public function setSku(string $sku): RefundDetailInterface
    {
        return $this->setData(self::SKU, $sku);
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * @param string $description
     * @return RefundDetailInterface
     */
    public function setDescription(string $description): RefundDetailInterface
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * @return float|null
     */
    public function getQuantity(): ?float
    {
        return $this->getData(self::QUANTITY);
    }

    /**
     * @param float $quantity
     * @return RefundDetailInterface
     */
    public function setQuantity(float $quantity): RefundDetailInterface
    {
        return $this->setData(self::QUANTITY, $quantity);
    }

    /**
     * @return int|null
     */
    public function getUnitPrice(): ?int
    {
        return $this->getData(self::UNIT_PRICE);
    }

    /**
     * @param int $unitPrice
     * @return RefundDetailInterface
     */
    public function setUnitPrice(int $unitPrice): RefundDetailInterface
    {
        return $this->setData(self::UNIT_PRICE, $unitPrice);
    }

    /**
     * @return int|null
     */
    public function getTaxAmount(): ?int
    {
        return $this->getData(self::TAX_AMOUNT);
    }

    /**
     * @param int $taxAmount
     * @return RefundDetailInterface
     */
    public function setTaxAmount(int $taxAmount): RefundDetailInterface
    {
        return $this->setData(self::TAX_AMOUNT, $taxAmount);
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
     * @return RefundDetailInterface
     */
    public function setDiscountAmount(int $discountAmount): RefundDetailInterface
    {
        return $this->setData(self::DISCOUNT_AMOUNT, $discountAmount);
    }

    /**
     * @return int|null
     */
    public function getSubtotal(): ?int
    {
        return $this->getData(self::SUBTOTAL);
    }

    /**
     * @param int $subtotal
     * @return RefundDetailInterface
     */
    public function setSubtotal(int $subtotal): RefundDetailInterface
    {
        return $this->setData(self::SUBTOTAL, $subtotal);
    }

    /**
     * @return TaxDetailInterface[]
     */
    public function getTaxDetails(): array
    {
        return $this->getData(self::TAX_DETAILS);
    }

    /**
     * @param array $items
     * @return RefundDetailInterface
     */
    public function setTaxDetails(array $items): RefundDetailInterface
    {
        return $this->setData(self::TAX_DETAILS, $items);
    }

    public function getRequestData(): array
    {
        $requestData = parent::getRequestData();
        if ($this->getData(self::TAX_DETAILS)) {
            $taxDetails = [];
            /** @var TaxDetailInterface $taxDetail */
            foreach ($this->getData(self::TAX_DETAILS) as $taxDetail) {
                $taxDetails[] = is_array($taxDetail) ? $taxDetail : $taxDetail->getRequestData();
            }
            $requestData[self::TAX_DETAILS] = $taxDetails;
        }

        return $requestData;
    }
}
