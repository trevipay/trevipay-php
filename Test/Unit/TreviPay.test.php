<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Test\Unit\Model\Refund;

use PHPUnit\Framework\TestCase;
use TreviPay\TreviPay\Model\Authorization\AuthorizationApiCall;
use TreviPay\TreviPay\Model\Buyer\BuyerApiCall;
use TreviPay\TreviPay\Model\Charge\ChargeApiCall;
use TreviPay\TreviPay\Model\Customer\CustomerApiCall;
use TreviPay\TreviPay\Model\Refund\RefundApiCall;
use TreviPay\TreviPay\Model\Webhook\WebhookApiCall;

final class TreviPayTest extends TestCase
{
    private $treviPay;

    protected function setUp(): void
    {
        $treviPayOptions = new \TreviPay\TreviPay\ClientOptions();
        $this->treviPay = new \TreviPay\TreviPay\Client('05b527e7-9b01-4875-95f1-9f48397e2112', $treviPayOptions);
    }

    public function test_can_initialize_refund(): void
    {
        $this->assertInstanceOf(RefundApiCall::class, $this->treviPay->refund);
    }

    public function test_can_initialize_charge(): void
    {
        $this->assertInstanceOf(ChargeApiCall::class, $this->treviPay->charge);
    }

    public function test_can_initialize_buyer(): void
    {
        $this->assertInstanceOf(BuyerApiCall::class, $this->treviPay->buyer);
    }

    public function test_can_initialize_customer(): void
    {
        $this->assertInstanceOf(CustomerApiCall::class, $this->treviPay->customer);
    }

    public function test_can_initialize_webhooks(): void
    {
        $this->assertInstanceOf(WebhookApiCall::class, $this->treviPay->webhooks);
    }

    public function test_can_initialize_authorization(): void
    {
        $this->assertInstanceOf(AuthorizationApiCall::class, $this->treviPay->authorization);
    }
}
