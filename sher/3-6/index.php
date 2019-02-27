<?php $title = "Lesson 3-6";
	require_once "header.php";
?>
<div class="wrapper">
	<div class="header">
		<h2>Guest book</h2>
	</div>
	<div class="content">
		<h2>Posts</h2>
		<?php GuestBook(); ?>
		<h2>Форма ввода</h2>
		<form action="index.php" method="post">
			<b>Your opinion</b>
			<table>
				<tr>
					<td>Your name</td>
					<td><input type="text" name="username"><br></td>
				</tr>
				<tr>
					<td>Your opinion</td>
					<td>
						<textarea name="comment" cols="60" rows="5"></textarea
					</td>
			</table>
			<input type="submit" name="Send">
		</form>

		<h2>Files list</h2>
		<?php ShowFiles(); ?>

		<h2>Home work</h2>
		<p class="main-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		<div class="footer">K4W 2019</div>
	</div>
</div>
<?php require_once "footer.php"; ?>