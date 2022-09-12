<?php

namespace src;

use InvalidArgumentException;

class Task3
{
    public function main($number): int
    {
        if (!is_int($number) || $number < 10) {
            throw new InvalidArgumentException('function only accepts integers more than 10. Input was: '.$number);
        } else {
            $amount = 0;
            $string = (string) $number;
            for ($i = 0;$i < strlen($string);$i++) {
                $amount += +$string[$i];
            }
            if ($amount >= 10) {
                return $this->main($amount);
            }

            return $amount;
        }
    }
}
