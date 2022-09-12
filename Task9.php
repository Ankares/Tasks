<?php

namespace src;

use InvalidArgumentException;

class Task9
{
    public function main(array $arr, int $number): array
    {
        if (!is_array($arr) || !is_int($number) || $number < 1 || count($arr) < 3 || min($arr) < 0) {
            throw new InvalidArgumentException('array should have at least 3 value and number should be positive.');
        } else {
            $newArr = [];
            for ($i = 0;$i < count($arr);$i++) {
                if (!empty($arr[$i + 1]) && !empty($arr[$i + 2]) && $arr[$i] + $arr[$i + 1] + $arr[$i + 2] == $number) {
                    $newArr[] = $arr[$i].' + '.$arr[$i + 1].' + '.$arr[$i + 2].' = '.$number;
                }
            }

            return $newArr;
        }
    }
}
