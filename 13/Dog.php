<?php
class Dog{
    public $name;
    public $age;
    public $weight;
    public function say(){
        return "Гав";
    }
    public function __construct($name, $age,$weight)
    {
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
        $this->say();
    }
}



?>


