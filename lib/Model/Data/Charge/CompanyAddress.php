<?php


namespace TreviPay\TreviPay\Model\Data\Charge;

use TreviPay\TreviPay\Api\Data\Charge\CompanyAddressInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class CompanyAddress extends RequestDataObject implements CompanyAddressInterface
{
    private const ADDRESS_LINE1 = 'address_line1';
    private const ADDRESS_LINE2 = 'address_line2';
    private const COUNTRY = 'country';
    private const CITY = 'city';
    private const STATE = 'state';
    private const ZIP = 'zip';

    /**
     * @return string|null
     */
    public function getAddressLine1(): ?string
    {
        return $this->getData(self::ADDRESS_LINE1);
    }

    /**
     * @param string $addressLine1
     * @return CompanyAddressInterface
     */
    public function setAddressLine1(string $addressLine1): CompanyAddressInterface
    {
        return $this->setData(self::ADDRESS_LINE1, $addressLine1);
    }

    /**
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        return $this->getData(self::ADDRESS_LINE2);
    }

    /**
     * @param string $addressLine2
     * @return CompanyAddressInterface
     */
    public function setAddressLine2(string $addressLine2): CompanyAddressInterface
    {
        return $this->setData(self::ADDRESS_LINE2, $addressLine2);
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->getData(self::COUNTRY);
    }

    /**
     * @param string $country
     * @return CompanyAddressInterface
     */
    public function setCountry(string $country): CompanyAddressInterface
    {
        return $this->setData(self::COUNTRY, $country);
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->getData(self::CITY);
    }

    /**
     * @param string $city
     * @return CompanyAddressInterface
     */
    public function setCity(string $city): CompanyAddressInterface
    {
        return $this->setData(self::CITY, $city);
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->getData(self::STATE);
    }

    /**
     * @param string $state
     * @return CompanyAddressInterface
     */
    public function setState(string $state): CompanyAddressInterface
    {
        return $this->setData(self::STATE, $state);
    }

    /**
     * @return string|null
     */
    public function getZip(): ?string
    {
        return $this->getData(self::ZIP);
    }

    /**
     * @param string $zip
     * @return CompanyAddressInterface
     */
    public function setZip(string $zip): CompanyAddressInterface
    {
        return $this->setData(self::ZIP, $zip);
    }
}
