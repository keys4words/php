<?php
function InitDB()
{
    global $db;
    if(mysqli_query($db, "DROP TABLE IF EXISTS Товары;") === TRUE)
    {
        //print "Таблица Товары удалена<br>";
    }
    else
    {
        printf("Error: %s\n", mysqli_error($db));
    }

    if(mysqli_query($db, "DROP TABLE IF EXISTS Группы;") === TRUE)
    {
        //print "Таблица Группы удалена<br>";
    }
    else
    {
        printf("Error: %s\n", mysqli_error($db));
    }

    $SQL = "CREATE TABLE Товары (
        `Код товара` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `Товар` VARCHAR(50) NOT NULL,
        `Цена` INT NOT NULL
        );";
    if(mysqli_query($db, $SQL) === TRUE)
    {
        //print "Таблица Товары создана<br>";
    }
    else
    {
        printf("Error: %s\n", mysqli_error($db));
    }

    $SQL = "CREATE TABLE Группы (
        `Код группы` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `Группа` VARCHAR(50) NOT NULL,
        `Менеджер` VARCHAR(50) NOT NULL
        );";
    if(mysqli_query($db, $SQL) === TRUE)
    {
        //print "Таблица Группы создана<br>";
    }
    else
    {
        printf("Error: %s\n", mysqli_error($db));
    }
}

function PutDB()
{
    global $db;
    $SQL = "INSERT INTO Товары
        (`Товар`, `Цена`)
        VALUES('Perfect Balancing Toner', '7350'),
        ('Perfect C Treatment', '10040'),
        ('Healthy Glow', '6210')
    ";
    if (mysqli_query($db, $SQL) === TRUE)
	{
		//print "Записи в таблицу Товары добавлены.<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
	
	$SQL = "INSERT INTO Группы
					(`Группа`, `Менеджер`) 
			VALUES 	('BB cream', 'Иванов'), 
					('Cleansers', 'Петров')
		";

	if (mysqli_query($db, $SQL) === TRUE)
	{
		//print "Записи в таблицу Группы добавлены.<br>";
	}
	else
	{
		printf("Ошибка: %s\n", mysqli_error($db));
	}
}

function GetDB()
{
    global $db;
    $SQL = "SELECT * FROM Товары";
    if($result = mysqli_query($db, $SQL))
    {
        print "<table border=1 cellpadding=5>";
        while ($row = mysqli_fetch_assoc($result))
        {
            print "<tr>";
            printf("<td>%s</td><td>%s</td>", $row['Товар'], $row['Цена']);
            print "</tr>";
        }
        print "</table>";
        mysqli_free_result($result);
    }
    else
    {
        printf("Ошибка в запросе: %s\n", mysqli_error($db));
    }
}

function AddDB()
{
    global $db;
    $SQL = "SELECT * FROM Товары";
    if(!$result = mysqli_query($db, $SQL))
    {
        printf("Error in query: %s\n", mysqli_error($db));
    }

?>
<form action="add.php" method="post">
    <table>
        <tr><td>Название</td><td><input name="item" maxlength=60 size=30></td></tr>
        <tr><td>Цена</td><td><input name="price" maxlength=7 size=7></td></tr>
        <tr><td colspan=2><input type="submit" value="Add"></td></tr>
    </table>
</form>

<?php

}

function EditDB()
{
    global $db;
    if($result = mysqli_query($db, "SELECT * FROM Товары"))
    {
        print "<table border=1 cellpadding=5>";
        while($row = mysqli_fetch_assoc($result))
        {
            print "<tr>";
            printf("<td>%s</td><td>%s</td>", $row['Товар'], $row['Цена']);
            print "<td><a href='edit.php?id=".$row['Код товара']."'>Открыть</a></td>";
            print "<td><a href='delete.php?id=".$row['Код товара']."'>Удалить</a></td>";
            print "</tr>";
        }
        print "</table><br>";
    }

}
