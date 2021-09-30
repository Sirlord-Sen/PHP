<?php
     define("Title", "PHP Variables & Constants");
?>




<!DOCTYPE html>

<html>
    <head>
        <title><?php echo title; ?></title>
    </head>
    
    <body>
        
        <?php
            
        // BOOLEAN: A boolean variabe specifies if true or false
        $loggedIn = true;
        
        // INTEGER: An integer variable is used to syore an integer
        $myAge = 19;
        
        // FLOATING POINT: Usually a fraction or decimal number
        $cwaResults = 75.34;
        
        // STRING: Simple text and they must be in single or double quotation marks
        $fullName = "Lord Wiafe";
        
        // well, now id like to display my work
        echo "Hello, my name is $fullName and I am $myAge years old";
        
        // CONSTANTS
        
        define ("Title", "PHP Variables & Constants");
            
            
        ?>
        
        
    
    </body>
</html>