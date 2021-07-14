<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data\Charge;

use TreviPay\TreviPay\Api\Data\Charge\TaxDetailInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class TaxDetail extends RequestDataObject implements TaxDetailInterface
{
    private const TAX_TYPE = 'tax_type';

    private const TAX_RATE = 'tax_rate';

    private const TAX_AMOUNT = 'tax_amount';

    /**
     * @return string
     */
    public function getTaxType(): string
    {
        return $this->getData(self::TAX_TYPE);
    }

    /**
     * @param string $taxType
     * @return TaxDetailInterface
     */
    public function setTaxType(string $taxType): TaxDetailInterface
    {
        return $this->setData(self::TAX_TYPE, $taxType);
    }

    /**
     * @return float
     */
    public function getTaxRate(): float
    {
        return $this->getData(self::TAX_RATE);
    }

    /**
     * @param float $taxRate
     * @return TaxDetailInterface
     */
    public function setTaxRate(float $taxRate): TaxDetailInterface
    {
        return $this->setData(self::TAX_RATE, $taxRate);
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
     * @return TaxDetailInterface
     */
    public function setTaxAmount(int $taxAmount): TaxDetailInterface
    {
        return $this->setData(self::TAX_AMOUNT, $taxAmount);
    }
}
