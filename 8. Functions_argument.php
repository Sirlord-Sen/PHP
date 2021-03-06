<?php
    define ("TITLE" ,"Functions &amp; Arguments");
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
            <h1><?php echo TITLE; ?></h1>
            
            <?php
            
                function myFirstFunction(  ) {
                    $a = 0;
                    
                    do{
                        echo "$a %nbsp";
                        $a++;
                    } while( $a <= 100 );
                }  
            
            // call the function using the function call
            myFirstFunction();
            
            function mySecondFunction( $a ){
                 do{
                        echo "$a %nbsp";
                        $a++;
                    } while( $a <= 10 );
                }
            
            
                // call the function
                //pass in the argument
                mySecondFunction( 5 );
            
                function addTogether ($num1, $num2) {
                    $newNum = $num1 + num2$;
                    echo "$num1 + $num2 = $newNum ";
                }
            
                addTogether( 39, 128 );
            
            ?>
        </div>
        
        <!-- jQuery (necessary fr bootstrap's JavaScript plugins) -->
        <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
    </body>
    
</html>