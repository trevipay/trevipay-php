<?php


namespace TreviPay\TreviPay\Model\Data\Charge\ReturnMethod;

use TreviPay\TreviPay\Api\Data\Charge\ChargeDetailInterface;
use TreviPay\TreviPay\Api\Data\Charge\ReturnMethod\ReturnAChargeRequestInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class ReturnAChargeRequest extends RequestDataObject implements ReturnAChargeRequestInterface
{
    private const ID = 'id';

    private const RETURN_AMOUNT = 'return_amount';

    private const TOTAL_AMOUNT = 'total_amount';

    private const TAX_AMOUNT = 'tax_amount';

    private const SHIPPING_AMOUNT = 'shipping_amount';

    private const SHIPPING_TAX_AMOUNT = 'shipping_tax_amount';

    private const SHIPPING_TAX_DETAILS = 'shipping_tax_details';

    private const SHIPPING_DISCOUNT_AMOUNT = 'shipping_discount_amount';

    private const DISCOUNT_AMOUNT = 'discount_amount';

    private const DETAILS = 'details';

    private const RETURN_REASON = 'return_reason';

    private const RETURN_COMMENT = 'return_comment';

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->getData(self::ID);
    }

    /**
     * @param string $id
     * @return ReturnAChargeRequestInterface
     */
    public function setId(string $id): ReturnAChargeRequestInterface
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * @return int|null
     */
    public function getReturnAmount(): ?int
    {
        return $this->getData(self::RETURN_AMOUNT);
    }

    /**
     * @param int $returnAmount
     * @return ReturnAChargeRequestInterface
     */
    public function setReturnAmount(int $returnAmount): ReturnAChargeRequestInterface
    {
        return $this->setData(self::RETURN_AMOUNT, $returnAmount);
    }

    /**
     * @return int|null
     */
    public function getTotalAmount(): ?int
    {
        return $this->getData(self::TOTAL_AMOUNT);
    }

    /**
     * @param int $totalAmount
     * @return ReturnAChargeRequestInterface
     */
    public function setTotalAmount(int $totalAmount): ReturnAChargeRequestInterface
    {
        return $this->setData(self::TOTAL_AMOUNT, $totalAmount);
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
     * @return ReturnAChargeRequestInterface
     */
    public function setTaxAmount(int $taxAmount): ReturnAChargeRequestInterface
    {
        return $this->setData(self::TAX_AMOUNT, $taxAmount);
    }

    /**
     * @return int|null
     */
    public function getShippingAmount(): ?int
    {
        return $this->getData(self::SHIPPING_AMOUNT);
    }

    /**
     * @param int $shippingAmount
     * @return ReturnAChargeRequestInterface
     */
    public function setShippingAmount(int $shippingAmount): ReturnAChargeRequestInterface
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
     * @return ReturnAChargeRequestInterface
     */
    public function setShippingTaxAmount(int $shippingTaxAmount): ReturnAChargeRequestInterface
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
     * @return ReturnAChargeRequestInterface
     */
    public function setShippingTaxDetails($shippingTaxDetails): ReturnAChargeRequestInterface
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
     * @return ReturnAChargeRequestInterface
     */
    public function setShippingDiscountAmount(int $shippingDiscountAmount): ReturnAChargeRequestInterface
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
     * @return ReturnAChargeRequestInterface
     */
    public function setDiscountAmount(int $discountAmount): ReturnAChargeRequestInterface
    {
        return $this->setData(self::DISCOUNT_AMOUNT, $discountAmount);
    }

    /**
     * @return ChargeDetailInterface[]|null
     */
    public function getDetails(): ?array
    {
        return $this->getData(self::DETAILS);
    }

    /**
     * @param ChargeDetailInterface[] $details
     * @return ReturnAChargeRequestInterface
     */
    public function setDetails(array $details): ReturnAChargeRequestInterface
    {
        return $this->setData(self::DETAILS, $details);
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
     * @return ReturnAChargeRequestInterface
     */
    public function setReturnReason(string $returnReason): ReturnAChargeRequestInterface
    {
        return $this->setData(self::RETURN_REASON, $returnReason);
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
     * @return ReturnAChargeRequestInterface
     */
    public function setReturnComment(string $returnComment): ReturnAChargeRequestInterface
    {
        return $this->setData(self::RETURN_COMMENT, $returnComment);
    }

    public function getRequestData(): array
    {
        $requestData = parent::getRequestData();
        if (!$this->getData(self::DETAILS)) {
            return $requestData;
        }
        $details = [];
        /** @var ChargeDetailInterface $detail */
        foreach ($this->getData(self::DETAILS) as $detail) {
            $details[] = $detail->getRequestData();
        }
        $requestData[self::DETAILS] = $details;

        return $requestData;
    }
}
