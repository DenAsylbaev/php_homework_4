<?php

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$parityCheck = function($num) {
    if ($num & 1) {
        return "Нечетное";
    } else {
        return "Четное";
    }
};

print_r(array_map($parityCheck, $arr));