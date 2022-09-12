<?php

namespace src;

use InvalidArgumentException;

class Task8
{
    public function main(string $json): string
    {
        if (!is_string($json) || !is_object(json_decode($json))) {
            throw new InvalidArgumentException('function only accepts json. Input was: '.$json);
        } else {
            $jsonDec = json_decode($json, true, 512);

            return array_walk_recursive($jsonDec, function ($k, $v) {
                echo "$v: $k\r\n";
            });
        }
    }
}
