<?php


function recar($arr, $elem) {
    $result = array();

    foreach($arr as $k => $v) {
        if ($v == $elem) $result[$k]=$v;
        else if (is_array($v))
        {
            $ret=recar($v, $elem);
            if(count($ret)) $result[$k]=$ret;
        }
    }
    return $result;
}
$b=[5, 6, 4, 8];
$a = [[1, 2, 3, 4], [5, 6, 4, 8]];
print_r(recar($b,6));
print_r(recar($a, 8));
