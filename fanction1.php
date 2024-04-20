<?php

function mostRecent(string $text): void
{

    $arr = explode(" ", $text);
    $result = array_count_values($arr);
    arsort($result);
    echo "Самое часто повторяющиеся слово: " . key($result);
}

$text = readline("Введите текст: ");
mostRecent($text);
