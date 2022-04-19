<?php

class Cat
{
    public $name;
    public $age;
    public $weight;
    public function say(){
        return "Мяу";
    }
    public function __construct($name, $age,$weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
    }
}

?>