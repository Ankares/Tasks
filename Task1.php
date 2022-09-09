<?php

namespace Tasks\Task1;

use InvalidArgumentException;

class Task1
{
    public function main(int $num): string
    {
        if (!is_int($num)) {
            throw new InvalidArgumentException('this function only accepts integers. You tried: ' . $num);
        }

        return ($num > 30) ? 'More than 30' : (($num > 20) ? 'More than 20' : ($num > 10 ? 'More than 10' : 'Equal or less than 10'));
    }
}