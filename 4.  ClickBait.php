<?php
    define ("TITLE", "Honest Clickbait headlines");

    if(isset($_POST["fix_submit"])){
        //Grab the value from textarea in $_POST collection
        //Make all letters lowercase using strtolower() function
        // store in a variable
        $clickBait = strtolower( $_POST["clickbait_headline"]);
        
        // store arrays of the clickbait sounding words or phrases
        
        $a = array (
                    "scientists",
                    "doctors",
                    "hate",     
                    "stupid",
                    "stupid",
                    "weird",
                    "simple",
                    "trick",
                    "shocked me",
                    "you'll never believe",
                    "hack",
                    "epic",
                    "unbelievable"
            );
        
        $b = array (
                    "so-called scientist",
                    "so-called doctors",
                    "aren't threatened by",
                    "average",
                    "completely normal",
                    "ineffective",
                    "method",
                    "is not different than the others",
                    "you wont really be surprised by",  
                    "slightly improve",
                    "boring",
                    "normal"
            );
    
        // use the str_replace() function to replace the words
        // uppercase the first letter in every word using ucwords() function
        // store in a varaible
        $honestHeadline = str_replace($a, $b, $clickBait);
    }

?>

<!DOCTYPE html>
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
            <p class="lead">Hate click bait? turn those annoying headlines into realistic and honest ones using this simple program</p>
            
            <div class="row">
                <form class="col-sm8 col-sm-offset-2" action="" method="post">
                    <textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea>
                    <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make Honest!</button>
                </form>
            </div>
            
            <?php
                if(isset($_POST["fix_submit"])) {
                    // use ucwords() function to uppercase first letter in every word
                    // echo the variable on the screen
                    echo "<strong>Original Headline</strong><h4>".ucwords($clickBait)."</h4><hr>";
                    
                    //echo the honest headline on the screen
                    echo "<strong>Honest Headline</strong><h4>".ucwords($honestHealine)."</h4><hr>";
                }
            ?>
            
        </div>
        
         <!-- jQuery (necessary for bootstrap's JavaScript plugins) -->
        <script src="jquery-3.3.1.js"></script>
        
        <!-- Bootstrap JS -->
        <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>