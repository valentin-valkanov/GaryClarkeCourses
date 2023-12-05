<?php

require_once 'vendor/autoload.php';

$csv = new \App\OldStuff\CsvFileWriter();
$json = new \App\OldStuff\JsonFileWriter();

$processor = new \App\OldStuff\ExampleProcessor($json);
$processor->process(['some' => 'data']);