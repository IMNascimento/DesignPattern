<?php

namespace Igor\DesignPattern\Discounts;

use Igor\DesignPattern\Budget;

class MoreThanFiveItems extends Discounts 
{
    public function calculateDiscount(Budget $budget) : float 
    {
        if ($budget->getitemQuantity() > 5) {
            return $budget->getValue() * 0.1;
        }
        return $this->nextDiscounts->calculateDiscount($budget);
    }
}

?>