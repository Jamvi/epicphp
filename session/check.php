<?php
if (isset($_POST['name'])){
	$_SESSION['samokat'][] = $_POST['name'];
}
	if(isset($_SESSION['samokat'])){
		foreach ($_SESSION['samokat'] as $key => $value) {
			printf("%s<br/>", $value);
		}
	}