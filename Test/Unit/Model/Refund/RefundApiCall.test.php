<?php


namespace TreviPay\TreviPay\Test\Unit\Model\Refund;

use GuzzleHttp\Psr7\Response;
use Mockery;

include_once('Test/Unit/ApiCallHelpers.php');

class RefundApiCallTest extends \PHPUnit\Framework\TestCase
{
  private $treviPay;
  private $mapRefund;
  private static $guzzleClient;

  public static function setUpBeforeClass(): void
  {
    self::$guzzleClient = Mockery::mock('overload:GuzzleHttp\Client', 'GuzzleHttp\ClientInterface');
  }

  protected function setUp(): void
  {
    $this->mapRefund = new \TreviPay\TreviPay\Model\Refund\MapRefund();
  }

  public function tearDown(): void
  {
    \Mockery::close();
  }

  public function mock_request(int $status, array $json): void
  {
    self::$guzzleClient->shouldReceive('send')->andReturn(new Response($status, [], json_encode($json)));
    $this->treviPay = createTreviPayClient();
  }

  public function test_can_call_create_201(): void
  {
    $create201 = json_decode(file_get_contents("Test/Fixtures/Refund/CreateResponse201.json"), TRUE);
    $expectedResult = $this->mapRefund->execute([$create201]);

    $this->mock_request(201, $create201);

    $result = $this->treviPay->refund->create([
      "id" => "a5810c4d-f5d6-4967-94ab-b09ed32c2910",
      "charge_id" => "cf771e8a-5c1a-462f-b4c9-fc745f02d0de",
      "seller_id" => "cf771e8a-5c1a-462f-b4c9-fc745f02d0de",
      "buyer_id" => "cf771e8a-5c1a-462f-b4c9-fc745f02d0de",
      "currency" => "USD",
      "status" => "Created",
      "refund_memo_url" => "string",
      "created" => "2018-07-12T02:00:25.535Z",
      "modified" => "2018-07-12T02:00:25.535Z",
      "total_amount" => 100,
      "tax_amount" => 10,
      "shipping_amount" => 10,
      "shipping_tax_amount" => 1,
      "shipping_tax_details" => [
        [
          "tax_type" => "string",
          "tax_rate" => 10,
          "tax_amount" => 1
        ]
      ],
      "shipping_discount_amount" => 0,
      "discount_amount" => 0,
      "details" => [
        [
          "sku" => "SKU-123",
          "description" => "An item",
          "quantity" => 1,
          "unit_price" => 90,
          "tax_amount" => 9,
          "discount_amount" => 0,
          "subtotal" => 90,
          "tax_details" => [
            [
              "tax_type" => "10 Percent",
              "tax_rate" => 10,
              "tax_amount" => 9
            ]
          ]
        ]
      ],
      "refund_reason" => "Delivery Refused",
      "refund_comment" => "string"
    ]);
    $this->assertEqualsCanonicalizing($expectedResult, [$result]);
  }

  public function test_can_call_create_401(): void
  {
    $create401 = json_decode(file_get_contents("Test/Fixtures/Refund/CreateResponse401.json"), TRUE);
    $this->mock_request(401, $create401);
    $this->expectException(\TreviPay\TreviPay\Exception\IncorrectStatusCodeException::class);
    $this->treviPay->refund->create([]);
  }

  public function test_can_call_list(): void
  {
    $list200 = json_decode(file_get_contents("Test/Fixtures/Refund/ListResponse200.json"), true);
    $expectedResult = $this->mapRefund->execute($list200);

    $this->mock_request(200, $list200);

    $result = $this->treviPay->refund->list(['charge_id' => '05b527e7-9b01-4875-95f1-9f48397e2112']);
    $this->assertEqualsCanonicalizing($expectedResult, $result);
  }

  public function test_can_call_get(): void
  {
    $get200 = json_decode(file_get_contents("Test/Fixtures/Refund/GetResponse200.json"), true);
    $expectedResult = $this->mapRefund->execute([$get200])[0];

    $this->mock_request(200, $get200);

    $result = $this->treviPay->refund->retrieve('05b527e7-9b01-4875-95f1-9f48397e2112');
    $this->assertEqualsCanonicalizing($expectedResult, $result);
  }
}
