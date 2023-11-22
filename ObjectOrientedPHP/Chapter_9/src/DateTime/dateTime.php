<?php
declare(strict_types=1);
require_once '../../vendor/autoload.php';


//Create DateTime using DateTime without args

$dateTime = new DateTime();


//Create DateTime using a date
$dateTime = new DateTime('2023-11-23');

//Show formatted

//Create using human-readable
$dateTime = new DateTime('next Monday');


//Create using date_create() function
$dateTime = date_create('next Wednesday');


// Create for different time zones
$sofia = new DateTime('now', new DateTimeZone('Europe/Sofia'));
dd($dateTime);