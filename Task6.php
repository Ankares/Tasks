<?php

namespace Tasks\Task6;

use InvalidArgumentException;

class Task6
{
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $day = 'Monday'): int
    {
        if (!is_int($year) && !is_int($lastYear) && !is_int($month) && !is_int($lastMonth) && !is_string($day)) {
            throw new InvalidArgumentException('Incorrect type. Function accepts only integers and strings');
        } else {
            $now = mktime(0, 0, 0, $month, 1, $year);
            $past = mktime(0, 0, 0, $lastMonth, 1, $lastYear);
            $count = 0;
            do {
                if (date('l', $past) == $day) {
                    $count++;
                }
                $past += 86400;
            } while ($past <= $now);

            return $count;
        }
    }
}
