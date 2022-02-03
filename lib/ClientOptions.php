<?php

declare(strict_types=1);

namespace TreviPay\TreviPay;

use Monolog\Logger;
use TreviPay\TreviPay\Http\TransferBuilder;
use TreviPay\TreviPay\Model\ClientConfigProvider;
use TreviPay\TreviPay\Model\Http\TreviPayRequest;
use TreviPay\TreviPay\Model\MaskValue;
use Psr\Log\LoggerInterface;

class ClientOptions
{
    private const TREVIPAY_API_BASE_URI = 'https://trevipay.app/';

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var MaskValue
     */
    private $maskValue;

    /**
     * @var TreviPayRequest
     */
    private $treviPayRequest;

    /**
     * @var ClientConfigProvider
     */
    private $configProvider;

    public function __construct(string $treviPayApiBaseUri = self::TREVIPAY_API_BASE_URI, ?LoggerInterface $logger = null)
    {
        $this->logger = $logger ?? new Logger('api_client');
        $this->maskValue = new MaskValue();

        $this->configProvider = new ClientConfigProvider($this->maskValue);
        $this->configProvider->setBaseUri($treviPayApiBaseUri);
        $this->treviPayRequest = new TreviPayRequest(
            new TransferBuilder(),
            $this->configProvider,
            $this->maskValue
        );
    }

    public function setHost(string $host): ClientOptions
    {
        $this->configProvider->setBaseUri($host);

        return $this;
    }

    public function setLogger(LoggerInterface $logger): ClientOptions
    {
        $this->logger = $logger;

        return $this;
    }

    public function setMaskValue(MaskValue $maskValue): ClientOptions
    {
        $this->maskValue = $maskValue;

        return $this;
    }

    public function setRequestClass(TreviPayRequest $treviPayRequest): ClientOptions
    {
        $this->treviPayRequest = $treviPayRequest;

        return $this;
    }

    /**
     * @return LoggerInterface
     */
    public function getLogger(): LoggerInterface
    {
        return $this->logger;
    }

    /**
     * @return MaskValue
     */
    public function getMaskValue(): MaskValue
    {
        return $this->maskValue;
    }

    /**
     * @return TreviPayRequest
     */
    public function getTreviPayRequest(): TreviPayRequest
    {
        return $this->treviPayRequest;
    }
}
