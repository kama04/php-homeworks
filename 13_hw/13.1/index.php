<?php

class City {
    public $name;
    public $population;
    public $yearOfCreation;
    public function __construct($name, $population,$yearOfCreation)
    {
        $this->name = $name;
        $this->population = $population;
        $this->yearOfCreation = $yearOfCreation;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPopulation()
    {
        return $this->population;
    }
}
$cities =[];
$cities[] = new City('Kharkiv', 1421125, 1654);
$cities[] = new City('Kiev', 2962180, 1494);
$cities[]= new City('Dnepro', 1177897, 1776);
$cities[] = new City('Lviv', 724314, 1256);
$cities[] = new City('Odessa', 101144, 1794);
$cities[] = new City('Poltava', 288324, 899);
$cities[] = new City('Sumy', 259660, 1650);

foreach ($cities as $city){
echo $city -> getName().PHP_EOL;
echo $city ->getPopulation().PHP_EOL;
}

