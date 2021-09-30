<?php
    define ("TITLE" ,"Get &amp; POST");

    if(isset( $_POST["post_submit"])) {
        
        //build a function that validates data
        function validateFormData( $formData ) {
            $formData = trim( stripslashes(htmlspecialchars( $formData )) );
            return $formData;
        }
        
        // check to see if inputs are empty
        // create variables with form data
        // wrap the data with our function
        
        if( !$_POST["post_name"] /* This a shorthand way of saying, if the post_name is empty (by using the not(!) sign) */ ) {
            $nameError = "Please enter your name <br>";
        } else {
            $name = validateFormData( $_POST["post_name"] );
        }
        
        if( !$_POST["post_email"] ) {
            $emailError = "Please enter your email <br>";
        } else {
            $email = validateFormData( $_POST["post_email"] );
        }
    }
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
            
            <h4>Submitted via $_GET</h4>
            <form action="form_get.php" method="get"> <!-- The data is going to be set via the get method --> <!-- Only use the get method to display data that isnt sensitive because they display the data on the URL -->
                <input type="text" placeholder="Name" name="name">
                <input type="text" placeholder="Email" name="email">
                <input type="submit" name="form_submit">
            </form>
            
            <hr>
            
            <h4>Submitted via $_POST</h4>
            <form action="form_post.php" method="post"> <!-- The data is going to be set via the get method --> <!-- We use this method for passwords and credit card numbers etc because they do not display any data on the URL -->
                <input type="text" placeholder="Name" name="post_name">
                <input type="text" placeholder="Email" name="post_email">
                <input type="submit" name="post_submit">
            </form>
            
            <hr>
            
            <h4>Submitted to current page</h4>
            
            <p class="text-danger">* Required fields</p>
            
            <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post"> <!-- This helps for security reasons -->
                
                <small class="text-danger">* <?php echo $nameError; ?></small>
                <input type="text" placeholder="Name" name="post_name"><br><br>
                
                <small class="text-danger">* <?php echo $emailError; ?></small>
                <input type="text" placeholder="Email" name="post_email"><br><br>
                <input type="submit" name="post_submit">
            </form>
            
            <?php
            
                if( isset( $_POST["post_submit"] ) ) {
                    echo "<h4>Your info</h4>";
                    echo "$name <br> $email <br>";
                }
            
            ?>
            
        </div>
        
        <!-- jQuery (necessary fr bootstrap's JavaScript plugins) -->
        <script src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
    </body>
    
</html>