<?php
require_once 'ProductChapter_5.php';

$product = new ProductChapter_5('Acme', 'Radio Knob');

print $product->getName() . PHP_EOL;

try{
    $product->rating = 6;
    echo 'Rating: ' . $product->rating . PHP_EOL;
}catch (BadMethodCallException $exception){
    echo $exception->getMessage();
}

unset($product->rating);
echo 'Rtaing: ' . $product->rating . PHP_EOL;

/* The "rating" property should be private in order for the code to have meaning. I made it public because of
the curly underneath line appears in the case of the private..
*/
