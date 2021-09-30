<?php
    define ("TITLE", "Loops")
?>

<!DOCTYPE html><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above three meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title><?php echo TITLE; ?></title>

        <!-- Bootsrap -->
        <link href="bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 shim and Respond.js for IE8 support of the HTML5 elememts and media queries -->
        <!-- WARNING: Respond.js deosnt work if you view the page via file:// -->
    </head>
    
    <body>
        <div class="container">
            <h1><?php echo TILE; ?></h1>
            
            <?php
                
                // WHILE LOOP
                $startingNum = 50;
            
                while ( $startingNum<= 100 ) {
                    echo "$startingNum &nbsp;";
                    
                    // Increasing by one
                    $startingNum++;
                }
                 
                // FOR LOOP
                for ( $a = 30; $a <= 40; $a++ ){
                    echo "Number $a <"br"> "; 
                }
            
                //FOREACH LOOP
                $friends = array ("Jim", "Kelvin", "Franklin", "Nana");
            
                foreach ( $friends as $friend ) {
                    //output each individual value in the array
                    echo "$friend is my friend! <br>";
                }
                
                // DO WHILE LOOP
                $foo = 10;
                do{
                    //do this code
                    echo "Numero $foo <br>";
                    
                    //increment by 1
                    $foo++;
                } while ( $foo <= 50);
            ?>
        </div>    
        
        
        <!-- jQuery (necessary fr bootstrap's JavaScript plugins) -->
        <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
    </body>
    
</html>