<?php
declare(strict_types=1);

namespace TreviPay\TreviPay\Model\Data\Charge\ListMethod;

use TreviPay\TreviPay\Api\Data\Charge\ListMethod\ListChargesRequestInterface;
use TreviPay\TreviPay\Model\RequestDataObject;

class ListChargesRequest extends RequestDataObject implements ListChargesRequestInterface
{
    private const PAGE_SIZE = 'page_size';
    private const PAGE_NUMBER = 'page_number';
    private const FROM_DATE = 'from_date';
    private const TO_DATE = 'to_date';

    /**
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->getData(self::PAGE_SIZE);
    }

    /**
     * @param int $pageSize
     * @return ListChargesRequestInterface
     */
    public function setPageSize(int $pageSize): ListChargesRequestInterface
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
     * @return ListChargesRequestInterface
     */
    public function setPageNumber(int $pageNumber): ListChargesRequestInterface
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
     * @return ListChargesRequestInterface
     */
    public function setFromData(string $fromDate): ListChargesRequestInterface
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
     * @return ListChargesRequestInterface
     */
    public function setToData(string $toData): ListChargesRequestInterface
    {
        $this->setData(self::TO_DATE, $toData);

        return $this;
    }
}
