<?php
$title = "Lesson 4-6";
require_once 'header.php';
?>

<div class="wrapper">
    <div class="header">
        <h2>Working with date and time</h2>
    </div>
    <div class="content">
        <h2>Print out date and time</h2>

        <?php
        print date("d.m.y")."<br>";
        print date("Y-m-d H:i:s")."<br>";

        print "<h2>Вывод массива даты-времени</h2>";
        $today = getdate();
        print_r($today);

        printf("<p>Текущий год - %d</p>", $today['year']);

        StartDB();
        InitDB();
        PutDB();

        ?>

        <h2>Получение данных</h2>
        <?php GetDB(); ?>

        <h2>Закрытие БД</h2>
        <?php EndDB(); ?>

        <h2>Homework</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores aliquam eos quos similique cum culpa excepturi? Quas eaque illo minus facilis et sapiente possimus ad ipsam nisi harum, similique asperiores.</p>
        
    </div>
    <div class="foo"></div>

</div>

<?php
require_once 'footer.php';
?>