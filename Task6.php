<?php

namespace src;

use InvalidArgumentException;

class Task6
{
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        if (!is_int($year) || !is_int($lastYear) || !is_int($month) || !is_int($lastMonth) || !is_string($day) || $year <= 0 || $lastYear <= 0 || $month <= 0 || $lastMonth <= 0 || $month > 12 || $lastMonth > 12) {
            throw new InvalidArgumentException('Incorrect type. Function accepts only positive integers and strings');
        } else {
            $past = mktime(0, 0, 0, $month, 1, $year);
            $now = mktime(0, 0, 0, $lastMonth, 1, $lastYear);
            $count = 0;
            do {
                if (date('d', $past) == 1 && date('l', $past) == $day) {
                    $count++;
                }
                $past += 86400;
            } while ($past <= $now);

            return $count;
        }
    }
}
