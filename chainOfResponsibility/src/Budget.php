<?php

namespace Igor\DesignPattern;

class Budget
{
private float $value;
private float $itemQuantity;

public function getValue(){
    return $this->value;
}
public function setValue($value){
    $this->value = $value;
    return $this;
}

public function getitemQuantity(){
    return $this->itemQuantity;
}
public function setitemQuantity($itemQuantity){
    $this->itemQuantity = $itemQuantity;
    return $this;
}

}









?>