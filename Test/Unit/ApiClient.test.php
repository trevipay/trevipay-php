<?php

declare(strict_types=1);

namespace TreviPay\TreviPay\Test\Unit;

use GuzzleHttp\Psr7\Response;
use Mockery;
use Mockery\LegacyMockInterface;
use PHPUnit\Framework\TestCase;
use TreviPay\TreviPay\Client;

include_once('Test/Unit/ApiCallHelpers.php');

class ApiClientTest extends TestCase
{
  private Client $treviPay;
  private static LegacyMockInterface $guzzleClient;
  private static array $capturedOptions = [];

  public static function setUpBeforeClass(): void
  {
    self::$guzzleClient = Mockery::mock('overload:GuzzleHttp\Client', 'GuzzleHttp\ClientInterface');
  }

  public function tearDown(): void
  {
    Mockery::close();
  }

  public function test_send_receives_well_formed_request_options(): void
  {
    $buyer200 = json_decode(file_get_contents("Test/Fixtures/Buyer/GetBuyerResponse200.json"), true);
    self::$guzzleClient->shouldReceive('send')->andReturnUsing(
      function ($request, array $options) use ($buyer200) {
        self::$capturedOptions = $options;
        return new Response(200, [], json_encode($buyer200));
      }
    );
    $this->treviPay = createTreviPayClient();

    $this->treviPay->buyer->retrieve("cf771e8a-5c1a-462f-b4c9-fc745f02d0de");

    // Regression guard: "protocols" restricts the request to https, but must be a well-formed array
    // of protocol strings. Guzzle >= 7.9 runs it through Utils::normalizeProtocols() and rejects any
    // non-string entry with "protocols must contain only strings", which broke every TreviPay API
    // call once the deployed Guzzle was upgraded.
    $this->assertSame(['https'], self::$capturedOptions['protocols']);
    foreach (self::$capturedOptions['protocols'] as $protocol) {
      $this->assertIsString($protocol, 'Guzzle "protocols" option must contain only strings');
    }

    // connect_timeout must be a real top-level request option, not nested inside "protocols".
    $this->assertSame(30, self::$capturedOptions['connect_timeout']);
    $this->assertFalse(self::$capturedOptions['allow_redirects']);
  }
}
