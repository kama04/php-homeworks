<?php

/*Написать функцию которая принимает на первым аргументом строку, а вторым символ. В случае если искомые символ присуствует в строке то заменить его встроке на такой же но в верхнем регистре*/
function replace(string $str, $char)
{
    return str_replace($char, mb_strtoupper($char), $str);

}
print (replace("Мама мыла раму", "а"));




