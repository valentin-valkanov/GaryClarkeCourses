<?php declare(strict_types=1);

namespace App;

class Reservation implements ReservationInterface
{
    private float $cost = 10;

    public function calculateCost(): float
    {
        return $this->cost;
    }
}