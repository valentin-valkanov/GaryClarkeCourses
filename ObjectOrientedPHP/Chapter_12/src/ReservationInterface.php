<?php

namespace App;

interface ReservationInterface
{
    public function calculateCost(): float;
}