<?php
declare(strict_types =1);

function sum ( float|int $a, float|int $b):float|int {
    return $a + $b;
}

function sub ( float|int $a, float|int $b):float|int {
    return $a - $b;
} 

function multi ( float|int $a, float|int $b):float|int {
    return $a * $b;
} 

function div ( float|int $a, float|int $b):float|int|string {
    if ($b == 0) {
        return "Деление на ноль!";
    }
    else {
        return $a / $b;
    }
}

// echo sum(5,2)  .PHP_EOL;
// echo sub(5,2) . PHP_EOL;
// echo multi(5,2) . PHP_EOL;
// echo div(5,0) . PHP_EOL;

function mathOperation(int|float $a, int|float $b, $operation){
    switch ($operation) {
        case '+':
            $answer = sum($a,$b);
            break;
        case '-':
            $answer = sub($a,$b);
            break;
        case '*':
            $answer = multi($a,$b);
                break;
        case '/':
            $answer = div($a,$b);
                break;
        default:
            echo "Что-то не так!";
            break;
    }
    return $answer;
}

echo mathOperation(5,2,"/");