<?php
require_once 'vendor/autoload.php';

//$exist = class_exists('App\User');
$exist = class_exists(\App\User::class);


$unknownObject = \App\UserFactory::create(5, 'Gary');
$className = get_class($unknownObject);
$isUser = $unknownObject instanceof \App\User;
$admin = new \App\Admin(5, 'Gary');
$parentClass = get_parent_class($admin);
$isSubClass = is_subclass_of($admin, \App\User::class);
$claasImplements = class_implements($admin);
$userInstance = is_a($admin, \App\AuthenticatedUserInterface::class);

dd($userInstance);