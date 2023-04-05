<?php


namespace TreviPay\TreviPay\Api\Data\Charge;

interface SupplierInterface
{
    /**
     * @return string|null
     */
    public function getCompanyName(): ?string;

    /**
     * @param string $companyName
     * @return SupplierInterface
     */
    public function setCompanyName(string $companyName): SupplierInterface;

    /**
     * @return CompanyAddressInterface|null
     */
    public function getCompanyAddress(): ?CompanyAddressInterface;

    /**
     * @param CompanyAddressInterface $companyAddress
     * @return SupplierInterface
     */
    public function setCompanyAddress(CompanyAddressInterface $companyAddress): SupplierInterface;
}
