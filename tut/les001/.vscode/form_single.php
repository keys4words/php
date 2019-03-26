<?php
    require_once('included_function.php');
    if(isset($_POST['submit']))
        $username = $_POST['username'];
        $password = $_POST['password'];
        $message = "There were some errors";
    {   
        if($username == 'kevin' && $password == '123')
        {
            redirect_to('basic.php');
        }
        else
        {
            $username = $_POST['username'];
            $message = "There were some errors";
        }
    }
    else
    {
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
    <br>
    <form action="index.php" method="post">
        Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br>
        Password: <input type="password" name="password" value=""><br>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>