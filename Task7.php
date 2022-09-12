<?php

namespace src;

use InvalidArgumentException;

class Task7
{
    public function main(array $arr, int $position): array
    {
        if (!is_int($position) && !is_array($arr)) {
            throw new InvalidArgumentException('function only accepts integers and arrays.');
        } else {
            $newArr = [];
            for ($i = 0;$i < count($arr);$i++) {
                if ($arr[$i] != $arr[$position]) {
                    $newArr[] = $arr[$i];
                }
            }

            return $newArr;
        }
    }
}
