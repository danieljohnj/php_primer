<<?php 
    $title = "Function";
    include 'includes/header.php'





?>
        <h1>Functions</h1>

    <?php
    /*Defining a function*/

    function writeMessage(){

    echo "you are a really nice person, Have a nice time <br/>";
   }
   //calling a function
   writeMessage();

   echo "<hr/>";
   writeMessage();

   //function with parameters

    function addFunction($num1, $num2){
    $sum = $num1+$num2;
    $num2 = $num2 + 1;
    echo "The sum of $num1 and $num2 is: $sum <br/>";

  }

        function changeNum(&$num){
            $num = $num + 10;
        //$num + 10


        }

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;

            return $prod;



         }
   
    $num = 500;
    addFunction(10, 20);

    addFunction(10, $num);

    echo $num;
    addFunction('10', "50");

    changeNum($num);
    echo $num. '<br/>';

    $return_value = returnProduct(10, 200);
    echo $return_value . '<br/>';




?>
    <?php require 'includes/footer.php'




    ?>