<?php

namespace Tasks\Task4;

use InvalidArgumentException;

class Task4
{
    public function main(string $input): string
    {
        if (!is_string($input)) {
            throw new InvalidArgumentException('function only accepts string. Input was: '.$input);
        }

        return str_replace(' ', '', ucwords(preg_replace('/[\_\-\s]+/', ' ', $input)));
    }
}