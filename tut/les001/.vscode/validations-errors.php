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

        $errors = array();
        $value = trim("");
       
        if(!isset($value) || $value === "")
        {
           $errors['value'] = "Value can't be blank";
        }

        $value = "nobody@nowhere.com";
        if(!preg_match("/@/", $value)){
            echo "Validation failed.<br>";
        }

        //print_r($errors);
        function form_errors($errors = array()){
            $output = "";
            if(!empty($errors)){
                $output = "<div class=\"error\">";
                $output .= "Please fix the following errors:";
                $output .= "<ul>";
                foreach($errors as $key => $error){
                    $output .= "<li>{$error}</li>";
                }
                $output .= "</ul>";
                $output .= "</div>";
            }
            return $output;
        }
        
    ?>
    <?php
        form_errors($errors);
    ?>
    
</body>
</html>