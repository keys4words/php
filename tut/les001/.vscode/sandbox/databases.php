<?php
    $dbhost = "localhost";
    $dbuser = "keys4wcm_bp";
    $dbpass = "qazwsx";
    $dbname = "keys4wcm_bp";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno()){
        die("Database connection failed: ".
            mysqli_connect_error().
            " (".
            mysqli_connect_errno().
            ")"
        );
    }
?>

<?php
    $query = "SELECT * ";
    $query .= "FROM subjects ";
    //$query .= "WHERE visible = 1 ";
    $query .= "ORDER BY position ASC";

    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Database query failed");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Databases</title>
</head>
<body>
    <ul>
    <?php
        while($subject = mysqli_fetch_assoc($result)){
            
            // <?php print_r($subject);
            ?>
            <li><?php echo "id = ".$subject["id"] . " menu_name = " . $subject["menu_name"] . " position = " . $subject["position"] . " visible = " . $subject["visible"]; ?></li>
            <!--li><?php echo "menu_name = " . $subject["menu_name"]; ?></li>
            <li><?php echo "position = " . $subject["position"]; ?></li>
            <li><?php echo "visible = " . $subject["visible"]; ?></li-->
            <?php
        }
    ?>
    </ul>
    <?php
        mysqli_free_result($result);
    ?>
</body>
</html>
<?php
    mysqli_close($connection);
?>