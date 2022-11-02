<?php

namespace Igor\DesignPattern;

use Igor\DesignPattern\Impostos\Tax;

class TaxCalculator 
{
    public function calculate(Budget $budget, Tax $tax) : float 
    {
        return $tax->calculateTax($budget);
        
    }
}















?>