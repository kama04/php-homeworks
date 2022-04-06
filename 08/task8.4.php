<?php


function uniq(array $arr) {
    $result = [];
    foreach ($arr as $value ){
        if(!in_array($value, $result)){
            array_push($result, $value);
        }

    }return $result;
}

$mas = [1,2,3,4,5,5,6,7,3,7];

print_r(uniq($mas));