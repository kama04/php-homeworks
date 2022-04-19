<?php

require_once 'Dog.php';

require_once 'Cat.php';

$cat1 = new Cat('Josi',5,1);

$cat2 = new Cat('Tom',15,5);

$dog1 = new Dog('Asua',2,5);

$dog2 = new Dog('Fili',7,15);

echo $dog1->say();

echo $cat2 ->say();