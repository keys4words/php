<!DOCTYPE html>
<html>
<p>А это уже HTML-текст!</p>
<form method="GET">
    Введите Ваш возраст: <input type="text" name="age"/> лет<br>
    <input type="submit" value="OK">
</form>
<br>
<?php
    /* Справочник PHP: http://php.net */
    /*
        Escape-последовательности для Unicode-символов:
        http://rapidtables.com/code/text/unicode-characters.htm
    */
    $v = 1;
    if(isset($_GET['age'])) $v = $_GET['age'];
    $f = 1;
    if($v <= 0) echo "Возраст должен быть положительным и целым числом";
    else {
        for($i = 1; $i <= $v; $i++) {
            $f = $f*$i;
        }
        echo "<br>Факториал Вашего возраста $v равен $f";
    }
    echo '<br>';
    $arr4 = [
    [1,4,74],
    [76,4,7]];
    $arr5 = [
    [
    'name' => 'Mike',
    'age' => 38,
    'sex' => 'male'
    ],
    [
    'name' => 'Max',
    'age' => 25,
    'sex' => 'male'
    ]];
    foreach($arr4 as $item) {
        foreach($item as $vn_item) {
            echo $vn_item.' ';
        }
        echo '<br>';
    }
    foreach($arr5 as $key => $value) {
        echo $key.'  ';
        foreach($value as $k => $vn_item) {
            echo "$k = $vn_item, ";
        }
        echo '<br>';
    }
    $arr3 = [[1, 5], [2, 67], [65, 43]];
    $sum = 0;
    $numb=0;
    $i=0;
    while($i<3) {
        $j=0;
        while($j<2) {
             $sum+= $arr3[$i][$j];
             $numb++;
             $j++;
        }
        $i++;
    }
    echo 'число элементов в массиве = '.$numb.'<br>';
    echo 'среднее арифметическое массива = '.($sum/$numb).'<br>';
    
    for($i=0; $i<3; $i++) {
        for($j=0; $j<2; $j++) {
             echo $arr3[$i][$j].'  ';
        }
        echo '<br>';
    }
    '<br>';
    $arr3 = [];
    for($i = 0; $i<10; $i++) {
        $arr3[] = $i*6;
        
    }
    foreach($arr3 as $value) {
        echo $value.'<br>';
    }
?>
</html>