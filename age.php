<?php
$v = $_POST['age'];
if($v<30) echo "Вам меньше 30 лет";
elseif($v>30) echo "Вам больше 30 лет";
else echo "Вам 30 лет";
?>