<?php 
    $title = "If Statement";
    include 'includes/header.php'



?>
    <title>PHP Primer - If Statements</title>
</head>
<body>
    <h1>IF-ELSE Statement</h1>
    <h3 style="color: red"></h3>

    <?php
    //An if statement that will carry out an action based on the value of the variable

    echo '<h2> If Statement </h2>';

    $grade = 40;
    //===, ==, >, <, <=, >=,

    if( $grade >= 50){

        echo '<h3 style="color: green"> YOU HAVE PASSED</h3>';


    }
    else{
        echo '<h3 style= "color: red"> YOU HAVE FAILED</H3>';

    }

    $grade = 'A';
    //if -else if else

if($grade == 'A'){

    echo'<h2 style= "color: green"> you are a superstar</h2>';

}
elseif($grade =='B'){
    echo'<h2 style= "color: blue"> you did well</h2>';


}
else{
    echo'<h2 style= "color: red"> you have failed</h2>';

}

?>
    <?php require 'includes/footer.php'




?>