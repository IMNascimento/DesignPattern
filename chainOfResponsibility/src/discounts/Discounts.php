<?php

namespace Igor\DesignPattern\Discounts;

use Igor\DesignPattern\Budget;

abstract class Discounts 
{
    protected ?Discounts $nextDiscounts;

    public function __construct(?Discounts $nextDiscounts){
        $this->nextDiscounts = $nextDiscounts;
    }


   abstract public function calculateDiscount(Budget $budget) : float ;
    
}

?>