<?php
	$array=[
			[
				'name' => 'Egor',
				'sname' => 'Tarakanov',
				'city' => 'Saint-P',
				'vk' => '210147',
				'email' => 'egortarakanov@gmail.com',
			],
			[
				'name' => 'Kirill',
				'sname' => 'Zhuykov',
				'city' => 'Pskov',
				'vk' => '000000',
				'email' => '123@gmail.com',
			],
			[
				'name' => 'Jffs',
				'sname' => 'Ofjse',
				'city' => 'Kfjfe',
				'vk' => '111232',
				'email' => 'grdrh@gmail.com',
			],
			[
				'name' => 'Opgd',
				'sname' => 'Ofkfse',
				'city' => 'Mnfje',
				'vk' => '002233',
				'email' => 'ffrgt45@gmail.com',
			],
			[
				'name' => 'Cvsrh',
				'sname' => 'Jksoe',
				'city' => 'Pokes',
				'vk' => '096534',
				'email' => 'ffyjetyuhddr@gmail.com',
			],
	];
	// var_dump($array);
	// foreach ($array as $key => $value) {
	// 	$array[$key]['name'] = $value['sname'];
	// 	$array[$key]['sname'] = $value['name'];
	// }
	// shuffle($array);
$odd=[];
$even=[];
	foreach ($array as $key => $value) {
		if($key %2){
			echo "TRUE $key";
			$even[]=$value;
		}
		else{
			echo "FALSE $key";
			$odd[]=$value;
		}
	}
echo '<i>';
var_dump($odd);
echo '</i>';
echo '<br/>';
var_dump($even);