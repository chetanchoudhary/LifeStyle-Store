<?php  
        require 'common.php';
    if (!isset($_SESSION['email'])){
        header('location: login.php');
    }
?>



<!DOCTYPE HTML>

<html>
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Lifestyle Store</title>
        <link rel="stylesheet" type="text/css" href="index.css">

    </head>
    <body>
    
   <?php
        define('ROOT', './');
        include ROOT.'includes/header.php';
        ?>
   
   <div class="container">
       <div class="jumbotron" style="margin: 100px">
           <h3>ADD items to cart first.<a href="products.php">Click here</a></h3>
           <p>Your cart is Empty :(</p>
       </div>
   </div>
   
   
   
   
   
   
    <?php
        include ROOT.'includes/footer.php';
        ?>
    
    </body>
</html>