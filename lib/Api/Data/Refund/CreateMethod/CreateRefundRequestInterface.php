<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Refund\CreateMethod;

use TreviPay\TreviPay\Api\Data\Refund\RefundResponseInterface;

interface CreateRefundRequestInterface extends RefundResponseInterface
{
  /**
   * @param string $chargeId
   * @return RefundResponseInterface
   */
    public function setChargeId(string $chargeId): RefundResponseInterface;

  /**
   * @param int $totalAmount
   * @return RefundResponseInterface
   */
    public function setTotalAmount(int $totalAmount): RefundResponseInterface;

  /**
   * @param int $taxAmount
   * @return RefundResponseInterface
   */
    public function setTaxAmount(int $taxAmount): RefundResponseInterface;

  /**
   * @param int $shippingAmount
   * @return RefundResponseInterface
   */
    public function setShippingAmount(int $shippingAmount): RefundResponseInterface;

  /**
   * @param int $shippingTaxAmount
   * @return RefundResponseInterface
   */
    public function setShippingTaxAmount(int $shippingTaxAmount): RefundResponseInterface;

  /**
   * @param int $shippingDiscountAmount
   * @return RefundResponseInterface
   */
    public function setShippingDiscountAmount(int $shippingDiscountAmount): RefundResponseInterface;

  /**
   * @param int $discountAmount
   * @return RefundResponseInterface
   */
    public function setDiscountAmount(int $discountAmount): RefundResponseInterface;

  /**
   * @param string $creditReason
   * @return RefundResponseInterface
   */
    public function setCreditReason(string $creditReason): RefundResponseInterface;

  /**
   * @param string $creditComment
   * @return RefundResponseInterface
   */
    public function setCreditComment(string $creditComment): RefundResponseInterface;

  /**
   * @param array $items
   * @return RefundResponseInterface
   */
    public function setDetails(array $items): RefundResponseInterface;

  /**
   * @param array $items
   * @return RefundResponseInterface
   */
    public function setShippingTaxDetails(array $items): RefundResponseInterface;

  /**
   * @return array
   */
    public function getRequestData(): array;
}
