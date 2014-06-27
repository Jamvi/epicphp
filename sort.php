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
	$count=ceil(count($array)/2);
	echo "<h1>Count of pages: $count\n</h1>";
	echo "<br/>";
	$link = (isset($_GET['page'])) ? $_GET['page'] : 'no_page';
	echo "<i>Страница № $link</i>";
	echo"<br/>";

	$xz=array_slice($array, $link*2-2, 2);

	var_dump($xz);
	echo "<br/>";
	for($i=1; $i <= $count; $i++){
		echo "<a href='?page=$i'> $i </a>";
	}