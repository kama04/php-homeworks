<?php

session_start();

$_SESSION['pages'][]=$_SERVER['PHP_SELF'];
if(isset($_POST["name"])){
    $_SESSION["name"]=strip_tags(trim($_POST["name"]));
}
?>

<form action="page3.php"  method="post">
    Фамилия::<br><br>
    <input  type="text"  name="surname"><br><br>
    <input  type="submit"  value="дальше">
</form>
