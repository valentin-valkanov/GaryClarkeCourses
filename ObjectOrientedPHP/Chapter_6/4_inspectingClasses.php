<?php
require_once 'vendor/autoload.php';

//$exist = class_exists('App\AccountHolder');
$exist = class_exists(\App\AccountHolder::class);


$unknownObject = \App\UserFactory::create(5, 'Gary');
$className = get_class($unknownObject);
$isUser = $unknownObject instanceof \App\AccountHolder;
$admin = new \App\Admin(5, 'Gary');
$parentClass = get_parent_class($admin);
$isSubClass = is_subclass_of($admin, \App\AccountHolder::class);
$claasImplements = class_implements($admin);
$userInstance = is_a($admin, \App\AuthenticatedUserInterface::class);
$classImplements = class_implements(\App\Admin::class);

dd($classImplements);