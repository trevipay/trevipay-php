# TreviPay PHP Library

## Installation

### Using Composer

Install the TreviPay PHP library with the following command:
```
composer require trevipay/trevipay-php
```

## Usage
### Getting Started

The quickest and simplest way to get started is with the following:
```
$treviPay = new TreviPay\TreviPay\Client('API-KEY');

$webhookList = $treviPay->webhooks->list();

var_dump($webhookList);
```

## License
[MPL 2.0](https://www.mozilla.org/en-US/MPL/2.0/)
