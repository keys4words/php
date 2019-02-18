<?php
	function ShowArray1()
	{
		$a = array("Ivanov", "Petrov", "Sidorov");
		print $a[1];
	}

	function ShowArray2()
	{
		$a = 
		[
			"one" => "first",
			"two" => "second",
			"three" => "third"
		];
		print($a["two"]);
	}

	function ShowArray3()
	{
		$cars = array
		(
			array("Mercedes", 2017, "black"),
			array("BMW", 2010, "silver"),
			array("Porsche", 2015, "blue")
		);
print <<<END
<table border="1" cellpadding="4" cellspacing="0" background-color: rgb(187, 224, 227);
style=" background-color: rgb(187, 224, 227);">
<tbody>
<tr>
<td>{$cars[0][0]}</td>
<td>{$cars[0][1]}</td>
<td>{$cars[0][2]}</td>
</tr>
<tr>
<td>{$cars[1][0]}</td>
<td>{$cars[1][1]}</td>
<td>{$cars[1][2]}</td>
</tr>
<tr>
<td>{$cars[2][0]}</td>
<td>{$cars[2][1]}</td>
<td>{$cars[2][2]}</td>
</tr>
</tbody>
</table>
END;
	
	}

	function ShowArray4()
	{
		$a = array
		(
			"Ivan" => array("First_name"=>"Ivanov", "Age"=>"34", "Position"=>"engineer"),
			"Peter" => array("First_name"=>"Petrov", "Age"=>"44", "Position"=>"webmaster"),
			"Sidor" => array("First_name"=>"Sidorov", "Age"=>"56", "Position"=>"programmer")
		);
print <<<END
<table border="1" cellpadding="4" cellspacing="0" background-color: rgb(187, 224, 227);
style=" background-color: rgb(187, 224, 227);">
<tbody>
<tr>
<td>{$a["Ivan"]["First_name"]}</td>
<td>{$a["Ivan"]["Age"]}</td>
<td>{$a["Ivan"]["Position"]}</td>
</tr>
<tr>
<td>{$a["Peter"]["First_name"]}</td>
<td>{$a["Peter"]["Age"]}</td>
<td>{$a["Peter"]["Position"]}</td>
</tr>
<tr>
<td>{$a["Sidor"]["First_name"]}</td>
<td>{$a["Sidor"]["Age"]}</td>
<td>{$a["Sidor"]["Position"]}</td>
</tr>

</tbody>
</table>
END;
	}
	
?>