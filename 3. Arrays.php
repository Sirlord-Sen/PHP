<?php
    define("TITLE", "PHP Arrays")
?>

<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title><?php echo TITLE; ?></title>
        
        
    </head>
    
    <body>
        <div class="container">
            <h1><?php echo TITLE; ?></h1>
            
            <?php
            
                // PLAIN VARIABLES
                $username = "lodwaf";
                $fullname = "Lord Wiafe";
                $age = 19;
                $gender = "male";
                $country = "Ghana";
            
                // SIMPLE ARRAYS
                $user = array(
                            "lodwaf",      // 0
                            "Lord Wiafe",  // 1
                            19,            // 2
                            "male",        // 3
                            "Ghana"        // 4
                        );
            
                // ECHOING THE ARRAYS
                echo $user[0].<"br">;
                echo $user[1].<"br">;
                echo $user[2].<"br">;
                echo $user[3].<"br">;
                echo $user[4].<"br">;
            
                //ASSOCIATIVE ARRAYS
                $people = array (
                                "username" => "lodwaf",
                                "fullname" => "Lord Wiafe",
                                "age" => 19,
                                "gender" => "male",
                                "country" => "Ghana",
                            );
            
                // ECHOING THE ASSOCIATIVE ARRAYS
                echo $people["username"].<"br">;
                echo $people["fullname"].<"br">;
                echo $people["age"].<"br">;
                echo $people["gender"].<"br">;
                echo $people["country"].<"br">;
                
            
                // MULTIPLE ARRAY
                $employees = array (
                                    
                            array (
                                "username" => "lodwaf",
                                "fullname" => "Lord Wiafe",
                                "age" => 19,
                                "gender" => "male",
                                "country" => "Ghana",
                                    ), 
                            array (
                                "username" => "beatwaf",
                                "fullname" => "Beatrice Wiafe",
                                "age" => 67,
                                "gender" => "female",
                                "country" => "Ghana",
                                    )

                        
                                );
            
                
                // ECHOING MULTIPLE ARRAYS
                echo $employees[0]["username"];
                echo $employees[1]["username"];
                echo $employees[0]["fullname"];
                echo $employees[1]["fullname"];
                echo $employees[0]["gender"];
                echo $employees[1]["gender"];
            ?>
        </div>
    </body>
</html>