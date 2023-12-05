<?php declare(strict_types=1);

namespace App;

class LateCheckoutDecorator extends ReservationDecorator
{

    public function calculateCost(): float
    {
        return $this->reservation->calculateCost() * 1.2;
    }
}