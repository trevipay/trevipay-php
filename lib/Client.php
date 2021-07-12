<?php
declare(strict_types=1);

namespace TreviPay\TreviPay;

use TreviPay\TreviPay\Model\Buyer\BuyerApiCall;
use TreviPay\TreviPay\Model\Charge\ChargeApiCall;
use TreviPay\TreviPay\Model\Charge\MapCharge;
use TreviPay\TreviPay\Model\Authorization\AuthorizationApiCall;
use TreviPay\TreviPay\Model\Webhook\WebhookApiCall;
use TreviPay\TreviPay\Model\Refund\RefundApiCall;
use TreviPay\TreviPay\Model\Refund\MapRefund;

class Client
{
    /**
     * @var BuyerApiCall
     */
    public $buyer;

    /**
     * @var ChargeApiCall
     */
    public $charge;

    /**
     * @var AuthorizationApiCall
     */
    public $authorization;

    /**
     * @var WebhookApiCall
     */
    public $webhooks;

    /**
     * @var RefundApiCall
     */
    public $credit;

    /**
     * @var ClientOptions
     */
    private $options;

    public function __construct(string $apiKey, ?ClientOptions $options = null)
    {
        $this->options = $options ?? new ClientOptions();
        $apiClient = new ApiClient($this->options->getLogger(), $this->options->getMaskValue(), new \GuzzleHttp\Client());
        $treviPayRequest = $this->options->getTreviPayRequest();
        $configProvider = $treviPayRequest->getConfigProvider();
        $configProvider->setApiKey($apiKey);
        $this->buyer = new BuyerApiCall(
            $apiClient,
            $treviPayRequest
        );
        $this->charge = new ChargeApiCall(
            $apiClient,
            new MapCharge(),
            $treviPayRequest
        );
        $this->authorization = new AuthorizationApiCall(
            $apiClient,
            $treviPayRequest
        );
        $this->webhooks = new WebhookApiCall(
            $apiClient,
            $treviPayRequest
        );
        $this->refund = new RefundApiCall(
            $apiClient,
            new MapRefund(),
            $treviPayRequest
        );
    }
}
