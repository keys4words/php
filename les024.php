<?php
	$_GET
	$_POST
	$_REQUEST
?>
<form name="firstForm" action="<?=$_SERVER['PHP_SELF'?>" method="post">
	<div>
		Input first number:<input type="text" name="x">
	</div>
	<div>
		Input second number:<input type="text" name="y">
	</div>
	<div>
		<input type="submit" name="button" value="Calc">
	</div>
</form>