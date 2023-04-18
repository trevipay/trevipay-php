<?php


namespace TreviPay\TreviPay\Model\Data\Charge;

use TreviPay\TreviPay\Api\Data\Charge\CompanyAddressInterface;
use TreviPay\TreviPay\Api\Data\Charge\ShipToInterface;
use TreviPay\TreviPay\Api\Data\Charge\TrackingInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class ShipTo extends RequestDataObject implements ShipToInterface
{
    private const RECIPIENT_NAME = 'recipient_name';
    private const COMPANY_NAME = 'company_name';
    private const COMPANY_ADDRESS = 'company_address';
    private const PICKUP = 'pickup';
    private const TRACKING = 'tracking';

    /**
     * @return string|null
     */
    public function getRecipientName(): ?string
    {
        return $this->getData(self::RECIPIENT_NAME);
    }

    /**
     * @param string $recipientName
     * @return ShipToInterface
     */
    public function setRecipientName(string $recipientName): ShipToInterface
    {
        return $this->setData(self::RECIPIENT_NAME, $recipientName);
    }

    /**
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->getData(self::COMPANY_NAME);
    }

    /**
     * @param string $companyName
     * @return ShipToInterface
     */
    public function setCompanyName(string $companyName): ShipToInterface
    {
        return $this->setData(self::COMPANY_NAME, $companyName);
    }

    /**
     * @return CompanyAddressInterface|null
     */
    public function getCompanyAddress(): ?CompanyAddressInterface
    {
        return $this->getData(self::COMPANY_ADDRESS);
    }

    /**
     * @param CompanyAddressInterface $companyAddress
     * @return ShipToInterface
     */
    public function setCompanyAddress(CompanyAddressInterface $companyAddress): ShipToInterface
    {
        return $this->setData(self::COMPANY_ADDRESS, $companyAddress);
    }

    /**
     * @return bool|null
     */
    public function getPickup(): ?bool
    {
        return $this->getData(self::PICKUP);
    }

    /**
     * @param bool $pickup
     * @return ShipToInterface
     */
    public function setPickup(bool $pickup): ShipToInterface
    {
        return $this->setData(self::PICKUP, $pickup);
    }

    /**
     * @return TrackingInterface|null
     */
    public function getTracking(): ?TrackingInterface
    {
        return $this->getData(self::TRACKING);
    }

    /**
     * @param TrackingInterface $tracking
     * @return ShipToInterface
     */
    public function setTracking(TrackingInterface $tracking): ShipToInterface
    {
        return $this->setData(self::TRACKING, $tracking);
    }

    public function getRequestData(): array
    {
        $requestData = parent::getRequestData();
        /** @var CompanyAddressInterface|array $companyAddress */
        $companyAddress = $this->getData(self::COMPANY_ADDRESS);
        if ($companyAddress && $companyAddress instanceof CompanyAddressInterface) {
            $requestData[self::COMPANY_ADDRESS] = $companyAddress->getRequestData();
        }

        /** @var TrackingInterface|array $companyAddress */
        $tracking = $this->getData(self::TRACKING);
        if ($tracking && $tracking instanceof TrackingInterface) {
            $requestData[self::TRACKING] = $tracking->getRequestData();
        }

        return $requestData;
    }
}
