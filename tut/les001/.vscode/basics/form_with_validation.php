<?php
    require_once('included_function.php');
    require_once('validations_functions.php');

    $errors = array();
    $message = "";

    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        $fields_required = array("username", "password");
        foreach($fields_required as $field){
            $value = trim($_POST[$field]);
            if(!has_presence($value)){
                $errors[$field] = ucfirst($field) . " can't be blank";
            }    
        }

        $fields_with_max_lengths = array("username" => 30, "password" => 8);
        validate_max_lengths($fields_with_max_lengths);
        
        

        
        
        if(empty($errors)){
            if($username == 'kevin' && $password == '123')  {
                redirect_to('basic.php');
            } else   {
                $message = "Username/password do not match";
            }
        }
    } else   {
        $username = "";
        $message = "Please log in";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form practice</title>
</head>
<body>
    <?php echo $message; ?>
    <?php echo form_errors($errors); ?>
    <br>
    <form action="index.php" method="post">
        Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br>
        Password: <input type="password" name="password" value=""><br>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>