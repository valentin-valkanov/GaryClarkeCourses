<?php
declare(strict_types=1);

require_once '../../vendor/autoload.php';

$user = new \App\AccountHolder(username: 'garyclarketech', password: 'password');

$serializedUser = serialize($user);

$unserializedUser = unserialize($serializedUser);

dd($unserializedUser);