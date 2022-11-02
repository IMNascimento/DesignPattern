<?php

namespace Igor\DesignPattern;

class Budget
{
private float $value;

public function getValue(){
    return $this->value;
}
public function setValue($value){
    $this->value = $value;
    return $this;
}

}









?>