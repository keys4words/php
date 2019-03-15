<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Type juggling</title>
</head>
<body>
    <?php $count = "2"; ?>
    Type : <?php echo gettype($count); ?><br>
    Type +4 : <?php 
    $count += 4;
    echo gettype($count); ?><br>

    <?php $cats = "i have ".$count." cats!"; ?>
    cats: <?php echo gettype($cats); ?><br>

    Type casting<br>
    <?php settype($count, 'integer'); ?>
    count: <?php echo gettype($count); ?><br>

    <?php $count2 = (string) $count; ?>
    count: <?php echo gettype($count); ?><br>
    count2: <?php echo gettype($count2); ?><br>

    <?php $test1 = 3; ?>
    <?php $test2 = 3; ?>
    <?php settype($test1, "string"); ?>
    <?php (string)$test2; ?>
    test1: <?php echo gettype($test1); ?><br>
    test2: <?php echo gettype($test2); ?><br>

    wanna see constant? - <?php define('MY_CONST', 2345);
    echo MY_CONST; ?><br>
    <?php
    $new_user = true;
    if($new_user)
    {
        echo "<h2>Welcome New User!</h2>";
        echo "<p>We are glad to see you!</p>";
    }else
    {
        echo "<h2>Hey old guy!</h2>";
        echo "<p>We are glad to see you!</p>";
    }
    ?>


</body>
</html>