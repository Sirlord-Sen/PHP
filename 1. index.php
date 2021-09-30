<?php
    define ("TITLE" ,"PHP Syntax");
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
        
        <?php
            echo "Hello world!";  
        ?>
        
        <?php
           // single line comment
           # single line comment
           /* multi
              line
              comment here
           */
        
        ?>
        
        <!-- Not case sensitive -->
        <?php
            print('hello world! <br>');
            Print('hello world! <br>');
            PRINT('hello world! <br>');
        ?>
        
        
        
        <!-- jQuery (necessary fr bootstrap's JavaScript plugins) -->
        <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
    </body>
    
</html>