<?php
$file = file("stat.log");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Statistics</title>
</head>
<body>
    <h1>Visitors</h1>
    <table width="680" cellspacing="1" cellpadding="1" border="0"
    STYLE="table-layout:fixed">
    <tr bgcolor="#eeeeee">
        <td class="t" width="100"><b>Время и дата</b></td>
        <td class="t" width="200"><b>Данные о посетителе</b></td>
        <td class="t" width="100"><b>Сервер</b></td>
        <td class="t" width="280"><b>Посещенный URL</b></td>
    </tr>

    <?php
        $col = sizeof($file);
        for($si = sizeof($file) - 1; $si + 1 > sizeof($file) - $col; $si--)
        {
            $string = explode("|", $file[$si]);
            $q1[$si] = $string[0];
            $q2[$si] = $string[1];
            $q3[$si] = $string[2];
            $q4[$si] = $string[3];
            print '<tr bgcolor="#eeeeee"><td clas="t">'.$q1[$si].'</td>';
            print '<td class="t">'.$q2[$si].'</td>';
            print '<td class="t">'.$q3[$si].'</td>';
            print '<td class="t">'.$q4[$si].'</td></tr>';
        }
    ?>
    </table>
</body>
</html>