<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- <?php
    echo 'maximus wins';
    echo '<br>';
    $var1 = 100;
    echo $var1;
    echo "<br>";
    echo "{$var1}andmore";
    echo "<br>";
    print $var1 * 4;
    echo "<br>";
    $first = "The quick brown cat";
    $second = " jumped over mice";
    $third = $first;
    $third .= $second;
    echo $third;
    echo "<br>".strtolower($third);
    echo "<br>".strtoupper($third);
    echo "<br>".ucfirst($third);
    echo "<br>".ucwords($third);
    echo "<br>Length of string - ".strlen($third);
    echo "<br> trimming string - ".trim(" a b c d ");
    echo "<br> strstr ".strstr($third, "brown");
    echo "<br> replace ".str_replace("quick", "super-fast", $third);
    echo "<br>".str_repeat($third, 2);
    echo "<br>".substr($third, 5, 10);
    echo "<br>".strpos($third, "brown");
    echo "<br>".strchr($third, "t");
    echo "<br><br>";
    echo "abs(0-300) = ".abs(0-300);
    echo "<br>pow(2,8) = ".pow(2,8);
    echo "<br>sqrt(100) = ".sqrt(100);
    echo "<br>fmod(20, 7) = ".fmod(20, 7);
    echo "<br>rand() = ".rand();
    echo "<br>rand(1, 10) = ".rand(1, 10);
    
?> -->
<!-- <br><br>
Float <?php echo $float = 3.14; ?><br>
3.14 + 7 = <?php echo $float + 7; ?><br>
4/3 = <?php echo 4/3; ?><br>
Dividing by zero = <?php echo 4/0; ?><br>
Round: <?php echo round($float+.5, 0); ?><br>
Ceiling: <?php echo ceil($float); ?><br>
Floor: <?php echo floor($float); ?><br>
<br><br>
<?php $integer = 3; ?>
<?php echo "Is {$integer} integer? ".is_int($integer); ?><br>
<?php echo "Is {$float} float? ".is_float($float); ?><br>
<?php echo "Is {$integer} numeric? ".is_numeric($integer); ?><br>
<?php echo "Is {$float} numeric? ".is_numeric($float); ?><br>
<br><br> -->
<?php $numbers = array(4, 2, array('one', 'five')); ?>
<?php echo $numbers[1]; ?><br>
show array<?php print_r($numbers); ?><br>
show element of array[2, 0] = <?php echo($numbers[2][0]); ?><br>
<?php $numbers[] = 434; ?>
<pre>
adding new el to non-existing position = <?php print_r($numbers); ?><br>
</pre>
<?php $numbersNew = [4, 5, 66, '664s']; ?>
<pre>
adding new array <?php print_r($numbersNew); ?><br>
</pre>


</body>
</html>

