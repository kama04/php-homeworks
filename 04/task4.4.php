<?php
function del($d , $i){
    if($d >= $i && $d % $i==0 ){

        echo "$i". PHP_EOL;


    }

    del($d, ++$i);


}
del(27,1);
