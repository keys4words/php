<?php
        $name = "test";
        $value = 464;
        $expire = time() + (60*60*24*7);
        //setcookie($name, $value, $expire);
        setcookie($name, $value, $expire);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
        <?php
            $test = isset($_COOKIE['test']) ? $_COOKIE['test'] : "";
            echo $test;
        ?>
</body>
</html>