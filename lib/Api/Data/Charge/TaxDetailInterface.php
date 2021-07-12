<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Charge;

interface TaxDetailInterface
{
    /**
     * @return string
     */
    public function getTaxType(): string;

    /**
     * @param string $taxType
     * @return TaxDetailInterface
     */
    public function setTaxType(string $taxType): TaxDetailInterface;

    /**
     * @return float
     */
    public function getTaxRate(): float;

    /**
     * @param float $taxRate
     * @return TaxDetailInterface
     */
    public function setTaxRate(float $taxRate): TaxDetailInterface;

    /**
     * @return int
     */
    public function getTaxAmount(): int;

    /**
     * @param int $taxAmount
     * @return TaxDetailInterface
     */
    public function setTaxAmount(int $taxAmount): TaxDetailInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
