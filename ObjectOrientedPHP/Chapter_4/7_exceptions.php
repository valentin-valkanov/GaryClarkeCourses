<?php

require_once 'JasonFileReader.php';

try {
    $filePointer = fopen('errors.txt', 'a+');
    fwrite($filePointer, 'Starting...');

    $reader = new JasonFileReader();
    $items = $reader->readFileAsAssociativeArray('inventory.json');
    print_r($items);

}catch (FileNotFoundException|JsonException $fileException){
    fwrite($filePointer, "File problem: {$fileException->getMessage()} on line {$fileException->getLine()} \n");
    echo 'There was a problem with your file... please check the errors log ' . PHP_EOL;

}catch (Exception $exception){
    fwrite($filePointer, "File problem: {$exception->getMessage()} on line {$exception->getLine()} \n");
    echo 'There was a problem with your file... please check the errors log ' . PHP_EOL;

} finally {
    echo 'Finally block has being called' .PHP_EOL;
    fclose($filePointer);
}

