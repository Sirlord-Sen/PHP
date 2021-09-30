<?php

    function checkForClickBait() {
        //grab value from textarea in $_POST collection
        //make all letters lowercase using strtolower() function
        //store in a variable
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
        
        return array($clickBait, $honestHeadline);

    };
    
    // this function requires two parameters
    /* the values of the parameters will be the values of the returned array in the previous function */
    function displayHonestHeadline ( $x, $y ) {
        // use ucwords() function to uppercase first letter in every word
        // echo the variable on the screen
        echo "<strong>Original Headline</strong><h4>".ucwords($x)."</h4><hr>";
                    
        //echo the honest headline on the screen
        echo "<strong>Honest Headline</strong><h4>".ucwords($y)."</h4><hr>";
    };
?>