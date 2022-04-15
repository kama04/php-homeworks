<?php

session_start();

$_SESSION['pages'][] = $_SERVER['PHP_SELF'];
if (isset($_POST["surname"]) && isset($_POST["name"])&& isset($_POST["age"])) {
    echo ($_SESSION['name']);
    echo($_SESSION['surname']);
    echo "Ваш возраст$_SESSION[age]лет";
}
?>
