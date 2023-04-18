<?php


namespace TreviPay\TreviPay\Test\Unit\Model;

use Mockery;
use Mockery\Adapter\Phpunit\MockeryTestCase;
use Faker\Factory as Faker;
use TreviPay\TreviPay\Api\ConfigProviderInterface;
use TreviPay\TreviPay\Model\Http\TreviPayRequest;
use TreviPay\TreviPay\Http\TransferBuilder;
use TreviPay\TreviPay\Model\MaskValue;

final class TreviPayRequestTest extends MockeryTestCase
{
    private $treviPayRequest;
    private $transferBuilder;
    private $configProvider;
    private $maskValue;

    protected function setUp(): void
    {
        $this->transferBuilder = Mockery::mock(TransferBuilder::class);
        $this->configProvider = Mockery::mock(ConfigProviderInterface::class);
        $this->maskValue = Mockery::mock(MaskValue::class);

        $this->assignMockValues();
    }

    public function assignMockValues(): void
    {
        $this->treviPayRequest = new TreviPayRequest(
            $this->transferBuilder,
            $this->configProvider,
            $this->maskValue
        );
    }

    public function testReturnValidUserAgentHeader()
    {
        $faker = Faker::create();
        $integrationInfo = $faker->sentence(5);

        $this->configProvider->allows([
            "getApiKey" => $faker->uuid(),
            "getIntegrationInfo" => $integrationInfo
        ]);

        $this->assertEquals(
            $integrationInfo,
            $this->treviPayRequest->getHeaders()['User-Agent']
        );
    }
}
