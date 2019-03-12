<?php
session_start();
$title = 'Lesson 5-3';
require_once 'header.php';
?>

<div class="wrapper">
    <div class="header">
        <h2>Working with cookies and sessions</h2>
    </div>
    <div class="content">
        <h2>Using cookies</h2>
        <?php
            if(isset($_COOKIE["name"]))
            {
                print 'Hey, '.htmlspecialchars($_COOKIE["name"]).'!<br>';
                setcookie("name");
                print "Cookies removed";
            }
            else
            {
                setcookie("name", "3lab");
                print "Cookies saved";
            }
        ?>

        <h2>Using sessions</h2>
        <?php
            if(isset($_SESSION['user']))
            {
                print "Hey, ".$_SESSION['user'];
                print "<br><a href='user.php'>Go to private zone</a>";
            }
            else
            {
                print "User unknown";
                print "<br><a href='user.php'>Register</a>";
            }

        ?>
    </div>
    
    <div class="footer"></div>
    
    <br>
    <h2>Homework</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem odio quaerat asperiores aliquid mollitia, neque dignissimos sequi impedit alias error sit unde dolores, molestias velit officiis atque autem quisquam repellendus!</p>
    
</div>

<?php
require_once 'footer.php';
?>