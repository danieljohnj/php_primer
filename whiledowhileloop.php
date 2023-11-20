<?php 
    $title = "While - Do While loop ";
    include 'includes/header.php'





?>
    
    <h1> While Loop </h1>

    <?php

        $grade =0;
        //infinite loop
        //while($grade < 10){
        //   echo '<p> I am Less than 10</p>';
        //}

        while($grade < 10){
            echo'<p> I am Less than 10</p>';
            $grade++;

        }

        echo 'exit loop'



?>
    <h1> Do-While Loop</h>
    <?php
//post condition loop
   $grade = 0;
    do{

        echo '<p> I am doing a do while loop</p>';
            $grade++;

    }while($grade <10);

   echo' exit loop';

?>
<?php require 'includes/footer.php'


?>