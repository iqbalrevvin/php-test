<?php
	function encrypt($input){
		$input = $_POST["input"];
	  	$a;
      	$b;
      	$c;
      	$d;
      	$i;
      	$b=0;
      	$z = '';
      	$c="";
      	$z=$input;
      	$a=strlen($z); 
      	for ($i=1; $i<=$a;$i++){
	        $d=substr($input,$b,1);
	        switch ($d){
		        case "A": $d="P";
		        break;
		        case "B": $d="Q";
		        break;
		        case "C": $d="R";
		        break;
		        case "D": $d="E";
		        break;
		        case "E": $d="T";
		        break;
		        case "F": $d="D";
		        break;
		        case "G": $d="V";
		        break;
		        case "H": $d="K";
	          	break;
	          	case "I": $d="";
	          	break;
	          	case "J": $d="Y";
	          	break;
	          	case "K": $d="G";
	          	break;
	          	case "L": $d="A";
	          	break;
	          	case "M": $d="B";
	          	break;
	          	case "N": $d="S";
	          	break;
	          	case "O": $d="D";
	          	break;
	          	case "P": $d="E";
	          	break;
	          	case "Q": $d="K";
	          	break;
	          	case "R": $d="G";
	          	break;
	          	case "S": $d="H";
	          	break;
	          	case "T": $d="I";
	          	break;
	          	case "U": $d="J";
	          	break;
	          	case "V": $d="K";
	          	break;
	          	case "W": $d="L";
	          	break;
	          	case "X": $d="M";
	          	break;
	          	case "Y": $d="N";
	          	break;
	          	case "Z": $d="O";
	          	break;
	          	case "a": $d="p";
	          	break;
	          	case "b": $d="q";
	          	break;
	          	case "c": $d="r";
	          	break;
	          	case "d": $d="s";
	          	break;
	          	case "e": $d="t";
	          	break;
	          	case "f": $d="u";
	          	break;
	          	case "g": $d="v";
	          	break;
	          	case "h": $d="w";
	          	break;
	          	case "i": $d="x";
	          	break;
	          	case "j": $d="y";
	          	break;
	          	case "k": $d="z";
	          	break;
	          	case "l": $d="a";
	          	break;
	          	case "m": $d="b";
	          	break;
	          	case "n": $d="c";
	          	break;
	          	case "o": $d="d";
		        break;
		        case "p": $d="e";
	          	break;
	          	case "q": $d="f";
	          	break;
	          	case "r": $d="g";
	          	break;
	          	case "s": $d="h";
	          	break;
	          	case "t": $d="i";
	          	break;
	          	case "u": $d="j";
	          	break;
	          	case "v": $d="k";
	          	break;
	          	case "w": $d="l";
	          	break;
	          	case "x": $d="m";
	          	break;
	          	case "y": $d="n";
	          	break;
	          	case"z" : $d="o";
	          	break;
	          	case" " : $d="";
	          	break;
        }
        $b = (int)$b+1;
        echo $d;
	}
}
?>

<form action="" method="post">
 <textarea name="input" cols="30" rows="8"></textarea>
 <input type="submit" value="Encrypt!" />
</form>

<?php 
	if(isset($_POST['input'])){
		echo encrypt($_POST['input']);
	}
?>