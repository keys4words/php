<?php
    $title = "Editing the table";
    require_once 'header.php';

?>

    <div class="wrapper">
        <div class="header">
            <h2>Editing table of products</h2>
        </div>

        <div class="content">
            <?php
                StartDB();
                EditDB();
                AddDB();
                EndDB();
            ?>
        </div>

        <div class="footer"></div>
    </div>

<?php
require_once 'footer.php';
?>