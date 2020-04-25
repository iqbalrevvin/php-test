<?php
	$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
	$arr_nilai = (explode(" ",$nilai));
	$nilai_tinggi = $arr_nilai;
	$nilai_rendah = $arr_nilai;

	$filter_nilai = array_filter($arr_nilai);
	$average = array_sum($filter_nilai)/count($filter_nilai);
	//Sort Nilai Tertinggi
	rsort($nilai_tinggi);
	//Sort Nilai Terendah
	sort($nilai_rendah);

	// echo $average;

	echo "Nilai = ".$nilai."<br>";
	echo "Nilai Rata-Rata = ".$average."<br>";
	//Nilai Tertinggi
	echo "7 Nilai tertinggi = ";
	for($t = 0; $t < 7; $t++) {
	    echo $nilai_tinggi[$t]." | ";
	}
	echo "<br>";
	//Nilai Terendah
	echo "7 Nilai terendah = ";
	for($i = 0; $i < 7; $i++) {
	    echo $nilai_rendah[$i]." | ";
	}
?>