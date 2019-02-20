<?php
	function ShowFileName()
	{
		print __FILE__."<br>";
	}

	function ShowArray1()
	{
		$a = [56,5,65,8,78,1,358];
		for ($i=0; $i < count($a); $i++) { 
			print "$a[$i]";
		}
	}

	function ShowArray2()
	{
		$a = 
		[
			'first' => '3lab',
			'second' => 'Dr.jart',
			'third' => 'Valmont'
		];
		foreach ($a as $key => $value) {
			print "$value ";
		}
	}

	function ShowArray3()
	{
		$a = [3, 45, 1, 65, 6574];
		$i = 0;
		while ($i < count($a)) {
			print "$a[$i] ";
			$i++;
		}
	}

	function ShowArray4()
	{
		$a = [3, 45, 1, 65, 6574];
		$i = 0;
		do
		{
			print "$a[$i] ";
			$i++;
		}
		while ($i < count($a));
	}

	function ShowArray5()
	{
		$cars = array
		(
			array("Мерседес",2017,"черный"),
				array("БМВ",2018,"белый"),
				array("Ауди",2017,"красный")  
		);
		?>
		<table border="1" cellpadding="4" cellspacing="0" background-color: rgb(187, 224, 227); style="background-color: rgb(187, 224, 227);">
		<tbody>
			<?php
				foreach ($cars as $massiv) {
					# code...
					print "<tr>";
					foreach ($massiv as $value) {
						# code...
						print "<td>$value</td>";
					}
					print "</tr>";
				}
			?>
		</tbody> 
	</table>
	<?php
	}

	function ShowArray6()
	{
		$a = array
		(
		"Иван" => array("Фамилия"=>"Иванов", "Возраст"=>"34", "Должность"=>"инженер"),
		"Петр" => array("Фамилия"=>"Петров", "Возраст"=>"29", "Должность"=>"вебмастер"),
		"Сидор" => array("Фамилия"=>"Сидоров", "Возраст"=>"37", "Должность"=>"программист")
		);
print <<<END
<table border="1" cellpadding="4" cellspacing="0" background-color: rgb(187, 224, 227);
style=" background-color: rgb(187, 224, 227);">
<tbody>
<tr>
<td>{$a["Иван"]["Фамилия"]}</td>
<td>{$a["Иван"]["Возраст"]}</td>
<td>{$a["Иван"]["Должность"]}</td>
</tr>
<tr>
<td>{$a["Петр"]["Фамилия"]}</td>
<td>{$a["Петр"]["Возраст"]}</td>
<td>{$a["Петр"]["Должность"]}</td>
</tr>
<tr>
<td>{$a["Сидор"]["Фамилия"]}</td>
<td>{$a["Сидор"]["Возраст"]}</td>
<td>{$a["Сидор"]["Должность"]}</td>
</tr>

</tbody>
</table>
END;

	}
	?>





?>