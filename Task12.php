<?php

namespace src;

use InvalidArgumentException;

class Task12
{
    public $num1;
    public $num2;
    public $result;

    public function __construct(int $num1, int $num2)
    {
        if (!is_int($num1) && !is_int($num2)) {
            throw new InvalidArgumentException('function only accepts integers.');
        } else {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }
    }
    public function __destruct()
    {
        echo $this->result;
    }
    public function add(): Task12
    {
        $this->result = $this->num1 + $this->num2;

        return $this;
    }
    public function multiply(): Task12
    {
        $this->result = $this->num1 * $this->num2;

        return $this;
    }
    public function divide(): Task12
    {
        $this->result = $this->num1 / $this->num2;

        return $this;
    }
    public function substract(): Task12
    {
        $this->result = $this->num1 - $this->num2;

        return $this;
    }
    public function addBy(int $number): Task12
    {
        if (!is_int($number)) {
            throw new InvalidArgumentException('function only accepts integers.');
        } else {
            $this->result += $number;

            return $this;
        }
    }
    public function divideBy(int $number): Task12
    {
        if (!is_int($number)) {
            throw new InvalidArgumentException('function only accepts integers.');
        } else {
            $this->result /= $number;

            return $this;
        }
    }
    public function multiplyBy(int $number): Task12
    {
        if (!is_int($number)) {
            throw new InvalidArgumentException('function only accepts integers.');
        } else {
            $this->result *= $number;

            return $this;
        }
    }
    public function substractBy(int $number): Task12
    {
        if (!is_int($number)) {
            throw new InvalidArgumentException('function only accepts integers.');
        } else {
            $this->result -= $number;

            return $this;
        }
    }
}
