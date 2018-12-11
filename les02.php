<?php
	$name = 'John';
	$num1 = 10;
	$num2 = 234;
	echo ($num1 + $num2);
	
	echo '<br>';
	// Integer
	// Float
	// String
	// Boolean
	// null
	
	$brands = ['3lab', 'Dr.Jart', 'Dr.Sebagh', 'Mimiang', 'Thalgo', 'Valmont'];
	//echo $brands[2];
	echo '<br>';
	$currentModel = [
		'brands' => ['3lab','Dr.Jart', 'Dr.Sebagh', 'Mimiang', 'Thalgo', 'Valmont'],
		'model' => 'Serum',
		'price' => 4200
		];
	echo $currentModel['brands'][0].'<br>';
	echo $currentModel['model'].'<br>';
	echo $currentModel['price'].'<br>';

?>