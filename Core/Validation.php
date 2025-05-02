<?php 

class Validation{
    public static function string($value, $min, $max){
        return strlen($value)>= $min && strlen($value)<=$max;
    }
}