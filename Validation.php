<?php 

class Validation{
    public function string($value, $min, $max){
        return strlen($value)>= $min && strlen($value)<=$max;
    }
}