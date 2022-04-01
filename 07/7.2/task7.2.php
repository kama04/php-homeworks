<?php

$filePoints="points.csv";
$points = file($filePoints, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );

foreach ($points as  $value) {
    $sen = explode(';', $value);
    $points1[$sen[0]]=[$sen[1],$sen[2],$sen[3]];
}


function customMultiSort($array, $field, $a) {

   $result = [];
    foreach($array as $k=>$v){
        if($v[$field]==$a){
            $result[$k] = $v;
        }
    }
    return $result;
}

$perfect = customMultiSort($points1,2,5);//Отличники
$good = customMultiSort($points1, 2,4);//Хорошисты
$soso = customMultiSort($points1, 2,3);//Троешники
$foo = customMultiSort($points1, 2,2);//Пересдача

function addCsv($dir,$arr){
    $fp = fopen($dir, 'w');

    foreach ($arr as $k => $item) {
        fputcsv($fp, $item, ';');
    }

    fclose($fp);
}

addCsv("Отличники.csv",$perfect);
addCsv("Хорошисты.csv",$good);
addCsv("Троешники.csv",$soso);
addCsv("Пересдача.csv",$foo);










