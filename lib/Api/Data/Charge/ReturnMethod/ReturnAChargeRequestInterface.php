<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Charge\ReturnMethod;

interface ReturnAChargeRequestInterface
{
    /**
     * @return string|null
     */
    public function getId(): ?string;

    /**
     * @param string $id
     * @return ReturnAChargeRequestInterface
     */
    public function setId(string $id): ReturnAChargeRequestInterface;

    /**
     * @return int|null
     */
    public function getReturnAmount(): ?int;
    /**
     * @param int $returnAmount
     * @return ReturnAChargeRequestInterface
     */
    public function setReturnAmount(int $returnAmount): ReturnAChargeRequestInterface;

    /**
     * @return int|null
     */
    public function getTotalAmount(): ?int;

    /**
     * @param int $totalAmount
     * @return ReturnAChargeRequestInterface
     */
    public function setTotalAmount(int $totalAmount): ReturnAChargeRequestInterface;

    /**
     * @return int|null
     */
    public function getTaxAmount(): ?int;

    /**
     * @param int $taxAmount
     * @return ReturnAChargeRequestInterface
     */
    public function setTaxAmount(int $taxAmount): ReturnAChargeRequestInterface;

    /**
     * @return int|null
     */
    public function getShippingAmount(): ?int;

    /**
     * @param int $shippingAmount
     * @return ReturnAChargeRequestInterface
     */
    public function setShippingAmount(int $shippingAmount): ReturnAChargeRequestInterface;

    /**
     * @return int|null
     */
    public function getShippingTaxAmount(): ?int;
    /**
     * @param int $shippingTaxAmount
     * @return ReturnAChargeRequestInterface
     */
    public function setShippingTaxAmount(int $shippingTaxAmount): ReturnAChargeRequestInterface;

    /**
     * @return array|null
     */
    public function getShippingTaxDetails(): ?array;

    /**
     * @param array|null $shippingTaxDetails
     * @return ReturnAChargeRequestInterface
     */
    public function setShippingTaxDetails($shippingTaxDetails): ReturnAChargeRequestInterface;

    /**
     * @return int|null
     */
    public function getShippingDiscountAmount(): ?int;

    /**
     * @param int $shippingDiscountAmount
     * @return ReturnAChargeRequestInterface
     */
    public function setShippingDiscountAmount(int $shippingDiscountAmount): ReturnAChargeRequestInterface;

    /**
     * @return int|null
     */
    public function getDiscountAmount(): ?int;

    /**
     * @param int $discountAmount
     * @return ReturnAChargeRequestInterface
     */
    public function setDiscountAmount(int $discountAmount): ReturnAChargeRequestInterface;

    /**
     * @return ChargeDetailInterface[]|null
     */
    public function getDetails(): ?array;

    /**
     * @param ChargeDetailInterface[] $details
     * @return ReturnAChargeRequestInterface
     */
    public function setDetails(array $details): ReturnAChargeRequestInterface;

    /**
     * @return string|null
     */
    public function getReturnReason(): ?string;
    /**
     * @param string $returnReason
     * @return ReturnAChargeRequestInterface
     */
    public function setReturnReason(string $returnReason): ReturnAChargeRequestInterface;
    /**
     * @return string|null
     */

    public function getReturnComment(): ?string;
    /**
     * @param string $returnComment
     * @return ReturnAChargeRequestInterface
     */
    public function setReturnComment(string $returnComment): ReturnAChargeRequestInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
