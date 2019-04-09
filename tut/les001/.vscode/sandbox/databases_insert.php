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
    $menu_name = "Today's Widget Trivia";
    $position = (int)4;
    $visible = (int)1;

    $menu_name = mysqli_real_escape_string($connection, $menu_name);

    $query  = "INSERT INTO subjects (";
	$query .= "  menu_name, position, visible";
	$query .= ") VALUES (";
	$query .= "  '{$menu_name}', {$position}, {$visible}";
	$query .= ")";
    
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
    
</body>
</html>
<?php
    mysqli_close($connection);
?>