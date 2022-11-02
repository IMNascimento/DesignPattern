<?php
namespace Igor\DesignPattern\Impostos;

use Igor\DesignPattern\Budget;

class Iss implements Tax
{
    public function calculateTax(Budget $budget): float 
    {
        return $budget->getValue() * 0.06;
    }
}













?>