<?php
echo '<table>';
	for($i = 1; $i <= 9; $i++){
		echo '<tr>';
			for($j = 1; $j <=9; $j++){
				echo '<td>' . $i*$j . '</td>';
			}
		echo '</tr>';
	}
echo '</table>';