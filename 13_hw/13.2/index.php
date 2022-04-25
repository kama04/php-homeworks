<?php

class Figure{
    public $a;
    public $b;
    public function __construct($a,$b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function getPerimetersRectangle(){
        return $this->a + $this->a +$this->b + $this->b;
    }

    public function getPerimetersSquare(){
        return $this->a * 4;
    }
    public function getAreaSquere(){
        return $this->a * $this->a;
    }

    public function getAreaRectangle(){
        return $this->b * $this->a;
    }
}
$figures = [];
$figures[]= new Figure(4,5);
$figures[]= new Figure(5,6);
$figures[]= new Figure(5,5);

foreach ($figures as $figure){
    if($figures[0] == $figures[1]){
        echo $figure -> getAreaSquere().PHP_EOL;
        echo $figure -> getPerimetersSquare().PHP_EOL;
    }else {
        echo $figure -> getAreaRectangle().PHP_EOL;
        echo $figure -> getPerimetersRectangle().PHP_EOL;
    }
}



