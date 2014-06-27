<?php
echo '<table>';
	$array = array(TRUE, FALSE,	1, 0, -1, "1", "0", "-1", NULL, array(), "php",	"");
	foreach($array as $up){
		echo '<tr>';
		foreach($array as $left){
		echo '</tr>';
			if($up === $left){
				echo "TRUE";
			}
			else{
				echo "FALSE";
			}
		}
	}
echo '</table>';

var_dump($array);