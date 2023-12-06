<?php

require_once 'vendor/autoload.php';

$fileWriter = new \App\OldStuff\CsvFileWriter(); /** this is teh old file writer before using the adapter */

$fileWriter = new \App\NewStuff\NewCsvFileWriter();
$fileWriter = new \App\NewStuff\NewFileWriterAdapter($fileWriter);

$processor = new \App\OldStuff\ExampleProcessor($fileWriter);

$processor->process(['foo' => 'bar']);

