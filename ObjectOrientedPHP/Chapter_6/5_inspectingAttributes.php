<?php
require_once 'vendor/autoload.php';

$user = new \App\AccountHolder(5, 'Gary');

$classMethods = get_class_methods($user);
$methodExists = method_exists(\App\AccountHolder::class, 'setPassword');
$isCallable = is_callable([$user, 'getId']);
$props = get_class_vars(\App\AccountHolder::class);
$objectVars = get_object_vars($user);

dd($methodExists);