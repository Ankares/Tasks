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
            $res = json_decode($json, true, 512);
            $string = '';
            foreach ($res as $key => $value) {
                if (!is_array($value)) {
                    $string .= "$key: $value" . "\r\n";
                } else {
                    foreach ($value as $k => $v) {
                        $string .= "$k: $v";
                    }
                }
            }

            return $string;
        }
    }
}
