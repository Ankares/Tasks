<?php
namespace Tasks\Task8;

use InvalidArgumentException;

class Task8
{
    function main(string $json)
    {
        if(!is_string($json))
        {
            throw new InvalidArgumentException('function only accepts strings. Input was: '.$json);
        }
        else
        {
            $res = json_decode($json, true, 512);
            foreach($res as $key => $value)
            {
                if(is_array($value))
                {
                    foreach($value as $key => $value){
                        $key. ': ' .$value;
                    }
                }
                echo "$key : $value" . "\r\n";
            }
        } 
    }
}