

<?php 
    $title = "Index";
    include 'includes/header.php'




 
?>

    <!-- Basic HTML -->
    <h1>Hello World -PHP primer</h1>
    <br/>
    <?php 
    /*Printing to HTML using Echo */
        echo 'Hello PHP';
        echo '<br/>';
        echo 'Second Line ';
        echo '<br/>';
    
    
        //declare variable
        $Name = 'Daniel Jackson';
        $Age = 21;

        //echo variable
        echo $Name;
        

        echo '<h1> My name is: '.$Name.'  </h1>';
        echo '<h1> My age is: '.$Age.'  </h1>';
        //echo using double quotes and interpolation
        echo "<h1> My name is: $Name  </h1>";


?>

<button type="button" class="btn btn-primary">CLICK ME!</button>
<button type="button" class="btn btn-secondary">CLICK ME!</button>
<button type="button" class="btn btn-warning">CLICK ME!</button>
<a href="https://www.Heroku.com" target="_blank" class="btn btn-danger">Heroku.com</a>

<?php require 'includes/footer.php'




?>