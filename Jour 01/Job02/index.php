<?php

function my_str_lenght(string $str) {
    $i = 0;
    while (isset($str[$i])) {
        $i++;
    }
    return $i;
};

function my_str_reverse(string $string): string {
    $new_string = "";
    $string_lenght = my_str_lenght($string);
    
    for ($i = $string_lenght - 1; $i >= 0; $i--) {
        $new_string .= $string[$i];
    };
    return $new_string;
};

echo my_str_reverse("hello");