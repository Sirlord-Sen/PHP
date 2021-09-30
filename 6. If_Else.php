<?php
    define ("TITLE" ,"Id, Else &amp; Elseif Statements");
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
                // IF expression is true, do something
                // IF expression is false, dont do anything
                $foo = 99;
                $bar = 79;
            
                if ( $foo > $bar ) {
                    echo "$foo is greater than $bar";
                 }
            
                elseif ($foo == $bar ) {
                    echo " Well the two are equal";
                }
            
                else {
                    echo "Booo! $bar is greater than $foo";
                }
            ?>
        </div>
        
        <!-- jQuery (necessary fr bootstrap's JavaScript plugins) -->
        <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
    </body>
    
</html>