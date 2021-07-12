<?php
declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Charge\ListMethod;

interface ListChargesRequestInterface
{
    /**
     * @return int|null
     */
    public function getPageSize(): ?int;

    /**
     * @param int $pageSize
     * @return ListChargesRequestInterface
     */
    public function setPageSize(int $pageSize): ListChargesRequestInterface;

    /**
     * @return int|null
     */
    public function getPageNumber(): ?int;

    /**
     * @param int $pageNumber
     * @return ListChargesRequestInterface
     */
    public function setPageNumber(int $pageNumber): ListChargesRequestInterface;

    /**
     * @return string|null
     */
    public function getFromData(): ?string;

    /**
     * @param string $fromDate
     * @return ListChargesRequestInterface
     */
    public function setFromData(string $fromDate): ListChargesRequestInterface;

    /**
     * @return string|null
     */
    public function getToData(): ?string;

    /**
     * @param string $toData
     * @return ListChargesRequestInterface
     */
    public function setToData(string $toData): ListChargesRequestInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
