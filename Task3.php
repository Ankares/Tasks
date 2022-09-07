<?php
namespace Tasks\Task3;

use InvalidArgumentException;

class Task3
{
    function main(int $number) : int
    {
        if(!is_int($number))
        {
            throw new InvalidArgumentException('function only accepts integers. Input was: '.$number);
        }
        else 
        {
            $amount = 0;
            $string = (string) $number;
            for ($i=0;$i<strlen($string);$i++)
            {
                $amount += +$string[$i];
            }  
            if ($amount >= 10) 
            {
                return $this->main($amount);
            }
            return $amount;
        }
    }
}
