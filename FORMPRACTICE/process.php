<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $username = htmlspecialchars(trim($_POST["username"]));
    $password = htmlspecialchars(trim($_POST["password"]));

    if(!empty($username) && !empty($password)){
        echo "name: ".$username."<br>";
        echo "password : ".$password;
    }else{
        echo "<script type='text/javascript'>alert('Hello, input your info');</script>";

    }

    echo $username;
    echo $password;
};

?>