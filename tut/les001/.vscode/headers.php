<?php
        header("HTTP 1.1/ 404 Not Found");
        header("X-Powered-By: None of your business");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Headers practice</title>
</head>
<body>
    <pre>
        <?php
            print_r(headers_list());
        ?>
    </pre>
</body>
</html>