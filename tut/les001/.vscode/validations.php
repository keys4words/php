<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>
</head>
<body>
    <?php
        $value = '';
        if(!isset($value) || empty($value))
        {
            echo "Validation failed.<br>";
        }
        $value = "";
        $min = 3;
        if(strlen($value) < $min){
            echo "Validation failed.<br>";
        }
        $max = 6;
        if(strlen($value) > $max){
            echo "Validation failed.<br>";
        }
        $value = "";
        if(!is_string($value)){
            echo "Validation failed.<br>";
        }

        $value = "1";
        $set = array("1", "2", "3", "4");
        if(!in_array($value, $set)){
            echo "Validation failed.<br>";
        }

        if(preg_match("/PHP/", "PHP is fun")){
            echo "A match was found.<br>";
        } else {
            echo "A match was NOT found.<br>";
        }

        $value = "nobody@nowhere.com";
        if(!preg_match("/@/", $value)){
            echo "Validation failed.<br>";
        }
    ?>
</body>
</html>