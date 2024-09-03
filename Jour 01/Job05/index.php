<?php

function my_is_prime(int $number): bool {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

$result = my_is_prime(14);
var_dump($result);