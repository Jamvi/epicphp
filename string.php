<?php
	$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id asperiores ratione similique est reiciendis ut quam laborum adipisci ipsum aperiam. Nobis architecto fugiat voluptatibus quis perferendis praesentium sed est fugit";
	$explode = explode(' ', $text);
	echo "Total words: ". '<strong>' .count($explode) .'</strong>' .'<br />';
	$totalEven = 0;
		foreach ($explode as $word) {
			$word = trim(str_replace(['.', ',', '\''], [], $word));
				if (empty($word)) {
					continue;
				}
			$wordLength = mb_strlen($word, 'UTF-8');
			if($wordLength%2 === 0) {
				$totalEven++;
			}
		}
	echo "Total words with even letters: ". "<i>" .$totalEven ."</i>"; 