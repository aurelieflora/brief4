<?php
include('connect.php');

if (isset($_POST["connexion"])) {
    
    
    $email = addslashes($_POST["email"]);
    $motDepasse = addslashes($_POST["motDepasse"]);
    



    
            
            $sql = ("INSERT INTO  `users`(email, motDepasse) 
          VALUES('$email', '$motDepasse')");
            if (mysqli_query($conn, $sql)) {
                header('location:connexion.php');
            } else {
                echo "error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
        
    }

 