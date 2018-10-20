<?php
	$f = fopen('data.txt', 'r');
	while(!feof($f)){
		$str = fread($f, 2);
		echo $str;
	}
	fclose($f);

?>