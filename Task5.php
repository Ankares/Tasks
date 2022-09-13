<?php

namespace src;

use InvalidArgumentException;

class Task5
{
    public function main(int $n): string
    {
        if (!is_int($n) || $n < 1) {
            throw new InvalidArgumentException('this function only accepts positive integers. Input was: '.$n);
        } else {
            $prev = '0';
            $curr = '1';
            do {
                $lenCurr = strlen($curr);
                $lenPrev = strlen($prev);
                $maxLenght = max($lenCurr, $lenPrev);
                $bigCurr = str_pad($curr, $maxLenght, '0', STR_PAD_LEFT);
                $bigPrev = str_pad($prev, $maxLenght, '0', STR_PAD_LEFT);
                $tmpNum = 0;
                $result = '';
                for ($i = $maxLenght - 1;$i >= 0;$i--) {
                    $current = (int)$bigCurr[$i];
                    $previous = (int)$bigPrev[$i];
                    $sum = $current + $previous + $tmpNum;
                    if ($sum > 9) {
                        $tmpNum = 1;
                        $sum %= 10;
                    } else {
                        $tmpNum = 0;
                    }
                    $result = $sum . $result;
                }
                if ($tmpNum > 0) {
                    $result = $tmpNum . $result;
                }
                $tmpVar = $curr;
                $prev = $tmpVar;
                $curr = $result;
            } while (strlen($curr) < $n);

            return $curr;
        }
    }
}
