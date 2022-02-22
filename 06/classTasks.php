<?php

//1) перевернуть массив в обратном порядке
//function newReverse ($x){
//    $a = [];
//    for ($i = 0; $i < count($x); $i++){
//        $a[$i] = $x[(count($x) - 1) - $i];
//    }
//    return $a;
//}
//
//$arr = [1, 2, 3, 4, 5];
//
//print_r(newReverse($arr));

//2) array_filter() стандартная пхп функция - отфильтровать >= 3

//$a= [1, 2, 3, 4, 5];
//
//var_dump(array_filter($a, function($k) {
//    return $k >= '2';
//}, ARRAY_FILTER_USE_KEY));

//3) array_reduce() стандартная пхп
//сумма элементов массива


//$a = [0, 1, 2, 3, 4, 5];
//
//function sum($a, $i)
//{
//    $a += $i;
//    return $a;
//}
//
//var_dump(array_reduce($a, "sum"));

