<?php

function getDivisors($value){
    $divisors = [];
    for ($i = 1; $i <= $value; $i++){
        if ($value % $i == 0){
            $divisors[] = $i;
        }
    }

    return $divisors;
}

function getGcd(...$values){
    $result = $values[0];
    $n = count($values);
    for ($i = 1; $i < $n; $i++){
        $result = gcd($values[$i], $result);
        if($result == 1){
           return 1;
        }
    }
    return $result;
 }

 function gcd($a, $b)
 {
     if ($a == 0){ 
         return $b;
     }
     return gcd($b % $a, $a);
 }