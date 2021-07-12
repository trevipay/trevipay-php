<?php

function createTreviPayClient(): TreviPay\TreviPay\Client
{
  // /** @var \Psr\Log\LoggerInterface **/
  $logger = new EmptyLogger;
  $treviPayOptions = new \TreviPay\TreviPay\ClientOptions();
  $treviPayOptions->setLogger($logger);
  return new \TreviPay\TreviPay\Client('aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee', $treviPayOptions);
}

class EmptyLogger implements \Psr\Log\LoggerInterface
{
  public function emergency($message, array $context = array()): void
  {
  }
  public function alert($message, array $context = array()): void
  {
  }
  public function critical($message, array $context = array()): void
  {
  }
  public function error($message, array $context = array()): void
  {
  }
  public function warning($message, array $context = array()): void
  {
  }
  public function notice($message, array $context = array()): void
  {
  }
  public function info($message, array $context = array()): void
  {
  }
  public function debug($message, array $context = array()): void
  {
  }
  public function log($level, $message, array $context = array()): void
  {
  }
}
