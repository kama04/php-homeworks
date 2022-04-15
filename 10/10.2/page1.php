<?php

session_start();

$_SESSION['pages'][]=$_SERVER['PHP_SELF'];
?>

<form action="page2.php"  method="post">
    Имя:<br><br>
    <input  type="text"  name="name"><br><br>
    <input  type="submit"  value="дальше">
</form>
