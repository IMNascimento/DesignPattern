<?php

namespace Igor\DesignPattern\Discounts;

use Igor\DesignPattern\Budget;

class MoreThanFiveHundredReais extends Discounts 
{
    public function calculateDiscount(Budget $budget) : float 
    {
        if ($budget->getValue() > 500) {
            return $budget->getValue() * 0.05;
        }
        return $this->nextDiscounts->calculateDiscount($budget);
    }
}

?>