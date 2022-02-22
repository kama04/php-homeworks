<?php


function arrs(array $arr)
{
    foreach ($arr as $v) {
        if (is_array($v)) {
            foreach ($v as $value) {
                echo " $value";
            }
        } else {
            echo " $v";
        }
    }
}

$a = [1, 2, 3, 4, 5];
$b = [[1, 2, 3, 4, 5], [6, 7, 8, 9, 5]];
arrs($a);
arrs($b);