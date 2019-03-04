<?php
    $title = "Changing product";
    require_once 'header.php';

    StartDB();
    $id = $_POST['id'];
    $item = htmlspecialchars($_POST['item']);
    $price = htmlspecialchars($_POST['price']);
    $SQL = "UPDATE Товары SET `Товар`='$item', `Цена`='$price' WHERE `Код товара`='$id'";

    if(!$result = mysqli_query($db, $SQL))
    {
        printf("Error in query: %s\n", mysqli_error($db));
    }

    EndDB();
    header("Location: edit_table.php");	
