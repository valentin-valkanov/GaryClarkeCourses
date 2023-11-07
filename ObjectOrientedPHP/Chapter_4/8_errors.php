<?php
require_once 'JasonFileReader.php';

try {

    $reader = new JasonFileReader();
    $data = $reader->readFileAsAssociativeArray('inventory.json');

    $div = 100 / 0;

}catch(TypeError|ArgumentCountError $error){

    echo 'Argument or type Error' . $error->getMessage() . PHP_EOL;

}catch(Error $error){

    echo 'Error' . $error->getMessage() . PHP_EOL;
}