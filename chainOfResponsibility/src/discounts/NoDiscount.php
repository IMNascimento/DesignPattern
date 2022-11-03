<?php

namespace Igor\DesignPattern\Discounts;

use Igor\DesignPattern\Budget;

class NoDiscount extends Discounts 
{
    public function __construct(){
        parent::__construct(null);
    }

    public function calculateDiscount(Budget $budget) : float 
    {
        return 0;
    }
}

?>