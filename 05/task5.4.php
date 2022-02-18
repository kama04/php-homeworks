<?php
/*Написать функцию котоая принимает аргументом строку и возвращает ее перевернутый вариант(пример, "Test" -> "tseT") использовать стандартные функции php работы со строкаими нельзя*/
function reverseWord($str)
{
    $i = 0;

    $result = '';

    while ($i < strlen($str)) {
        $currentChar = $str[$i];
        $result = "{$currentChar}{$result}";
        $i++;
    }

    return $result;
}


print (reverseWord('Kamilla'));

