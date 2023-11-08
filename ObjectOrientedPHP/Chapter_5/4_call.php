<?php
require_once 'ProductChapter_5.php';
require_once 'JsonProductWriter.php';

$writer = new JsonProductWriter();
$product = new ProductChapter_5(manufacturer: 'Acme', itemName: 'radio Knob', productWriter: $writer);

print $product->write() . PHP_EOL;