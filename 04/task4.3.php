<?php

function number($num)
{
    for ($i = 0; $i <= $num; $i++) {

        if ($num < 2) {
            return false;
        }

        if ($num > $i && $i > 1 && $num % $i == 0) {
            return false;
        }
    }

    return true;
}

var_dump(1, number(1));
var_dump(2, number(2));
var_dump(0, number(0));
var_dump(33, number(33));
var_dump(73, number(73));
