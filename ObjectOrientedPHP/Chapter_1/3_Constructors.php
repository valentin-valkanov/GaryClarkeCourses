<?php

class Product
{
    public string $name;
    public int $price;

    public function __construct(string $name = 'Tyres', int $price = 15)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function priceAsCurrency(int $divisor = 100, string $currencySymbol = '$'): string
    {
        return $currencySymbol . $this->price / $divisor;
    }
}

$product = new Product(price: 25);
echo $product->name.PHP_EOL;
echo $product->priceAsCurrency();