<?php 
    $title = "Arrays";
    include 'includes/header.php'




?>

<body>
    <h1> Array </h1>
    <?php
        //variable
        $sum = 3;

//this is an array
//only one datatype
       
            $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 17,23,56,26,25);
            //you can access the value in a subscript of the array using the index
            echo $numbers[9];

            echo "<p> $numbers[9]</p>";

            $size = count($numbers);
            echo "<p> Array Numbers is size: $size</p>";
            for($count = 0; $count < $size; $count++){

                echo"<p>$numbers[$count]</p>";
             }
?>
    <?php require 'includes/footer.php'




?>