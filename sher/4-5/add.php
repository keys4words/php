<?php 
$title="Adding product";
require_once 'header.php';
?>

<div class="wrapper">
    <div class="header">
        <h2>Adding new product</h2>    
    </div>
    <div class="content">
        <?php

            $item = htmlspecialchars($_POST['item']);
            $price = htmlspecialchars($_POST['price']);

            print "Товар - $item<br>";
            print "Цена - $price<br>";

            StartDB();

            $SQL = "INSERT INTO Товары
                (`Товар`, `Цена`)
                VALUES('$item', '$price')";
            print $SQL."<br>";
            if(mysqli_query($db, $SQL) === TRUE)
            {
                print "Записи в таблицу Товары добавлены<br>";
            }
            else
            {
                printf("Error: %s\n", mysqli_error($db));
            }
            print '<a href="edit_table.php">Вернуться к таблице</a>';
            EndDB();
        ?>
    
    </div>

    <div class="footer"></div>
</div>

<?php
    require_once 'footer.php';
?>