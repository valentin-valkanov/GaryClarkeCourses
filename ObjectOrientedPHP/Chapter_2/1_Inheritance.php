<?php
declare(strict_types=1);

require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$physicalBook = new PhysicalBook2('A Random Book', 'John Doe', 2000, 300);
$digitalBook = new DigitalBook('A Random Book', 'John Doe', 1000, 1048);
$book = new BookChapter_4('A Random Book', 'John Doe', 2000);

echo $physicalBook->print() .PHP_EOL;
echo $digitalBook->print() .PHP_EOL;
echo $book->print() .PHP_EOL;