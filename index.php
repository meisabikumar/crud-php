<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

    <style>
        .btn{
            margin: 5px;
        }
    </style>
    
</head>
<body>




<div style="margin-top:200px; text-align:center" >
<h1>Add New Product</h1>
<div style="display: flex; justify-content:center;">
<a class="btn btn-primary" href="products/bangles/view-bangles-list.php" type="button">Bangles</a>
    <a class="btn btn-primary" href="products/bracelets/view-bracelets-list.php" type="button">Bracelets</a>
    <a class="btn btn-primary" href="products/earrings/view-earrings-list.php" type="button">earings</a>
    <a class="btn btn-primary" href="products/necklaces/view-necklaces-list.php" type="button">necklaces</a>
    <a class="btn btn-primary" href="products/rings/view-rings-list.php" type="button">rigs</a>
    </div>

    
</div>
    
</body>
</html>