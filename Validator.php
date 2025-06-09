<?php

class Validator
{
    
    public static function validate($data, $min,$max)
    {
         return is_string($data) && strlen($data) >= $min && strlen($data) <= $max;
    }
}