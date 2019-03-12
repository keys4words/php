<?php
session_start();
session_destroy();
header("Location: index.php");
//echo "<script>window.location.href='http://php.keys4words.ru/index.php'</script>";