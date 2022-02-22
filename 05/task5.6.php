<?php
/*написать функцию которая на вход примниает два аргумента - строки(отрывки из текста) и сравнивает % совпадения. Если строки идентичны - 100%*/
function similaritySymbols(string $str1, string $str2)
{
    $c_sameSymb = 0;
    $max_sameSymb = strlen($str1) > strlen($str2) ? strlen($str1) : strlen($str2);


    for ($i = 0; $i < strlen($str1) && $i < strlen($str2); $i++) {
        if ($str1[$i] === $str2[$i]) {
            $c_sameSymb++;
        }
    }

    return $per = $c_sameSymb / $max_sameSymb * 100;
}


echo similaritySymbols("qwert", "Qwert");
