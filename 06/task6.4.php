<?php

function func($arr, $elem)
{
    foreach ($arr as  $value) {
        if ($elem === $value) {
            return $value;
        }

    }

}

function arrs(array $arr, $elem)
{
    $result = array();
    foreach ($arr as $key => $v) {
     if ($v === $elem) {
         $result[$key]=$v;
        }else if (func($arr, $v)) {
            foreach ($v as $k => $value) {
                if ($value === $elem) {
                    $result[$k]=$value;
                }
            }
    }else echo "false";
    return $result;
}
}
$b=[5, 6, 4, 8];
$a = [[1, 2, 3, 4], [5, 6, 4, 7]];
arrs($b,5);
arrs($a, 2);







