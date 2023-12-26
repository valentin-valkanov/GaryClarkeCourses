<?php
require_once 'ProductChapter_5.php';
require_once 'JsonProductWriter.php';

$productWriter = new JsonProductWriter();
$product = new ProductChapter_5('Acme', 'Radio Knob', $productWriter);



try{
    $product->rating = 6;
    echo 'Rating: ' . $product->rating . PHP_EOL;
}catch (BadMethodCallException $exception){
    echo $exception->getMessage() . PHP_EOL;
}

unset($product->rating);
echo 'Rating: ' . $product->rating . PHP_EOL;

print $product->getName() . PHP_EOL;

/* The "rating" property should be private in order for the code to have meaning (and to work!!!). I made it public because of
the curly underneath line appears in the case of the private.
*/
