<?php


namespace TreviPay\TreviPay\Model\Refund;

use TreviPay\TreviPay\Api\Data\Refund\RefundResponseInterface;
use TreviPay\TreviPay\Model\Data\Refund\RefundDetail;
use TreviPay\TreviPay\Model\Data\Refund\RefundResponse;

class MapRefund
{
    public function execute(array $entries): array
    {
        $resultEntries = [];

        foreach ($entries as $entry) {
            /** @var RefundResponseInterface $refund */
            $refund = new RefundResponse($entry);
            $refund->setDetails($this->prepareDetails($entry));
            $resultEntries[] = $refund;
        }

        return $resultEntries;
    }

    private function prepareDetails(array $entry): array
    {
        $result = [];

        if (!isset($entry['details'])) {
            return $result;
        }
        foreach ($entry['details'] as $detailSource) {
            $detailSource['quantity'] = (float)$detailSource['quantity'];
            $result[] = new RefundDetail($detailSource);
        }

        return $result;
    }
}
