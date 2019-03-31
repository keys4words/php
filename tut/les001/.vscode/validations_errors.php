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
        require_once('validations_functions.php');
        $errors = array();
        $username = trim(" max  ");

        if(!has_presence($username)){
            $errors['username'] = "Username can't be blank";
        }
        // $value = trim("");
       
        // if(!isset($value) || $value === "")
        // {
        //    $errors['value'] = "Value can't be blank";
        // }

        // $value = "nobody@nowhere.com";
        // if(!preg_match("/@/", $value)){
        //     echo "Validation failed.<br>";
        // }

        // //print_r($errors);
                
    ?>
    <?php
        echo form_errors($errors);
    ?>
    
</body>
</html>