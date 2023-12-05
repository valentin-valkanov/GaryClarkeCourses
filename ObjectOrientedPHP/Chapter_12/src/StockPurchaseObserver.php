<?php declare(strict_types=1);

namespace App;

use JetBrains\PhpStorm\Internal\TentativeType;
use SplSubject;

class StockPurchaseObserver implements \SplObserver
{

    public function update(SplSubject $stock): void
    {
        if($stock->getPrice() < 3) {
            echo "Buying 200 more at {$stock->getPrice()}" . PHP_EOL;

            return;
        }
        if($stock->getPrice() < 5) {
            echo "Buying 100 more at {$stock->getPrice()}" . PHP_EOL;
        }


    }
}