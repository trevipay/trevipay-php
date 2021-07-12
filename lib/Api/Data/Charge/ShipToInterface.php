<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Charge;

interface ShipToInterface
{
    /**
     * @return string|null
     */
    public function getRecipientName(): ?string;

    /**
     * @param string $recipientName
     * @return ShipToInterface
     */
    public function setRecipientName(string $recipientName): ShipToInterface;

    /**
     * @return string|null
     */
    public function getCompanyName(): ?string;

    /**
     * @param string $companyName
     * @return ShipToInterface
     */
    public function setCompanyName(string $companyName): ShipToInterface;

    /**
     * @return CompanyAddressInterface|null
     */
    public function getCompanyAddress(): ?CompanyAddressInterface;

    /**
     * @param CompanyAddressInterface $companyAddress
     * @return ShipToInterface
     */
    public function setCompanyAddress(CompanyAddressInterface $companyAddress): ShipToInterface;

    /**
     * @return bool|null
     */
    public function getPickup(): ?bool;

    /**
     * @param bool $pickup
     * @return ShipToInterface
     */
    public function setPickup(bool $pickup): ShipToInterface;

    /**
     * @return TrackingInterface|null
     */
    public function getTracking(): ?TrackingInterface;

    /**
     * @param TrackingInterface $tracking
     * @return ShipToInterface
     */
    public function setTracking(TrackingInterface $tracking): ShipToInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
