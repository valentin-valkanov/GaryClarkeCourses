<?php declare(strict_types=1);

namespace App;

class ExecutiveSuiteDecorator extends ReservationDecorator
{

    public function calculateCost(): float
    {
        return $this->reservation->calculateCost() * 1.5;
    }
}