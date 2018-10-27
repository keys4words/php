<form name="myform" action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
	<div>
		Input first number:<input type="text" name="x" value="<?=$x?>">
	</div>
	<div>
		Input second number:<input type="text" name="y" value="<?=$y?>">
	</div>
	<div>
		<input type="submit" name="myform" value="Calc">
	</div>
</form>