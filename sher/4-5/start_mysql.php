<?php

$db;

function StartDB()
{
    global $db;
    $db = mysqli_connect('localhost', 'max', '123', 'newTest');

    if(mysqli_connect_errno())
    {
        print "No connection: %s\n".mysqli_connect_error();
        exit();
    }
    mysqli_set_charset($db, "utf8");
}

function EndDB()
{
    global $db;
    mysqli_close($db);
}