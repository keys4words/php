<?php 
$title="Editing product";
require_once 'header.php';
?>

<div class="wrapper">
    <div class="header">
        <h2>Editing existing product</h2>    
    </div>
    <div class="content">
        <?php

            StartDB();
            $id = $_GET['id'];
            $SQL = "SELECT * FROM Товары WHERE `Код товара`=".$id;
            
            if($result = mysqli_query($db, $SQL))
            {
                $row = mysqli_fetch_assoc($result);
                $item = $row['Товар'];
                $price = $row['Цена'];
            }
            else
            {
                printf("Error: %s\n", mysqli_error($db));
            }
        ?>
    
        <form action="update.php" method="post">
            <?php
                print "<input name='id' type='hidden' value=".$row['Код товара'].">";
                print "<table>";
                print "<tr><td>Товар</td><td><input name='item' value='".$row['Товар']."' maxlength=60 size=30></td></tr>";
                print "<tr><td>Цена</td><td><input name='price' value='".$row['Цена']."' maxlength=7 size=7></td></tr>";
                mysqli_free_result($result);
            ?>
            <tr><td colspan2><input type="submit" value="Change"></td></tr>
            </table>
        </form>
    </div>

    <div class="footer"></div>
</div>

<?php
    require_once 'footer.php';
?>