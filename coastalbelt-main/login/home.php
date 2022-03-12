<?php

session_start();
if(!isset($_SESSION['username'])){

    header('location:login.php');
    
}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Coastalbelt|HOME</title>
</head>
<body>
    <div class='container'>
    <header>
        <h1 class="text-center text-success">WELCOME <?php echo $_SESSION['username']; ?></h1>
        <a href="logout.php"> LOGOUT </a>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">Shop</a>
        <a href="#">Men</a>
        <a href="#">Women</a>
        <a href="#">Unisex</a>
    </nav>
</body>
</html>
