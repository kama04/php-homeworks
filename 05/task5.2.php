<?php

/*Написать функцию которая принимает первым аргументом строку, вторым символ. С помощью цикла вывести данный симфол столько раз сколько симфолов в строке переданной в первом аргументе*/

function str(string $string, $char)
{
    $i = 0;
    while ($i < strlen($string)) {
        if ($string[$i] === $char) {
            echo $char;
        } else {
            $string[$i] = $char;
            echo $char;
        }
        $i++;
    }
}

str("Helllo", "m");