<?php 
    $title = "Lesson 4-3"; 
    require_once 'header.php'; 
?>

<div class="wrapper">
    <div class="header">
	    <h2>Подключение к базе данных</h2>
    </div> 

<div class="content">

<h2>Подключение к БД</h2>
<?php StartDB(); ?>

<h2>Создание таблицы</h2>
<?php InitDB(); ?>

<h2>Заполнение данными</h2>
<?php PutDB(); ?>


<h2>Получение данных</h2>
<?php GetDB(); ?>


<h2>Закрытие БД</h2>
<?php CloseDB(); ?>


<h2>Задание</h2>
<p>Измените программу так, чтобы в таблице "Сотрудники" появилось поле "Должность".</p>
</div> <!-- content -->
<div class="footer">
</div>

</div>

<?php 
    require_once 'footer.php';
?>