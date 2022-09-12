<?php

namespace Tasks\Task12;

class MyCalculator
{
    public $num1;
    public $num2;
    public $result;

    public function __construct(int $num1, int $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    public function add(): MyCalculator
    {
        $this->result = $this->num1 + $this->num2;

        return $this;
    }
    public function multiply(): MyCalculator
    {
        $this->result = $this->num1 * $this->num2;

        return $this;
    }
    public function divide(): MyCalculator
    {
        $this->result = $this->num1 / $this->num2;

        return $this;
    }
    public function substract(): MyCalculator
    {
        $this->result = $this->num1 - $this->num2;

        return $this;
    }
    public function addBy(int $number): MyCalculator
    {
        $this->result += $number;

        return $this;
    }
    public function divideBy(int $number): MyCalculator
    {
        $this->result /= $number;

        return $this;
    }
    public function multiplyBy(int $number): MyCalculator
    {
        $this->result *= $number;

        return $this;
    }
    public function substractBy(int $number): MyCalculator
    {
        $this->result -= $number;

        return $this;
    }
}
