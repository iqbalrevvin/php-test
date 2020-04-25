<?php
	error_reporting(0);
	function unigram($string){
		$newstring = implode(", ", preg_split("/[\s]+/", $string));
		return $newstring;
	}

	function bigram($string){
		$string_array = explode(" ",$string);
		$arrs = [];
		$key = 0;
		foreach ($string_array as $val) {
	    	$arrs[$key++ % 2][] = $val;
		}
		foreach($arrs as $arr){
			$first[] = $arr[0];
			$second[] = $arr[1];
			$third[] = $arr[2];
			$fourth[] = $arr[3];
		}
		$first = implode(' ',$first);
		$second = implode(' ',$second);
		$third = implode(' ',$third);
		$output = $first.', '.$second.', '.$third;
		return $output;
	}

	function trigram($string){
		$string_array = explode(" ",$string);
		$arrs = [];
		$key = 0;
		foreach ($string_array as $val) {
	    	$arrs[$key++ % 3][] = $val;
		}
		foreach($arrs as $arr){
			$first[] 	= $arr[0];
			$second[] 	= $arr[1];
		}
		$first = implode(' ',$first);
		$second = implode(' ',$second);
		$output = $first.', '.$second;
		return $output;
	}

	$string = 'Jakarta adalah ibukota negara Republik Indonesia';
	echo "String = ".$string.'<br><hr>';
	echo "unigram = <b>".unigram($string)."</b><br>";
	echo "bigram = <b>".bigram($string)."</b><br>";
	echo "trigram = <b>".trigram($string)."</b><br>";

	?>