<?php


namespace TreviPay\TreviPay\Model\Data\Charge;

use TreviPay\TreviPay\Api\Data\Charge\CompanyAddressInterface;
use TreviPay\TreviPay\Api\Data\Charge\SupplierInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class Supplier extends RequestDataObject implements SupplierInterface
{
    private const COMPANY_NAME = 'company_name';
    private const COMPANY_ADDRESS = 'company_address';

    /**
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->getData(self::COMPANY_NAME);
    }

    /**
     * @param string $companyName
     * @return SupplierInterface
     */
    public function setCompanyName(string $companyName): SupplierInterface
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
     * @return SupplierInterface
     */
    public function setCompanyAddress(CompanyAddressInterface $companyAddress): SupplierInterface
    {
        return $this->setData(self::COMPANY_ADDRESS, $companyAddress);
    }
}
