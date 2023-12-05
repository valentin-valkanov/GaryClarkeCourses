<?php
declare(strict_types=1);

require_once '8_bootstrap.php';

$serviceLocator = new \App\ServiceLocator();
$serviceLocator->addInstance(\App\OldStuff\FileWriter::class, new \App\OldStuff\CsvFileWriter());
$fileWriter = $serviceLocator->get(\App\OldStuff\FileWriter::class);

$serviceLocator->addClass(\App\OldStuff\ExampleProcessor::class, [$fileWriter]);
print $serviceLocator->has(\App\OldStuff\ExampleProcessor::class) . PHP_EOL;
$serviceLocator->get(\App\OldStuff\ExampleProcessor::class);
$processor = $serviceLocator->get(\App\OldStuff\ExampleProcessor::class);
print $processor->process(['foo' => 'bar']);




