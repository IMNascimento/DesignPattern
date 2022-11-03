<?php

use Igor\DesignPattern\DiscountCalculator;
use Igor\DesignPattern\Budget;


require_once 'vendor/autoload.php';

$calculator = new DiscountCalculator();

$budget = new Budget();
$budget->setvalue(600);
$budget->setitemQuantity(6);
echo $calculator->calculateDiscounts($budget);










?>