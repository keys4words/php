<?php
	$title="Lesson 3-5";
	require_once "header.php";
?>

<div id="wrapper">
	<div id="header">
		<h2>3.5 Strings practice</h2>
	</div>
	<div id="content">
		<h2>Input string</h2>
		<form action="index.php" method="post">
			Input string: <input type="text" name="firstname" size="20">
			<input type="submit" value="ok">
		</form>

		<br>
		<h2>Treating string</h2>
		<?php ShowText(); ?>

		<h2>Example 2</h2>
		<p>Исправить программу так, чтобы она правильно работала с кириллицей</p>
	</div>
	<div class="footer">
		
	</div>

</div>

<?php
	require_once "footer.php";
?>