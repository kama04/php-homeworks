<?php

	if(!empty($_COOKIE['phone']))
		$phone = $_COOKIE['phone'];
	else
		$phone = '';
?>

<form action="" method="GET">
	<input type="text" name="name">
	<input type="text" name="surname">

	<input type="text" name="phone" value="<?php echo $phone ?>">

	<input type="submit">
</form>