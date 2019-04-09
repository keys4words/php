<?php
    function hello($word)
    {
        echo "Hey, {$word}!";
    }

    function redirect_to($new_location)
    {
        header("Location: ".$new_location);
        exit;
    }

?>