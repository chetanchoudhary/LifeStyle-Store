<?php  
        require 'common.php';
    if (isset($_SESSION['email'])){
        header('location: products.php');
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
       
    <div id="banner_image" class="img-responsive">
        <div class="container">
            <div id="banner_content">
                <h1>We Sell Lifestyle.</h1>
                <p>Flat 40% OFF on premium brands.</p>
                <a href="products.php"><button type="button" class="btn btn-danger btn-lg active">Shop Now</button></a>
            </div>
        </div>
        
    </div>
    <?php
        include ROOT.'includes/footer.php';
        ?>
    
    </body>
</html>