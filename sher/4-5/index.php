<?php
    $title = "Lesson 4-5";
    require_once 'header.php';
?>

<div class="wrapper">
    <div class="header">
        <h2>Работа с объектами базы данных</h2>
    </div>

    <div class="content">
        <h2>Connecting to DB</h2>
        <?php StartDB(); ?>

        <h2>Creating table</h2>
        <?php InitDB(); ?>

        <h2>Adding data to table</h2>
        <?php PutDB(); ?>

        <h2>Getting data from table</h2>
        <?php GetDB(); ?>

        <h2>Editing line in table</h2>
        <a href="edit_table.php">Editing data</a>

        <h2>Closing DB</h2>
        <?php EndDB(); ?>

        <h2>Home work</h2>
        <p>Добавьте в таблицу 'Товары' поле 'Свойства' и обеспечьте возможность его редактирования.</p>
    </div>

    <div class="footer"></div>
</div>

<?php
    require_once 'footer.php';
?>