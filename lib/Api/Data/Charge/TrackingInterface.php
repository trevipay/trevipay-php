<?php


namespace TreviPay\TreviPay\Api\Data\Charge;

interface TrackingInterface
{
    /**
     * @return string|null
     */
    public function getTrackingNumber(): ?string;

    /**
     * @param string $trackingNumber
     * @return TrackingInterface
     */
    public function setTrackingNumber(string $trackingNumber): TrackingInterface;

    /**
     * @return string|null
     */
    public function getTrackingUrl(): ?string;

    /**
     * @param string $trackingUrl
     * @return TrackingInterface
     */
    public function setTrackingUrl(string $trackingUrl): TrackingInterface;

    /**
     * @return string|null
     */
    public function getCarrier(): ?string;

    /**
     * @param string $carrier
     * @return TrackingInterface
     */
    public function setCarrier(string $carrier): TrackingInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
