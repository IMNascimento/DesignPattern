<?php

namespace Igor\DesignPattern\Impostos;

use Igor\DesignPattern\Budget;


interface Tax{
    public function calculateTax(Budget $budget):float;
}















?>