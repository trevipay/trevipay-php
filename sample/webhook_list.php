<?php
declare(strict_types=1);

// phpcs:ignore
require __DIR__ . '/../vendor/autoload.php';

try {
    $treviPay = new TreviPay\TreviPay\Client('API-KEY');
    $webhookList = $treviPay->webhooks->list();
    // phpcs:ignore
    var_dump($webhookList);
} catch (TreviPay\TreviPay\Exception\ApiClientException $e) {
    // phpcs:ignore
    var_dump($e->getMessage());
}
