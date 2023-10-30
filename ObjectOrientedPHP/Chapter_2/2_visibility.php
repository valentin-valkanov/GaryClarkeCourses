<?php
require_once 'BaseClass.php';
require_once 'SubClass.php';

$baseObject = new BaseClass();
$subObject = new SubClass();

//echo $subObject->publicProperty . PHP_EOL;
//echo $subObject->getProtectedProperty() . PHP_EOL;
//echo $subObject->getParentProtectedProperty() . PHP_EOL;
//echo $baseObject->getPrivateProperty() . PHP_EOL;

echo $subObject->getParentProtectedProperty();