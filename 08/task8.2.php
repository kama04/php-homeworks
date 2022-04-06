<?php

// Заполнить массив из 18 элементов так, что третий (шестой, девятый и тд) элемент имеется значение равное сумме двух предыдущих.

$arr = [];

for($i = 0; $i <= 18; $i++){

    switch ($i){
        case 3:
            $arr[$i]= $arr[2] + $arr [1];
            break;
        case 6:
            $arr[$i]= $arr[4] + $arr [5];
            break;
        case 9:
            $arr[$i]= $arr[7] + $arr [8];
            break;
        case 12:
            $arr[$i]= $arr[10] + $arr [11];
            break;
        case 15:
            $arr[$i]= $arr[13] + $arr [14];
            break;
        case 18:
            $arr[$i]= $arr[16] + $arr [17];
            break;
        default :
            $arr[$i] = rand(1,10);
    }
}
print_r($arr);





