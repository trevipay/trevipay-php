<?php


namespace TreviPay\TreviPay\Test\Unit\Model\Refund;

use GuzzleHttp\Psr7\Response;
use Mockery;

include_once('Test/Unit/ApiCallHelpers.php');

class ChargeApiCallTest extends \PHPUnit\Framework\TestCase
{
  private $treviPay;
  private $mapCharge;
  private static $guzzleClient;

  public static function setUpBeforeClass(): void
  {
    self::$guzzleClient = Mockery::mock('overload:GuzzleHttp\Client', 'GuzzleHttp\ClientInterface');
  }

  protected function setUp(): void
  {
    $this->mapCharge = new \TreviPay\TreviPay\Model\Charge\MapCharge();
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
    $create201 = json_decode(file_get_contents("Test/Fixtures/Charge/CreateResponse201.json"), TRUE);
    $expectedResult = $this->mapCharge->execute([$create201]);

    $this->mock_request(201, $create201);

    $result = $this->treviPay->charge->create([
      "buyer_id" => "cf771e8a-5c1a-462f-b4c9-fc745f02d0de",
      "customer_id" => "cf771e8a-5c1a-462f-b4c9-fc745f02d0de",
      "seller_id" => "cf771e8a-5c1a-462f-b4c9-fc745f02d0de",
      "currency" => "CAD",
      "po_number" => "EXAMPLE",
      "comment" => "Example Charge",
      "order_number" => "EXAMPLE",
      "order_url" => "https://www.example.com/example",
      "seller_tax_invoice_number" => "EXAMPLE",
      "seller_tax_invoice_url" => "https://www.example.com/example",
      "details" => [
        [
          "description" => "Example",
          "discount_amount" => 0,
          "quantity" => 10,
          "sku" => "EXAMPLE",
          "subtotal" => 11000,
          "tax_amount" => 1000,
          "tax_details" => [
            [
              "tax_type" => "TAX",
              "tax_rate" => 10,
              "tax_amount" => 1000
            ]
          ],
          "unit_price" => 1000
        ]
      ],
      "shipping_tax_details" => [
        [
          "tax_type" => "TAX",
          "tax_rate" => 10,
          "tax_amount" => 50
        ]
      ],
      "ship_to" => [
        "pickup" => false,
        "company_name" => "Example Recipient",
        "recipient_name" => "Example Recipient",
        "company_address" => [
          "zip" => "V3H",
          "city" => "Fernside",
          "state" => "BC",
          "country" => "CA",
          "address_line1" => "1249 Breitenberg Parkway",
          "address_line2" => "Apt. 903"
        ]
      ],
      "supplier" => [
        "company_name" => "Example Supplier",
        "company_address" => [
          "zip" => "V3H",
          "city" => "Fernside",
          "state" => "BC",
          "country" => "CA",
          "address_line1" => "12345 Breitenberg Parkway",
          "address_line2" => "Unit 1234"
        ]
      ],
      "total_amount" => 11550,
      "tax_amount" => 1000,
      "shipping_amount" => 500,
      "shipping_tax_amount" => 50,
      "shipping_discount_amount" => 0,
      "discount_amount" => 0
    ]);
    $this->assertEqualsCanonicalizing($expectedResult, [$result]);
  }

  public function test_can_call_create_401(): void
  {
    $create401 = json_decode(file_get_contents("Test/Fixtures/Charge/CreateResponse401.json"), TRUE);
    $this->mock_request(401, $create401);
    $this->expectException(\TreviPay\TreviPay\Exception\IncorrectStatusCodeException::class);
    $this->treviPay->charge->create([]);
  }

  public function test_can_call_list(): void
  {
    $list200 = json_decode(file_get_contents("Test/Fixtures/Charge/ListResponse200.json"), true);
    $expectedResult = $this->mapCharge->execute($list200);

    $this->mock_request(200, $list200);

    $result = $this->treviPay->charge->list(['charge_id' => '05b527e7-9b01-4875-95f1-9f48397e2112']);
    $this->assertEqualsCanonicalizing($expectedResult, $result);
  }

  public function test_can_call_get(): void
  {
    $get200 = json_decode(file_get_contents("Test/Fixtures/Charge/GetResponse200.json"), true);
    $expectedResult = $this->mapCharge->execute([$get200])[0];

    $this->mock_request(200, $get200);

    $result = $this->treviPay->charge->retrieve('05b527e7-9b01-4875-95f1-9f48397e2112');
    $this->assertEqualsCanonicalizing($expectedResult, $result);
  }
}
