<?php

function arrayUnique(array $arr): array
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] === $arr[$i]) {
                unset($arr[$i]);
            }
        }
    }
    return $arr;
}

$arr = [22, 58, 58, 22, 76];
print_r(arrayUnique($arr));
