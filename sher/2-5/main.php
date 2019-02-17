<?php
	function TypeList()
	{
		?>
		В зависимости от контекста РНР может присвоить следующие типы данных:
		<br>
		<ul>
			<li>boolean</li>
			<li>integer</li>
			<li>float</li>
			<li>string</li>
			<li>null</li>
			<li>array</li>
			<li>object</li>
			<li>resource</li>
		</ul>
		<?php
	}

	function ShowFound($found)
	{
		if ($found) {
			print("Found");
		}
		else
		{
			print("Not found");
		}
	}

	function ShowInt()
	{
		$int_10 = 34;
		$int_8 = 034;
		$int_2 = 0b1100;
		$int_16 = 0x1C;

	/*	print '<br>$int_10 = '.$int_10;
		print '<br>$int_8 = '.$int_8;
		print '<br>$int_2 = '.$int_2;
		print '<br>$int_16 = '.$int_16;
	*/
	
	printf('<br>$int_10 = %d', $int_10); 
	printf('<br>$int_8 = %o', $int_8); 
	printf('<br>$int_2 = %b', $int_2); 
	printf('<br>$int_16 = %X', $int_16); 
	
	}

	function ShowFloat()
	{
		$a1 = 1.543;
		$a2 = 2.434e2;
		/*print('<br>$a1 = '.$a1);
		print('<br>$a2 = '.$a2);
		*/
				
	printf('<br>$a1 = %.2f', $a1); 
	printf('<br>$a2 = %.2e', $a2); 
	
	}

	function ShowStr()
	{
		$a = 1;
		print('<br>$a = 1');
		print "<br>$a = \$a";
	}

	function ShowVar()
	{
		$a = null;
		if (is_null($a)) {
			# code...
			print("No value");
		}
		else
		{
			print("Value exists");
		}
	}

	
?>