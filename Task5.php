<?php
namespace Tasks\Task5;

use InvalidArgumentException;

class Task5
{
    function main(int $n) : int
    {
        if(!is_int($n))
        {
            throw new InvalidArgumentException('this function only accepts integers. Input was: '.$n);
        } else 
        {
            $prev = 0;
            $curr = 1;
            do
            {
                $curr = $curr+$prev;
                $prev = $curr-$prev;
            } while(strlen($curr)<$n);
            return $curr;
        } 
    }    
}