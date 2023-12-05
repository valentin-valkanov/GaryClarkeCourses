<?php

use App\SignificantChangeObserver;
use App\Stock;
use App\StockPurchaseObserver;

require_once 'vendor/autoload.php';

$stock = new Stock();
$stock->attach(new SignificantChangeObserver());
$stock->attach(new StockPurchaseObserver());

$stock->getLatestPrice();
