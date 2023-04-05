<?php


namespace TreviPay\TreviPay\Api\Data\Refund;

interface RefundDetailInterface
{
  /**
   * @return string|null
   */
    public function getSku(): ?string;

  /**
   * @param string $sku
   * @return RefundDetailInterface
   */
    public function setSku(string $sku): RefundDetailInterface;

  /**
   * @return string|null
   */
    public function getDescription(): ?string;

  /**
   * @param string $description
   * @return RefundDetailInterface
   */
    public function setDescription(string $description): RefundDetailInterface;

  /**
   * @return float|null
   */
    public function getQuantity(): ?float;

  /**
   * @param float $quantity
   * @return RefundDetailInterface
   */
    public function setQuantity(float $quantity): RefundDetailInterface;

  /**
   * @return int|null
   */
    public function getUnitPrice(): ?int;

  /**
   * @param int $unitPrice
   * @return RefundDetailInterface
   */
    public function setUnitPrice(int $unitPrice): RefundDetailInterface;

  /**
   * @return int|null
   */
    public function getTaxAmount(): ?int;

  /**
   * @param int $taxAmount
   * @return RefundDetailInterface
   */
    public function setTaxAmount(int $taxAmount): RefundDetailInterface;

  /**
   * @return int|null
   */
    public function getDiscountAmount(): ?int;

  /**
   * @param int $discountAmount
   * @return RefundDetailInterface
   */
    public function setDiscountAmount(int $discountAmount): RefundDetailInterface;

  /**
   * @return int|null
   */
    public function getSubtotal(): ?int;

  /**
   * @param int $subtotal
   * @return RefundDetailInterface
   */
    public function setSubtotal(int $subtotal): RefundDetailInterface;

  /**
   * @return array
   */
    public function getTaxDetails(): array;

  /**
   * @param array $taxDetails
   * @return RefundDetailInterface
   */
    public function setTaxDetails(array $taxDetails): RefundDetailInterface;

  /**
   * @return array
   */
    public function getRequestData(): array;
}
