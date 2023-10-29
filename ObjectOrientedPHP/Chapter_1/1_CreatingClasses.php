<?php

class Product
{
    public string $name ='soap';
    public int $price;

    public function priceAsCurrency(): int|float
    {
        return $this->price / 100;
    }
}

$soapObject1 = new Product;
$soapObject1->price = 550;

$soapObject2 = new Product();
$soapObject2->price = 650;
$priceAsCurrency1 = $soapObject1->priceAsCurrency();
$priceAsCurrency2 = $soapObject2->priceAsCurrency();
echo $priceAsCurrency1;
echo $priceAsCurrency2;

