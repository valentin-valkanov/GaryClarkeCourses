<?php
declare(strict_types=1);
require_once 'vendor/autoload.php';

$string = serialize('this is a string');


$int = serialize(345);
$unserializedInt = unserialize($int);


$floatingPoint = serialize(345.678);


$array = serialize(['this', 'is', 'an', 'array', 200]);


$bool = serialize(false);
dd($bool);



