<?php
	$test = (isset($_GET['name'])) ? $_GET['name'] : 'no_name';
	$message = 'First name: '.$_GET['name'].'<br/>'.'E-mail: '.$_GET['email'].'<br/>'.'Submit: '.$_GET['submit'].'<br/>';
	echo $message;