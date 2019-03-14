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
<!-- <?php $numbers = array(4, 2, array('one', 'five')); ?>
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

<?php $assoc = array('key 1' => "string A", 'key 2' => "string B"); ?>
<pre>
association array - <?php echo $assoc["key 2"]; ?><br>
</pre> -->
<!-- <pre>
<?php $arr1 = [4, 5, 56, 1, 5645, 43]; ?>
initial array => <?php print_r($arr1); ?><br>
length of array = <?php echo count($arr1); ?><br>
maxiumum in array = <?php echo max($arr1); ?><br>
minimum in array = <?php echo min($arr1); ?><br>
sorting - <?php sort($arr1); print_r($arr1); ?><br>
reverse sorting - <?php rsort($arr1); print_r($arr1); ?><br>
</pre>
implode array to string - <?php echo $res = implode('_', $arr1); ?><br>
<pre>
explode string to array - <?php print_r($new_arr = explode('_', $res)); ?><br>
</pre>
is 56 in array? <?php echo in_array(56, $new_arr); ?><br> -->
<?php $b = false; ?>
is false boolean type? - <?php echo is_bool($b); ?><br>
<?php
$var1 = null;
$var2 = "";
?>
var1 null? <?php echo is_null($var1); ?><br>
var2 null? <?php echo is_null($var2); ?><br>
var3 null? <?php echo is_null($var3); ?><br>
var1 is set? <?php echo isset($var1); ?><br>
var2 is set? <?php echo isset($var2); ?><br>
var3 is set? <?php echo isset($var3); ?><br>
<br><br>
<?php $var3 = "0"; ?>
var1 empty? <?php echo empty($var1); ?><br>
var2 empty? <?php echo empty($var2); ?><br>
var3 empty? <?php echo empty($var3); ?><br>

</body>
</html>

