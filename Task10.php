<?php

namespace Tasks\Task10;

use InvalidArgumentException;

class Task10
{
    public function main(int $input): array
    {
        if (!is_int($input)) {
            throw new InvalidArgumentException('function only accepts integers. Input was: '.$input);
        } else {
            $array = [$input];
            do {
                if ($input % 2 == 0) {
                    $input = $input / 2;
                    $array[] = $input;
                } else {
                    $input = $input * 3 + 1;
                    $array[] = $input;
                }
            } while ($input > 1);

            return $array;
        }
    }
}
