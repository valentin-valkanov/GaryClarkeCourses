<?php
declare(strict_types=1);
class Product
{
    public function __construct(public string $name = 'Tyres', public int $price = 15)
    {

    }

    public function priceAsCurrency(int $divisor = 100, string $currencySymbol = '$'): string
    {
        return $currencySymbol . $this->price / $divisor;
    }
}

$product = new Product;
echo $product->name . PHP_EOL;
echo $product->priceAsCurrency() . PHP_EOL;