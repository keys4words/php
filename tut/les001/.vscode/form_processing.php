<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form processing</title>
</head>
<body>
    <pre>
        <?php
            print_r($_POST);
        ?>
    </pre>
    <br>

    <?php
        if(isset($_POST['submit']))
        {
            echo "form was submitted";
            $username = isset($_POST['username']) ? $_POST['username'] : "";
            $password = isset($_POST['password']) ? $_POST['password'] : "";
        }
        else
        {
            $username = "John Doe";
            $password = "";
        }

    ?>

    <?php
        echo "{$username}: {$password}";
    ?>
</body>
</html>