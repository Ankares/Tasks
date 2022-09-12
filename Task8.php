<?php

namespace src;

use InvalidArgumentException;

class Task8
{
    public function main(string $json): array
    {
        if (!is_string($json)) {
            throw new InvalidArgumentException('function only accepts strings. Input was: '.$json);
        } else {
            $jsonDec = json_decode($json, true, 512);
            array_walk_recursive($jsonDec, function ($k, $v) {
                echo "$v: $k \r\n";
            });

            return $jsonDec;
        }
    }
}
