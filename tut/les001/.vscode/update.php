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
    $id = 5;
    $menu_name = "edit me";
    $position = 4;
    $visible = 1;
    $query = "UPDATE subjects SET ";
    $query .= "menu_name = '{$menu_name}', ";
    $query .= "position = {$position}, ";
    $query .= "visible = {$visible} ";
    $query .= "WHERE id = {$id}";
    
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Success";
    }else{
        die("Database query failed - " . mysqli_error($connection));
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
			// 3. Use returned data (if any)
			while($subject = mysqli_fetch_assoc($result)) {
				// output data from each row
		?>
				<li><?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?></li>
	  <?php
			}
		?>
    </ul>
</body>
</html>
<?php
    mysqli_close($connection);
?>