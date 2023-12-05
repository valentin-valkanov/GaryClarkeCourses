<?php

use App\ExecutiveSuiteDecorator;
use App\LateCheckoutDecorator;
use App\MembershipDecorator;
use App\Reservation;

require_once 'vendor/autoload.php';

$reservation = new Reservation();
$reservation1 = new ExecutiveSuiteDecorator($reservation);
$reservation2 = new MembershipDecorator($reservation);
$reservation3 = new LateCheckoutDecorator($reservation);

print $reservation1->calculateCost() . PHP_EOL;