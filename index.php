<?php

require __DIR__ . '/src/Product.php';
require __DIR__ . '/src/DigitalProduct.php';
require __DIR__ . '/src/Ebook.php';
require __DIR__ . '/src/Customer.php';
require __DIR__ . '/src/Cart.php';
require __DIR__ . '/src/Order.php';
require __DIR__ . '/src/InvoicePrinter.php';
require __DIR__ . '/src/Shop.php';

$shop = new Shop();
$shop->run();
