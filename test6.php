<?php
	$arr = [
		['f','g','h','i'],
		['j','k','p','q'],
		['r','s','t','u'],
	];

	function cari($arr, $q){
		$to_string1 = implode("",$arr[0]);
		$to_string2 = implode("",$arr[1]);
		$to_string3 = implode("",$arr[2]);
		$string 	= $to_string1.$to_string2.$to_string3;
		if(strpbrk($string, $q)) {
		  	return 'true';
		} else {
		  	return 'false';
		}
	}

	echo "Pencarian 1, Key = fgh | ".cari($arr, 'fgh')."<br>";
	echo "Pencarian 2, Key = fghp | ".cari($arr, 'fghp')."<br>";
	echo "Pencarian 3, Key = fjrstp | ".cari($arr, 'fjrstp')."<br>";
	
?>