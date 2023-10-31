<?php
require_once 'Counter.php';
require_once 'Connection.php';

//Counter::$count++;
//Counter::$count++;
//
//echo Counter::$count;

$connection_1 = new Connection();
echo Connection::$count . PHP_EOL;
$connection_2 = new Connection();
$connection_3 = new Connection();
$connection_4 = new Connection();

echo Connection::$count;
