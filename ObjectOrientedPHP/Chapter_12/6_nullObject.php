<?php
require_once 'vendor/autoload.php';

$fileWriter = new \App\OldStuff\CsvFileWriter();

$processor = new \App\OldStuff\ExampleProcessor(new \App\OldStuff\NullFileWriter());
$processor->process(['foo' => 'barf']);
