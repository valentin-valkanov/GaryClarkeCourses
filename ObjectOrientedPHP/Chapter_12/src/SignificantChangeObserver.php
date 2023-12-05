<?php declare(strict_types=1);

namespace App;

use JetBrains\PhpStorm\Internal\TentativeType;
use SplSubject;

class SignificantChangeObserver implements \SplObserver
{
    // Create update method
    // If absolute value of stock change > 5 notify stock owners
    public function update(SplSubject $stock): void
    {
        if (abs($stock->getChange()) > 5) {
            echo "Notify stockholder of new price by preferred notification means \n";
        }
    }
}