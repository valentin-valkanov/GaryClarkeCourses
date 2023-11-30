<?php
require_once 'vendor/autoload.php';

use Symfony\Component\VarDumper\VarDumper;

//$data = [
//    "id" => 5,
//    "name" => 'Gary'
//];

$gary = new \App\AccountHolder(5, 'Gary');

VarDumper::dump($gary);