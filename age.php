<?php 
function age23($age){
		if($age < 20){
			echo "Все впереди";
		}
		elseif($age >= 20 && $age <= 30){
			echo "Самое время взяться за ум";
		}
		else{
			echo "У вас есть чему поучиться";
		}	
}

for($i = 1; $i <= 100; $i++){
	age23($i);
	echo '<br/>';
}