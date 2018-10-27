<?php
	require_once 'lib/functions.php';
	$summa = false;
	$x = false;
	$y = false;
	if(isset($_POST["myform"])){
		$x = $_POST["x"] ?? false;
		$y = $_POST["y"]?? false;
		$summa = summa($x, $y);
	}
?>
<?php if ($summa !== false) : ?><p>Sum is <?=$summa?></p><?php endif ?>
<?php include 'form.php' ?>