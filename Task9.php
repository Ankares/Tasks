<?php
namespace Tasks\Task9;

use InvalidArgumentException;

class Task9
{
    function main(array $arr, int $number) : array
    {
        if(!is_array($arr) && !is_int($number))
        {
            throw new InvalidArgumentException('function only accepts arrays and integers.');
        }
        else
        {
            $newArr = array();
            for($i=0;$i<count($arr);$i++)
            {
                if($arr[$i]+$arr[$i+1]+$arr[$i+2] == $number)
                {
                    $newArr[] = $arr[$i].' + '.$arr[$i+1].' + '.$arr[$i+2];
                }
            }
            return $newArr;
        }
    } 
}