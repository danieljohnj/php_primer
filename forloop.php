<?php 
$title = "For Loops";
include 'includes/header.php'




?>



    <h1> FOR LOOPs </h1>

    <?php
        // for loops
        for($count = 0; $count < 10; $count++)
            echo"<p> Hello World</p>";

        for($count = 0; $count < 10; $count++){

            echo"<p>The count is: $count</p>";
        }
 
    ?>
    
    <?php require 'includes/footer.php'




?>