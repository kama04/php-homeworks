<?php


function recar($arr, $elem) {
    $result = array();

    foreach($arr as $key => $v) {
        if ($v == $elem) $result[$key]=$v;
        else if (is_array($v))
        {
            $r=recar($v, $elem);
            if(count($r)) $result[$key]=$r;
        }
    }
    return $result;
}
$b=[5, 6, 4, 8];
$a = [[1, 2, 3, 4], [5, 6, 4, 8]];
print_r(recar($b,6));
print_r(recar($a, 8));
