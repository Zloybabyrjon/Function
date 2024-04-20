<?php

function caesarFont(string $text, int $key): string
{
    $output = '';
    $EnglishLetters = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N',
        'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
    ];
    $letterСounter = count($EnglishLetters);
    for ($i = 0; $i < strlen($text); $i++) {
        for ($j = 0; $j < $letterСounter; $j++) {
            if (ctype_alpha($text[$i])) {
                $offset = ord($text[$i]);
                $ascii = $offset + $key - $offset;
                $output .= chr($offset + ($ascii % $letterСounter));
                break;
            } else {
                $output .= $text[$i];
                break;
            }
        }
    }
    return $output;
}
$text = readline('Введите текст: ');
$key = 3;
$result = caesarFont($text, $key);
echo $result;
