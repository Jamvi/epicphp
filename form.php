<?php
	$cookie_message = '';
	if (isset($_COOKIE['enter'])) { 
		$cookie_message = 'Hello';
} else { 
	if(isset($_POST['name'])){
	setcookie('enter', $_POST('name'), time() + 3600); 
	echo 'finished';
}
	require 'header.php'
?>
<!DOCTYPE html>
<form action="" method="post">
	<label for="name-field">Имя</label>
	<input type="text" name="name" value="" id="name-field"><br/>
	<label for="password-field">Пароль</label>
	<input type="password" name="password" value="" id="password-field"><br/>
	<input type="submit" name="submit" value="Подтвердить"><br/>
</form>