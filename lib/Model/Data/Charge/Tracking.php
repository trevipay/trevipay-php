<?php


namespace TreviPay\TreviPay\Model\Data\Charge;

use TreviPay\TreviPay\Api\Data\Charge\TrackingInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class Tracking extends RequestDataObject implements TrackingInterface
{
    private const TRACKING_NUMBER = 'tracking_number';
    private const TRACKING_URL = 'tracking_url';
    private const CARRIER = 'carrier';

    /**
     * @return string|null
     */
    public function getTrackingNumber(): ?string
    {
        return $this->getData(self::TRACKING_NUMBER);
    }

    /**
     * @param string $trackingNumber
     * @return TrackingInterface
     */
    public function setTrackingNumber(string $trackingNumber): TrackingInterface
    {
        return $this->setData(self::TRACKING_NUMBER, $trackingNumber);
    }

    /**
     * @return string|null
     */
    public function getTrackingUrl(): ?string
    {
        return $this->getData(self::TRACKING_URL);
    }

    /**
     * @param string $trackingUrl
     * @return TrackingInterface
     */
    public function setTrackingUrl(string $trackingUrl): TrackingInterface
    {
        return $this->setData(self::TRACKING_URL, $trackingUrl);
    }

    /**
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->getData(self::CARRIER);
    }

    /**
     * @param string $carrier
     * @return TrackingInterface
     */
    public function setCarrier(string $carrier): TrackingInterface
    {
        return $this->setData(self::CARRIER, $carrier);
    }
}
