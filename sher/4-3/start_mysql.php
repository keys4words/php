<?php

$db;

function StartDB()
{
    global $db;
    $db = mysqli_connect("keys4wcm.beget.tech", 'keys4wcm_test', '123456', 'keys4wcm_test');
    
    if(mysqli_connect_errno())
    {
        print "No connection: %s\n".mysqli_connect_error();
        exit();
    }
    mysqli_set_charset($db, "utf8");
}

function CloseDB()
{
    global $db;
    mysqli_close($db);
}