<?php

$db;

function StartDB()
{
    global $db;
    $db = mysqli_connect("localhost", 'root', 'root', 'test');
    if(mysqli_connect_errno())
    {
        print "No connection: %s\n".mysqli_connect_errno();
        exit();
    }
    mysqli_set_charset($db, "utf8")
}

function CloseDB()
{
    global $db;
    mysqli_close($db);
}
