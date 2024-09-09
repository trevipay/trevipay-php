<?php


namespace TreviPay\TreviPay\Test\Unit\Model\Buyer;

use GuzzleHttp\Psr7\Response;
use Mockery;
use Mockery\LegacyMockInterface;
use TreviPay\TreviPay\Client;
use PHPUnit\Framework\TestCase;

include_once('Test/Unit/ApiCallHelpers.php');

class BuyerApiCallTest extends TestCase
{
  private Client $treviPay;
  private static LegacyMockInterface $guzzleClient;

  public static function setUpBeforeClass(): void
  {
    self::$guzzleClient = Mockery::mock('overload:GuzzleHttp\Client', 'GuzzleHttp\ClientInterface');
  }

  protected function setUp(): void
  {
  }

  public function tearDown(): void
  {
    Mockery::close();
  }

  public function mock_request(int $status, array $json): void
  {
    self::$guzzleClient->shouldReceive('send')->andReturn(new Response($status, [], json_encode($json)));
    $this->treviPay = createTreviPayClient();
  }

  public function test_can_call_get_buyer_200(): void
  {
    $buyer200 = json_decode(file_get_contents("Test/Fixtures/Buyer/GetBuyerResponse200.json"), true);
    $this->mock_request(200, $buyer200);

    $result = $this->treviPay->buyer->retrieve("cf771e8a-5c1a-462f-b4c9-fc745f02d0de");

    // Comparing the actual result with the expected buyer data
    $this->assertJsonEquals($buyer200, $result);
  }

  public function test_can_get_buyer_401(): void
  {
    $error401 = json_decode(file_get_contents("Test/Fixtures/Error/Response401.json"), true);
    $this->mock_request(401, $error401);
    $this->expectException(\TreviPay\TreviPay\Exception\ApiClientException::class);
    $this->treviPay->buyer->retrieve("cf771e8a-5c1a-462f-b4c9-fc745f02d0de");
  }

  private function assertJsonEquals(array $expected, $actual)
  {
    $expectedJson = json_encode($expected);
    $actualJson = json_encode($actual);
    $this->assertEquals($expectedJson, $actualJson, 'Failed asserting that two JSON strings are equal.');
  }
}
