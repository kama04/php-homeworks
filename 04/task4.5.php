<?php

$arr = array();
function del($d)
{

    for ($i = 1; $i <= $d; $i++) {

        if ($d % $i == 0) {

             $arr[]=$i;

        }



    }
 return $arr;
}

var_dump(del(16));

