<?php
class Product
{
    public string $name ='soap';
    public int $price = 100;

    public function priceAsCurrency(int $divisor = 100, string $currencySymbol = '$'): string
    {
        return $currencySymbol . $this->price / $divisor;
    }
}

$product = new Product;
echo $product->priceAsCurrency(currencySymbol: 'E');