<?php
    function redirect_to($new_location)
    {
        header("Location: ".$new_location);
        exit;
    }

    $logged_in = $_GET['logged_in'];
    
    if($logged_in == '1')
    {
        redirect_to("basic.html");
    }
    else
    {
        redirect_to("https://yandex.ru/");
    }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redirect</title>
</head>
<body>
    <h1>Change url after &</h1>
    <pre>
        <?php
            
        ?>
    </pre>
</body>
</html>