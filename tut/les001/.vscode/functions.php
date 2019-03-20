<?php
function add_subt($val1, $val2)
{
    $add = $val1 + $val2;
    $subt = $val1 - $val2;
    return array($add, $subt);
}

$result_array = add_subt(34, 5);
echo "Add: ".$result_array[0]."<br>";
echo "Subtract: ".$result_array[1]."<br>";

list($add_result, $subt_result) = add_subt(554, 4);
echo "Add: ".$add_result."<br>";
echo "Subtract: ".$subt_result."<br>";

?>