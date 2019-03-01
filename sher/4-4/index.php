<?php
    $title='Lesson 4-4';
    require_once 'header.php';
?>

<div class="wrapper">
<div class="content">
    <h2>Connecting to DB</h2>
    <?php StartDB(); ?>

    <h2>Create table</h2>
    <?php CreateTable(); ?>

    <h2>Adding data to table</h2>
    <?php PutDB(); ?>

    <h2>Getting info from DB</h2>
    <?php GetDB(); ?>

    <h2>Close DB</h2>
    <?php CloseDB(); ?>

    <h2>Home work</h2>
    <p>Change table to show field 'Manager'</p>
</div>

    <div class="footer"></div>
    </div>
</div>  <!-- wrapper -->

<?php
require_once 'footer.php';
?>