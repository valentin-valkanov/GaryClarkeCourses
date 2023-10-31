<?php
require_once 'Book.php';
require_once 'DigitalBook_2.php';
require_once 'PhysicalBook_2.php';

$book = new PhysicalBook_2('Hamlet', 500);
$digitalBook = new DigitalBook_2('Hamlet', 1048);
echo $digitalBook->write();