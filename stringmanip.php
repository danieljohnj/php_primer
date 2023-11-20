<?php 
    $title = "String Manipulation";
    include 'includes/header.php'




?>

<h1> String Manipulation </h1>

<?php
//concatenation of springs
    $phrase1 = "Student who came late";
    $phrase2 = "In class, stand with rock";
    $name = "daniel jackson";
    echo $phrase1 ." ,named Tiffany, ". $phrase2;
    echo '<br/>';
    echo '<hr/>';

    //string transformation 
    echo 'uppercase first letter: ' . ucfirst($name).'<br/>';
    echo 'uppercase first letter of each word: ' . ucwords($name).'<br/>';
    echo 'upper case : ' .  strtoupper($name).'<br/>';
    echo 'Lower Case: ' . strtolower("THIS WAS ALL UPPER CASE").'<br/>';
    echo '<hr/>';

    echo 'repeat string: ' . str_repeat('a',10).'<br/>';
    echo 'repeat string Caps: ' .strtoupper( str_repeat('a',10)).'<br/>';
    echo 'Get a Substring: ' . substr($name, 3, 10).'<br/>';

    echo 'Get position of string: ' . strpos($name, "j").'<br/>';

    //Return NULL
    //echo 'get position of string: ' . strpos($combine, 'z'). '<br/>';

    echo 'Find Character "I": ' . strchr($name, 'R').'<br/>';
    echo 'Find Character "i": ' . strchr($name, 'i').'<br/>';
    echo 'Find Character "N": ' . strchr($name, 'N').'<br/>';
    echo 'Find Character "e": ' . strchr($name, 'e').'<br/>';

    echo ' Find length of string:  '. strlen($name). '<br/>';

    echo 'without Trim: '. "A" . " B C D " . "E" . '<br/>';
    echo 'Trim Space on both side:  '."A" . trim(" B C D ") ."E" .'<br/>';
    echo 'Trim Space on LEFT:  '."A" . ltrim(" B C D ") ."E" .'<br/>';
    echo 'Trim Space on right:  '."A" . rtrim(" B C D ") ."E" .'<br/>';

    echo ' Replace string with another: '.str_replace("stand", "sit", $phrase2 ) . '<br/>';




?>
    
    <?php require 'includes/footer.php'




?>