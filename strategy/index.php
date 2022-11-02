<?php

use Igor\DesignPattern\TaxCalculator;
use Igor\DesignPattern\Budget;
use Igor\DesignPattern\Impostos\Icms;
use Igor\DesignPattern\Impostos\Iss;

require_once 'vendor/autoload.php';

$calculator = new TaxCalculator();

$budget = new Budget();
$budget->setValue(100);

echo $calculator->calculate($budget, new Icms() );










?>