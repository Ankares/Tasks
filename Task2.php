<?php

namespace Tasks\Task2;

use InvalidArgumentException;

class Task2
{
    public function main(string $date): string
    {
        if (!is_string($date)) {
            throw new InvalidArgumentException('this function only accepts strings. Input was: '.$date);
        } else {
            $birth = date_format(date_create($date), 'd-m-Y');
            $now = date('d-m-Y');
            $diff = floor((strtotime($birth) - strtotime($now)) / 86400);
            if ($diff == 0) {
                return 'Today is your birthday, congratulations!';
            } elseif ($diff < 0) {
                return 'Your birthday has already passed ' .-$diff. ' days ago';
            }

            return 'It is ' .$diff. ' days before your birthday';
        }
    }
}