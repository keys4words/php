<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Debugging</title>
</head>
<body>
    <?php
        $number = 999;
        $string = 'asdfs 43';
        $array = array(1 => 'Homepage',
                    2 => 'About us',
                    3 => "Services");
                    var_dump($number);        
                    var_dump($string);
                    var_dump($array);
    ?>

    <br>
    <pre>
    <?php   
//        print_r(get_defined_vars());
        function say_hello_to($word)
        {
            echo "hey {$word}!<br>";
            var_dump(debug_backtrace());    
        }

        say_hello_to('Everyone');
    ?>
    </pre>
    <br>
    
</body>
</html>