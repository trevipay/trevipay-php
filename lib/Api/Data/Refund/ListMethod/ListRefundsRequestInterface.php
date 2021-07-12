<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Api\Data\Refund\ListMethod;

interface ListRefundsRequestInterface
{
    /**
     * @return int|null
     */
    public function getChargeId(): ?int;

    /**
     * @param int $pageSize
     * @return ListRefundsRequestInterface
     */
    public function setChargeId(int $pageSize): ListRefundsRequestInterface;

    /**
     * @return int|null
     */
    public function getPageSize(): ?int;

    /**
     * @param int $pageSize
     * @return ListRefundsRequestInterface
     */
    public function setPageSize(int $pageSize): ListRefundsRequestInterface;

    /**
     * @return int|null
     */
    public function getPageNumber(): ?int;

    /**
     * @param int $pageNumber
     * @return ListRefundsRequestInterface
     */
    public function setPageNumber(int $pageNumber): ListRefundsRequestInterface;

    /**
     * @return string|null
     */
    public function getFromData(): ?string;

    /**
     * @param string $fromDate
     * @return ListRefundsRequestInterface
     */
    public function setFromData(string $fromDate): ListRefundsRequestInterface;

    /**
     * @return string|null
     */
    public function getToData(): ?string;

    /**
     * @param string $toData
     * @return ListRefundsRequestInterface
     */
    public function setToData(string $toData): ListRefundsRequestInterface;

    /**
     * @return array
     */
    public function getRequestData(): array;
}
