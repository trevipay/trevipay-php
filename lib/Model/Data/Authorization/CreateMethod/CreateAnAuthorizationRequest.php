<?php
declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data\Authorization\CreateMethod;

use TreviPay\TreviPay\Api\Data\Authorization\CreateMethod\CreateAnAuthorizationRequestInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class CreateAnAuthorizationRequest extends RequestDataObject implements CreateAnAuthorizationRequestInterface
{
    private const SELLER_ID = 'seller_id';

    private const BUYER_ID = 'buyer_id';

    private const CURRENCY = 'currency';

    private const PREAUTHORIZED_AMOUNT = 'authorized_amount';

    private const PO_NUMBER = 'po_number';

    /**
     * @return string|null
     */
    public function getSellerId(): ?string
    {
        return $this->getData(self::SELLER_ID);
    }

    /**
     * @param string $sellerId
     * @return CreateAnAuthorizationRequestInterface
     */
    public function setSellerId(string $sellerId): CreateAnAuthorizationRequestInterface
    {
        return $this->setData(self::SELLER_ID, $sellerId);
    }

    /**
     * @return string|null
     */
    public function getBuyerId(): ?string
    {
        return $this->getData(self::BUYER_ID);
    }

    /**
     * @param string $buyerId
     * @return CreateAnAuthorizationRequestInterface
     */
    public function setBuyerId(string $buyerId): CreateAnAuthorizationRequestInterface
    {
        return $this->setData(self::BUYER_ID, $buyerId);
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->getData(self::CURRENCY);
    }

    /**
     * @param string $currency
     * @return CreateAnAuthorizationRequestInterface
     */
    public function setCurrency(string $currency): CreateAnAuthorizationRequestInterface
    {
        return $this->setData(self::CURRENCY, $currency);
    }

    /**
     * @return int|null
     */
    public function getAuthorizedAmount(): ?int
    {
        return $this->getData(self::PREAUTHORIZED_AMOUNT);
    }

    /**
     * @param int $authorizedAmount
     * @return CreateAnAuthorizationRequestInterface
     */
    public function setAuthorizedAmount(int $authorizedAmount): CreateAnAuthorizationRequestInterface
    {
        return $this->setData(self::PREAUTHORIZED_AMOUNT, $authorizedAmount);
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
     * @return CreateAnAuthorizationRequestInterface
     */
    public function setPoNumber(string $poNumber): CreateAnAuthorizationRequestInterface
    {
        return $this->setData(self::PO_NUMBER, $poNumber);
    }
}
