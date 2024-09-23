<?php

namespace Egor\Task;

class ArrayUnique
{
    public static function ArrayUnique(array $arr): array
    {
        return array_values(array_unique($arr));
    }
}
