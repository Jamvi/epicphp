<?php
if ((!isset($_POST['name'])) && (!isset($_POST['password']))): ?>
<form action="" method="post">
<p>
	<label for="name-field"><strong>Имя:</strong> </label>
	<input type="text" name='name' id='name-field'>
</p>
<p>
	<label for="password-field"><strong>Пароль:</strong> </label>
	<input type="password" name='password' id='password-field'>
</p>
<p>
	<input type="submit" value="Подтвердить">
</p>
<?php
	else:
		setcookie("enter", "test" ,time()+100);
		header('Location: http://localhost/epicphp/cookie/hello.php');
endif;
?>