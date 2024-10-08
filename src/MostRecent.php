<?php

namespace Egor\Task;

class MostRecent
{

    public static function MostRecent(string $text): string
    {
        $words = array_filter(explode(' ', $text));

        if (empty($words)) {
            return '';
        }

        $wordCounts = array_count_values($words);
        arsort($wordCounts);

        $mostCommonWordCount = reset($wordCounts);
        $mostCommonWords = array_keys($wordCounts, $mostCommonWordCount);

        return implode(' ', $mostCommonWords);
    }
}
