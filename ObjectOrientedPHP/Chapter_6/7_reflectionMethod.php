<?php

require_once 'vendor/autoload.php';

$adminClass = new ReflectionClass(\App\Admin::class);

$parent = $adminClass->getParentClass();
$parentShortName = $parent->getShortName();
$parentMethods = $parent->getMethods();

$content = "Parent class short name: " . $parentShortName . PHP_EOL . PHP_EOL;
$content .= "Parent class methods: " . PHP_EOL . PHP_EOL;

foreach ($parentMethods as $method){
    $content .= 'Method name: ' . $method->getName() . PHP_EOL;
    $content .= 'Method start line: ' . $method->getStartLine() .PHP_EOL;
    $content .= 'Method end line: ' . $method->getEndLine() . PHP_EOL;
    $content .= 'Method length: ' . $method->getEndLine() - $method->getStartLine() + 1 . PHP_EOL;

    switch ($visibility = ' '){
        case $method->isPublic():
            $content .= 'Method is public' . PHP_EOL;
            break;
        case $method->isProtected():
            $content .= 'Method is protected' . PHP_EOL;
            break;
        case $method->isPrivate():
            $content .= 'Method is private' . PHP_EOL;
            break;
        case $method->isStatic():
            $content .= 'Method is static' . PHP_EOL;
            break;
    }
    $content .= 'Method parameters: ' . PHP_EOL;
    foreach ($method->getParameters() as $parameter){
        $content .= $parameter->getPosition() . ': ';
        $content .= $parameter->getType() . ' ';
        $content .= $parameter->getName() . PHP_EOL;
    }

    $content .= '----------------------------------------------------' . PHP_EOL;

}

$methodText= 'C:\xampp\htdocs\GaryClarkeCourses\ObjectOrientedPHP\Chapter_6\ReflectionMethod.txt';
fwrite(fopen($methodText, 'w'), $content);
