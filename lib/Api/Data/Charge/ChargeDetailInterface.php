<?php
declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Charge;

interface ChargeDetailInterface
{
    /**
     * @return string|null
     */
    public function getSku(): ?string;

    /**
     * @param string $sku
     * @return ChargeDetailInterface
     */
    public function setSku(string $sku): ChargeDetailInterface;

    /**
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * @param string $description
     * @return ChargeDetailInterface
     */
    public function setDescription(string $description): ChargeDetailInterface;

    /**
     * @return float|null
     */
    public function getQuantity(): ?float;

    /**
     * @param float $quantity
     * @return ChargeDetailInterface
     */
    public function setQuantity(float $quantity): ChargeDetailInterface;

    /**
     * @return int|null
     */
    public function getUnitPrice(): ?int;

    /**
     * @param int $unitPrice
     * @return ChargeDetailInterface
     */
    public function setUnitPrice(int $unitPrice): ChargeDetailInterface;

    /**
     * @return int|null
     */
    public function getTaxAmount(): ?int;

    /**
     * @param int $taxAmount
     * @return ChargeDetailInterface
     */
    public function setTaxAmount(int $taxAmount): ChargeDetailInterface;

    /**
     * @return int|null
     */
    public function getDiscountAmount(): ?int;

    /**
     * @param int $discountAmount
     * @return ChargeDetailInterface
     */
    public function setDiscountAmount(int $discountAmount): ChargeDetailInterface;

    /**
     * @return int|null
     */
    public function getSubtotal(): ?int;

    /**
     * @param int $subtotal
     * @return ChargeDetailInterface
     */
    public function setSubtotal(int $subtotal): ChargeDetailInterface;

    /**
     * @return array
     */
    public function getTaxDetails(): array;

    /**
     * @param array $taxDetails
     * @return ChargeDetailInterface
     */
    public function setTaxDetails(array $taxDetails): ChargeDetailInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
