<?php
	function table_black_white($data1, $data2){
		echo('<table border="1">');
		for ($j = 0; $j < 8; $j++)
		{
		    echo('<tr>');
		    for ($i = 0; $i < 8; $i++)
		    {	
		    	foreach($data2 as $d){
			    	$black[] = $d;
			    }
		    	if(array_search($data1[$j][$i], $black)){
		    		echo('<td bgcolor="#000000" style="color:white">' . $data1[$j][$i] . '</td>');
		    	}else{
		    		echo('<td>' . $data1[$j][$i] . '</td>');
		    	}
		    }
		    echo('</tr>');
		}
		echo('</table>');
	}
$data1 = [range(1,8),range(9,16),range(17,24),range(25,32),range(33,40),range(41,48),range(49,56),range(57,64)];
$data2 = [0,1,2,5,7,10,11,13,14,17,19,22,23,25,26,29,31,34,35,37,38,41,43,46,47,49,50,53,55,58,59,61,62];

table_black_white($data1, $data2)


?>