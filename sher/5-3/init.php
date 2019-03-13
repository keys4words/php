<?php
session_start();
$title = "Creation table";
require_once 'header.php';
StartPage();
?>

<h2>Connection to DB</h2>
<?php ConnectDB(); ?>

<h2>Create table</h2>
<?php InitDB(); ?>

<h2>Putting data to table</h2>
<?php PutDB(); ?>
<a href="index.php">Go to Main</a>

<?php
EndPage();
require_once 'footer.php';
?>