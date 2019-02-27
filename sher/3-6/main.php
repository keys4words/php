<?php
function GuestBook()
{
	if (!empty($_POST["username"])) {
		$user = $_POST["username"];
		$comment = strip_tags($_POST["comment"]);

		$f = fopen("posts.txt", "a+");
		$d = date("d-m-Y H:i", time());
		fwrite($f, "<font color=red>$d</font>");
		fwrite($f, "<b>$user</b><br>");
		fwrite($f, "$comment<hr>");
		fclose($f);
		readfile("posts.txt");
	}
}

function ShowFiles()
{
	$dir = opendir(".");
	while ($file = readdir($dir)) {
		print("$file<br>");
	}
	closedir($dir);
}

?>