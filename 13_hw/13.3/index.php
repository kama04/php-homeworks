<?php

class Calc {
    public $a;
    public $b;
    public $operation;

    public function __construct($a,$operation,$b)
    {
        $this->a = $a;
        $this->b = $b;
        $this->operation = $operation;

    }

    public function calcMethod() {
        switch ($this->operation) {
            case '+':
                $result = $this->a + $this->b;
                break;
            case '-':
                $result = $this->a - $this->b;
                break;
            case '*':
                $result = $this->a * $this->b;
                break;
            case '/':
                $result = $this->a / $this->b;
            default:
                $result = "Error";
                break;
        }
        return $result;
    }
    public function numberModule(){
        return abs($this->a);
    }

    public function restOfDivision(){
        return $this->a % $this->b;
    }
}

$calculator = new Calc(-5,'+',3);
echo $calculator->calcMethod().PHP_EOL;
echo $calculator -> numberModule().PHP_EOL;
echo $calculator -> restOfDivision().PHP_EOL;