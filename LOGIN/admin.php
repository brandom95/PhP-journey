<?php 
session_start();

if(!isset($_SESSION['logged_id']) && $_SESSION['logged_in'] !== true){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome <?php echo $_SESSION['username'] ?> to admin</h2>
    <a href="logout.php"> Log out</a>
</body>
</html>