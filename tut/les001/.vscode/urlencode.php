<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>first page</title>
</head>
<body>
<?php
    $page = "William Shakespeare";
    $quote = "To be or not to be";
    $link1 = "/bio/" . rawurlencode($page) . "?quote=" .
    urlencode($quote);
    $link2 = "/bio/" . urlencode($page) . "?quote=" .
    rawurlencode($quote);
    echo $link1 . "<br>";
    echo $link2 . "<br>";
?>
    
    
</body>
</html>