<?php
require_once 'Song2.php';
require_once 'Book2.php';


$song2 = new Song2;
$book2 = Book2::create();

print_r($song2) . PHP_EOL;
print_r($book2);