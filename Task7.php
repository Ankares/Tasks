<?php
namespace Tasks\Task7;

use InvalidArgumentException;

class Task7
{
    function main(array $arr, int $position) : array 
    {
        if(!is_int($position) && !is_array($arr)) 
        {
            throw new InvalidArgumentException('function only accepts integers and arrays.');
        }
        else
        {
            $newArr = array();
            for($i=0;$i<count($arr);$i++) 
            {
                if($arr[$i] != $arr[$position])
                {
                    $newArr[] = $arr[$i];
                }
            }
            return $newArr;
        }
    }
}