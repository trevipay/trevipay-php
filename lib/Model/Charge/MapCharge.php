<?php


namespace TreviPay\TreviPay\Model\Charge;

use TreviPay\TreviPay\Api\Data\Charge\ChargeResponseInterface;
use TreviPay\TreviPay\Model\Data\Charge\ChargeDetail;
use TreviPay\TreviPay\Model\Data\Charge\ChargeResponse;

class MapCharge
{
    public function execute(array $entries): array
    {
        $resultEntries = [];
        foreach ($entries as $entry) {
            /** @var ChargeResponseInterface $charge */
            $charge = new ChargeResponse($entry);
            $charge->setDetails($this->prepareDetails($entry));
            $resultEntries[] = $charge;
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
            $result[] = new ChargeDetail($detailSource);
        }

        return $result;
    }
}
