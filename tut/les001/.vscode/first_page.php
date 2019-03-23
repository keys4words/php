<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>first page</title>
</head>
<body>
<?php
    $link_name = "Second Page";
    $id = 5;
    $company = 'Bezo & Inc';
?>
    <a href='second_page.php?id=<?php echo $id;  ?>&company=<?php echo rawurlencode($company); ?>'><?php  echo $link_name; ?></a>

    
</body>
</html>