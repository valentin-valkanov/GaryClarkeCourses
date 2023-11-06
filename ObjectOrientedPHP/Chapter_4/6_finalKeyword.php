<?php

final class PercentageCalculator
{
   public function calculatePercentage(int $part, int $whole): float
    {
        return $part / $whole * 100;
    }
}

$calculator = new PercentageCalculator();
echo $calculator->calculatePercentage(5 , 20);

