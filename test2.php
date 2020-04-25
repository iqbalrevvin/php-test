<?php 
	function CountSmall($string) {
	 return strlen(preg_replace('/[^a-z]+/', '', $string));
	}
	$string = '“TranSISI”';
	$result = CountSmall($string);
	echo $string.' mengandung '.$result.' buah huruf kecil';
?>