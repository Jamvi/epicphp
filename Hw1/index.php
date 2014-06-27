<?php
	require 'header.php';
	//isset($_GET['page']) ? $_GET['page'] : 'main';

	// if (isset($_GET['page'])){
	// 	$page = $_GET['page'];
	// 	// require "page.php";
	// }
	// else
	// 	$page = 'main';
	// }
	require "$page.php";
	require 'footer.php';