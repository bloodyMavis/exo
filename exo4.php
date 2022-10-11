<?php

function fizzBuzz(int $num): string | int {
    if($num > 100){
        return 'error';
    }
    $div3 = $num%3;
    $div5 = $num%5;
    if($div3 === 0 && $div5 ===0){
        return 'FizzBuzz';
    }
    else if($div3 === 0){
        return 'Fizz';
    }
    else if($div5 === 0){
        return 'Buzz';
    }
    else{
        return $num;
    }
}

$result = fizzBuzz(9);
var_dump($result === 'Fizz');

$result = fizzBuzz(25);
var_dump($result === 'Buzz');

$result = fizzBuzz(15);
var_dump($result === 'FizzBuzz');

$result = fizzBuzz(1);
var_dump($result === 1);
