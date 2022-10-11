<?php

function mapped(array $numbers, string $glue, string $symbol):string {
    $result = "";
    $keys = array_keys($numbers);
    for($i=0; $i<count($numbers)-1; $i++){
        $result = $result.$keys[$i];
        $result = $result.' ';
        $result = $result.$symbol;
        $result = $result.' ';
        $result = $result.$numbers[$keys[$i]];
        $result = $result.$glue;
    }
    $result = $result.$keys[count($numbers)-1];
    $result = $result.' ';
    $result = $result.$symbol;
    $result = $result.' ';
    $result = $result.$numbers[$keys[count($numbers)-1]];
    return($result);
}



$result = mapped(numbers: ['x' => 1, 'y' => 2, 'z' => 3, 't' => 7], glue : ', ', symbol : "=");
var_dump($result);
var_dump($result === 'x = 1, y = 2, z = 3, t = 7');