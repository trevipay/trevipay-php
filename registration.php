<?php
declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::LIBRARY,
    'trevipay/trevipay-php',
    __DIR__
);
