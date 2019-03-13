<?php
session_start();
$title = 'Lesson 5-3';
require_once 'header.php';
startPage();
?>

<h2>Connect to DB</h2>
<?php ConnectDB(); ?>

<h2>Create table</h2>
<a href="init.php">Make initial creation</a>

<h2>Get data from table</h2>
<?php GetDBData(); ?>

<h2>Edit data in table</h2>
<?php EditDB(); ?>

<h2>Close DB</h2>
<?php CloseDB(); ?>

<h2>Title H2</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam praesentium et officiis quae sint omnis ex, in incidunt mollitia quasi. Debitis praesentium est temporibus, consequuntur iste quas iure eos veritatis!</p>

<?php
endPage();
require_once 'footer.php';
?>