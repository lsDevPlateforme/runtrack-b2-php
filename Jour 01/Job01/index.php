<?php

function my_str_lenght(string $str) {
    $i = 0;
            while(isset($str[$i])) {
        $i++;
        }
    return $i;
}

function my_str_search(string $haystack, string $needle): int {
        $haystack_lenght = my_str_lenght($haystack);
            $count = 0;
        for ($i = 0; $i != $haystack_lenght; $i++) {
                if ($haystack[$i] == $needle){
                    $count++;
                }
        }
    return $count;
}

echo(my_str_search('La plateforme','e'));

