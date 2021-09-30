<?php
    define ("TITLE", "Honest Clickbait headlines");
    include("functions.php"); // This calls the function.

    if (isset( $_POST["fix_submit"])) {
        //callfunction
        checkForClickBait();
    }
?>

<!DOCTYPE HTML>

<html>
    <head><title><?php echo TITLE; ?></title></head>
    
    <body>
        <div>
            <h1><?php echo TITLE; ?></h1>
            <p>Hate click bait? turn those annoying headlines into realistic and honest ones using this simple program</p>
            
            <div>
                <form method="post">
                    <textarea placeholder="Paste click bait headline here" name="clickbait_headline"></textarea>
                    <button name="fix_submit"></button>
                </form>
            </div>
            
            <?php
                if(isset($_POST["fix_submit"])) {
                    //get first value in array returned by the checkForClickBait() function
                    // store it in a variable
                    $clickBait = checkForClickBait()[0];
                    
                    // get the second value in array returned by checkForBait() function
                    // store it in a variable
                    $honestHeadline = checkForClickBait()[1];
                    
                    // call function
                    // pass two arguments in the function
                    displayHonestHeadline( $clickBait, $honestHeadline);
                }
            ?>
            
        </div>    
    </body>
</html>