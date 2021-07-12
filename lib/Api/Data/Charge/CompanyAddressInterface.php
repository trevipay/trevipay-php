<?php
declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Charge;

interface CompanyAddressInterface
{
    /**
     * @return string|null
     */
    public function getAddressLine1(): ?string;

    /**
     * @param string $addressLine1
     * @return CompanyAddressInterface
     */
    public function setAddressLine1(string $addressLine1): CompanyAddressInterface;

    /**
     * @return string|null
     */
    public function getAddressLine2(): ?string;

    /**
     * @param string $addressLine2
     * @return CompanyAddressInterface
     */
    public function setAddressLine2(string $addressLine2): CompanyAddressInterface;

    /**
     * @return string|null
     */
    public function getCountry(): ?string;

    /**
     * @param string $country
     * @return CompanyAddressInterface
     */
    public function setCountry(string $country): CompanyAddressInterface;

    /**
     * @return string|null
     */
    public function getCity(): ?string;

    /**
     * @param string $city
     * @return CompanyAddressInterface
     */
    public function setCity(string $city): CompanyAddressInterface;

    /**
     * @return string|null
     */
    public function getState(): ?string;

    /**
     * @param string $state
     * @return CompanyAddressInterface
     */
    public function setState(string $state): CompanyAddressInterface;

    /**
     * @return string|null
     */
    public function getZip(): ?string;

    /**
     * @param string $zip
     * @return CompanyAddressInterface
     */
    public function setZip(string $zip): CompanyAddressInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
