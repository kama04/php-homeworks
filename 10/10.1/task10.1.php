<form action="/form.php" method="GET">
    <input type="text" name="phone">
    <input type="submit">
</form>

<?php
if (!empty($_REQUEST['phone'])) {
    //Пишем телефон в куки:
    setcookie('phone', $_REQUEST['phone'], time()+3600, '/');
}
?>