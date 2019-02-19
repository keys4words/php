<?php $title="Lesson 3-1"; require_once "header.php"; ?>
<h1>Форма ввода</h1>
<h2>Метод GET</h2>
<form action="hello1.php" method="get">
	Name: <input type="text" name="name" size="20">
	<input type="submit" value="ok">
</form>

<h2>Method GET with protection</h2>
<form action="hello2.php" method="get">
	Name: <input type="text" name="name" size="20">
	<input type="submit" value="ok">
</form>


<h2>Method POST with protection</h2>
<form action="hello3.php" method="post">
	Name: <input type="text" name="name" size="20">
	<input type="submit" value="ok">
</form>

<?php require_once "footer.php"; ?>


<!-- <script>alert('ok');</script> -->

