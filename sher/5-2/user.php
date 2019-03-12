<?php

session_start();
$title = "Private zone";
require_once 'header.php';

?>

<div class="wrapper">
    <div class="header">
        <h2>Private zone</h2>
    </div>
    <div class="content">
        <h2>Using sessions</h2>
        <?php
            if(isset($_SESSION['user']))
            {
                print "Hey, ".$_SESSION['user'];
                $_SESSION['count']++;
                print "<br>Число посещений закрытой зоны: ".$_SESSION['count'];
		        print "<br><a href='index.php'>Главная</a>";
		        print "<br><a href='exit.php'>Выход</a>";
            }
            else
            {
                if(isset($_POST['username']))
                {
                    $_SESSION['user'] = $_POST['username'];
                    $_SESSION['count'] = 0;
                    print "User ".$_SESSION['user']." registered";
                    print "<br><a href='index.php'>Go to Main</a>";
                }
                else
                {
                    ?>
                    <form action='user.php' method='post'>
                        <table>
                            <tr><td>Input name</td><td><input name="username" maxlength=60 size=30></td></tr>
                            <tr><td colspan=2><input type="submit" value="Enter"></td></tr>
                        </table>
                    </form>
                    <?php
                }
            }
        ?>
        <div class="footer"></div>
    
    <br>
        
</div>

<?php
require_once 'footer.php';
?>