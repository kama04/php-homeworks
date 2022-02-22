<?php

$point = [
    'math' => 9,
    'english' => 10,
    'biology' => 11,
    'chemistry' => 12,
    'art' => 7,
    'history' => 7
];

arsort($point);

foreach ($point as $key => $val) {
    if($val>7){
        echo "$key = $val\n";
    }
}

$arrSeatsCinema = [
    [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]];

array_multisort($arrSeatsCinema[0], SORT_NUMERIC, SORT_DESC,
    $arrSeatsCinema[1], SORT_NUMERIC, SORT_DESC,
    $arrSeatsCinema[2], SORT_NUMERIC, SORT_DESC,
    $arrSeatsCinema[3], SORT_NUMERIC, SORT_DESC,
    $arrSeatsCinema[4], SORT_NUMERIC, SORT_DESC,
    $arrSeatsCinema[5], SORT_NUMERIC, SORT_DESC);

print_r($arrSeatsCinema);

$arrFilms = ['Звёздные войны. Эпизод I: Скрытая угроза',
    'Звёздные войны. Эпизод II: Атака клонов ',
    'Звёздные войны: Клонические войны',
    'Звёздные войны. Эпизод III: Месть ситхов',
    'Звёздные войны: Войны клонов',
    'Звёздные войны: Повстанцы',
    'Хан Соло. Звёздные войны: Истории',
    'Изгой-один. Звёздные войны: Истории',
    'Звёздные войны. Эпизод IV: Новая надежда',
    'Звёздные войны. Эпизод V: Империя наносит ответный удар',
    'Звёздные войны. Эпизод VI: Возвращение джедая',
    'Звёздные войны. Мандалорец',
    'Звёздные войны. Эпизод VII: Пробуждение силы',
    'Звёздные войны. Эпизод VIII: Последние джедаи',
    'Звёздные войны. Эпизод IX: Скайуокер. Восход'];

shuffle($arrFilms);
foreach ($arrFilms as $arrFilms) {
    echo "$arrFilms". PHP_EOL;
}