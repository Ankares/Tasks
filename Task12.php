<?php

namespace src;

class Task12
{
    public $num1;
    public $num2;
    public $result;

    public function __construct(int $num1, int $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
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
        $this->result += $number;

        return $this;
    }
    public function divideBy(int $number): Task12
    {
        $this->result /= $number;

        return $this;
    }
    public function multiplyBy(int $number): Task12
    {
        $this->result *= $number;

        return $this;
    }
    public function substractBy(int $number): Task12
    {
        $this->result -= $number;

        return $this;
    }
}
