<?php


namespace TreviPay\TreviPay\Model\Data\Refund\ListMethod;

use TreviPay\TreviPay\Api\Data\Refund\ListMethod\ListRefundsRequestInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class ListRefundsRequest extends RequestDataObject implements ListRefundsRequestInterface
{
    private const CHARGE_ID = 'charge_id';
    private const PAGE_SIZE = 'page_size';
    private const PAGE_NUMBER = 'page_number';
    private const FROM_DATE = 'from_date';
    private const TO_DATE = 'to_date';

    /**
     * @return int|null
     */
    public function getChargeId(): ?int
    {
        return $this->getData(self::CHARGE_ID);
    }

    /**
     * @param int $chargeId
     * @return ListRefundsRequestInterface
     */
    public function setChargeId(int $chargeId): ListRefundsRequestInterface
    {
        $this->setData(self::CHARGE_ID, $chargeId);

        return $this;
    }


    /**
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->getData(self::PAGE_SIZE);
    }

    /**
     * @param int $pageSize
     * @return ListRefundsRequestInterface
     */
    public function setPageSize(int $pageSize): ListRefundsRequestInterface
    {
        $this->setData(self::PAGE_SIZE, $pageSize);

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPageNumber(): ?int
    {
        return $this->getData(self::PAGE_NUMBER);
    }

    /**
     * @param int $pageNumber
     * @return ListRefundsRequestInterface
     */
    public function setPageNumber(int $pageNumber): ListRefundsRequestInterface
    {
        $this->setData(self::PAGE_NUMBER, $pageNumber);

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFromData(): ?string
    {
        return $this->getData(self::FROM_DATE);
    }

    /**
     * @param string $fromDate
     * @return ListRefundsRequestInterface
     */
    public function setFromData(string $fromDate): ListRefundsRequestInterface
    {
        $this->setData(self::FROM_DATE, $fromDate);

        return $this;
    }

    /**
     * @return string|null
     */
    public function getToData(): ?string
    {
        return $this->getData(self::TO_DATE);
    }

    /**
     * @param string $toData
     * @return ListRefundsRequestInterface
     */
    public function setToData(string $toData): ListRefundsRequestInterface
    {
        $this->setData(self::TO_DATE, $toData);

        return $this;
    }
}
