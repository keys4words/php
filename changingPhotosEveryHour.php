<?php
	$h = date('H');
	$img = $h % 3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		body{
			background: url(img/<? php echo $img ?>.jpg);
			background-size: cover;
			color: #ff0;
		}
	</style>
</head>
<body>
	<h2><?php echo $h ?></h2>
</body>
</html>