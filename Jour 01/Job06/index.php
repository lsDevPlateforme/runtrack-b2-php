<?php

function my_array_sort(array $arrayToSort, string $order): array {
    $n = count($arrayToSort);

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if (($order === "ASC" && $arrayToSort[$j] > $arrayToSort[$j + 1]) || 
                ($order === "DESC" && $arrayToSort[$j] < $arrayToSort[$j + 1])) {
                $temp = $arrayToSort[$j];
                $arrayToSort[$j] = $arrayToSort[$j + 1];
                $arrayToSort[$j + 1] = $temp;
            }
        }
    }

    return $arrayToSort;
}

$array = [5, 3, 8, 1, 2];

$sortedAsc = my_array_sort($array, "ASC");
print_r($sortedAsc); 

$sortedDesc = my_array_sort($array, "DESC");
print_r($sortedDesc);