<?php


namespace TreviPay\TreviPay;

use TreviPay\TreviPay\Exception\ApiClientException;
use TreviPay\TreviPay\Http\Transfer;

interface ApiClientInterface
{
    /**
     * @param Transfer $transfer
     * @return array
     * @throws ApiClientException
     */
    public function execute(Transfer $transfer): array;
}
