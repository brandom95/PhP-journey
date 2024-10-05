<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usernameErr = $emailErr ="";
    $username = $email = '';

    if(empty($_POST['username'])){
        $usernameErr = "Username is required";
        
    } else{
        $username = htmlspecialchars(trim($_POST['username']));
 

    }

    // email field

    if(empty($_POST['email'])){
        $emailErr = "Email is required";
        
    } else{
        $email = htmlspecialchars(trim($_POST['email']));
        //html validation
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
        }
    }

    //error handler 
    
    if(empty($usernameErr) && empty($emailErr)){
        echo "Form submitted";
        echo "<br>";
        echo "Username: ".$username."<br>"."Email: ".$email."<br>";
    } else{
        echo "Error: <br>";
        echo $usernameErr."<br>".$emailErr;
    }

    

    
    
}
?>