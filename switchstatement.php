<?php 
    $title = "Switch";
    include 'includes/header.php'





?>
        <h1>switch statement</h1>
        <?php
            $grade = 'F';

            switch( $grade){
                case 'A':
                    echo '<h2>you are a superstar</h2>';
                    break;
                case 'B':
                    echo'<h2 style= "color: blue"> you did well</h2>';
                    break;
                default:
                echo'<h2 style= "color: red"> you have failed</h2>';
                    break;


            }

        ?>
<?php require 'includes/footer.php'



?>