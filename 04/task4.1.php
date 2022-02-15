<?php
/*Написать функция котора принимает три целых числа и возвращает болььшее из них, если числа равны то любое из них*/

function numbers(int $a, int$b, int $c){
    if($a>$b && $a>$c){
        echo "$a большее из чисел".PHP_EOL;
    }else if($b>$c && $b>$a){
        echo "$b большее из чисел".PHP_EOL;
    }else if($c>$b && $c>$a){
        echo "$c большее из чисел".PHP_EOL;
    }else if($a==$b && $a==$c){
        echo "все числа равны $a".PHP_EOL;
    }
}

numbers(4,6,5);
