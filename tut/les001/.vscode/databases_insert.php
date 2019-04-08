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
    $menu_name = "edit me";
    $position = 4;
    $visible = 1;
    $query = "INSERT INTO subjects(menu_name, position, visible) 
    VALUES('{$menu_name}', {$position}, {$visible})";
    
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