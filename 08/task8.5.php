<?php

function splitArr(array $arr, int $a){
    $res = [];
    for($i=0; $i < ceil(count($arr)/$a); $i++ ){
        $res[$i] = array_slice($arr, ($i*$a), $a) ;
    }return $res;
}
$mass = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r(splitArr($mass, 4));