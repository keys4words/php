<?php
	
	echo 1;
	echo 2;
	
	$int = 10;
	$fl = 10.5;
	$str1 = "3lab";
	$str2 = '3lab';
	$b = false;
	
	$int = 'a1';
	$n = null;
	
	echo "$str1<br>$str2";
	
	$a = 10;
	$A = 20;
	echo $a;
	echo $A;
	
	//problems with functions cause the same name!!!
	//functions below - are equal functions
	/*function a(){
		
	}
	
	function A(){
		
	}*/
	
	//basic operations
	echo $int . $fl;	//concatination of strings
	$concat = $int . $str1;
	echo $concat;
	
	$concat .= '-';	//short operations
	echo $concat;
	
	$sum = $int + $fl;
	$sub = $int - $fl;
	$mult = $int * $fl;
	$div = $int / $fl;
	$mod = 10 % 3;
	$sum += 10;
	
	echo $sum . '<br>';
	echo $sub . '<br>';
	echo $mult . '<br>';
	echo $div . '<br>';
	echo $mod . '<br>';
	
	
?>
