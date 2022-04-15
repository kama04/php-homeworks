<?php

session_start();

$_SESSION['pages'][] = $_SERVER['PHP_SELF'];
if (isset($_POST["surname"])) {
    $_SESSION["surname"] = strip_tags(trim($_POST["surname"]));
}
?>

<form action="page4.php" method="post">
    Возраст:<br><br>
    <input type="text" name="age"><br><br>
    <input type="submit" value="дальше">
</form>
