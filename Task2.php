<?php

namespace src;

use InvalidArgumentException;

class Task2
{
    public function main(string $date): int
    {
        if (!is_string($date)) {
            throw new InvalidArgumentException('this function only accepts strings. Input was: '.$date);
        } else {
            $birthDate = date_create($date);
            if (preg_match('/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-([0-9]{4})$/', $date) == false) {
                throw new InvalidArgumentException('this function only accepts strings with correct date. Input was: '.$date);
            } else {
                $birth = date_format($birthDate, 'd-m-Y');
                $now = date('d-m-Y');
                $diff = floor((strtotime($birth) - strtotime($now)) / 86400);
                if ($diff == 0) {
                    return 0;
                } elseif ($diff < 0) {
                    return 365 + $diff;
                }

                return $diff;
            }
        }
    }
}
