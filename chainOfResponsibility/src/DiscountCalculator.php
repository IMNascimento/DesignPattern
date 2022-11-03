<?php

namespace Igor\DesignPattern;

use Igor\DesignPattern\Discounts\MoreThanFiveItems;
use Igor\DesignPattern\Discounts\MoreThanFiveHundredReais;
use Igor\DesignPattern\Discounts\NoDiscount;
use Igor\DesignPattern\Discounts\Discounts;

class DiscountCalculator
{
    public function calculateDiscounts(Budget $budget) : float 
    {
        $discountChain = new MoreThanFiveItems(
            new MoreThanFiveHundredReais(
                new NoDiscount()
            )
        );
        return $discountChain->calculateDiscount($budget);
    }
}

