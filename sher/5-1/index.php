<?php
$title = 'Lesson 5-1';
require_once 'header.php';
?>

<div class="wrapper">
    <div class="header">
        <h2>Working with visitors</h2>
    </div>
    <div class="content">
        <h2>Show servers info</h2>
        <?php
            foreach($_SERVER as $k=>$v)
            {
                print("$k = $v<br>");
            }
        ?>
    </div>
    
    <div class="footer"></div>
    <h2>Statisitcs of visitors</h2>
    <a href="view_stat.php">Show statistics</a>
    <br>
    <h2>Homework</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem odio quaerat asperiores aliquid mollitia, neque dignissimos sequi impedit alias error sit unde dolores, molestias velit officiis atque autem quisquam repellendus!</p>
    
</div>

<?php
require_once 'footer.php';
?>