<?php

function is_multiple_of_3(int $value): bool {
    return $value % 3 === 0;
}

function is_multiple_of_5(int $value): bool {
    return $value % 5 === 0;
}

function is_multiple_of_3_and_5(int $value): bool {
    return $value % 3 === 0 && $value % 5 === 0;
}

function my_fizz_buzz(int $length): array {
    $array = [];

    for ($i = 0; $i <= $length; $i++) {
        if (is_multiple_of_3_and_5($i)) {
            array_push($array, "FizzBuzz");
        } elseif (is_multiple_of_3($i)) {
            array_push($array, "Fizz");
        } elseif (is_multiple_of_5($i)) {
            array_push($array, "Buzz");
        } else {
            array_push($array, $i);
        }
    }

    return $array;
}

$fizzBuzzResult = my_fizz_buzz(15);
print_r($fizzBuzzResult);