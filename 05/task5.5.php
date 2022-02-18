<?php
/*Написать функцию которая на вход получает строку(пароль) и проверяет сложность пароля по шкале Простой, Нормальный, Сложный*/
function checkPass($pass)
{
    $s_letters = "qwertyuiopasdfghjklzxcvbnm";
    $b_letters = "QWERTYUIOPLKJHGFDSAZXCVBNM";
    $num = "0123456789";
    $specialChars = "!@#$%^&*()_-+=\|/.,:;[]{}";
    $is_s = false;
    $is_b = false;
    $is_n = false;
    $is_sp = false;
    for ($i = 0; $i < strlen($pass); $i++) {

        if (!$is_s && strripos($pass[$i], $s_letters) != -1) $is_s = true;
        else if (!$is_b && strripos($pass[$i], $b_letters) != -1) $is_b = true;
        else if (!$is_n && strripos($pass[$i], $num) != -1) $is_n = true;
        else if (!$is_sp && strripos($pass[$i], $specialChars) != -1) $is_sp = true;
    }
    $rating = 0;
    $text = "";
    if ($is_s) $rating++;
    if ($is_b) $rating++;
    if ($is_n) $rating++;
    if ($is_sp) $rating++;
    if ($rating == 0 || strlen($pass) <= 4) $text = "invalide";
    else if (strlen($pass) < 6 && $rating < 3) $text = "Простой";
    else if (strlen($pass) < 6 && $rating >= 3) $text = "Средний";
    else if (strlen($pass) >= 8 && $rating < 3) $text = "Средний";
    else if (strlen($pass) >= 8 && $rating >= 3) $text = "Сложный";
    else if (strlen($pass) >= 6 && $rating == 1) $text = "Простой";
    else if (strlen($pass) >= 6 && $rating > 1 && $rating < 4) $text = "Средний";
    else if (strlen($pass) >= 6 && $rating == 4) $text = "Сложный";

    echo $text;

}

checkPass("123Adавывfgg");
