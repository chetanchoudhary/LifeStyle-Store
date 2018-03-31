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
        <title>signup</title>
        <link rel="stylesheet" type="text/css" href="footer.css">
    </head>
    
   <body>
      
       <?php
        define('ROOT', './');
        include ROOT.'includes/header.php';
       ?>
         
        
        <div class="row">
        
        <div class="container" style="margin-bottom: 100px; margin-top: 100px">
           
           <div class="col-xs-8 col-xs-offset-2">
           
             <h1>SIGN-UP</h1> <br>
            <form method="post" action="signup_script.php">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name" required="true">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" pattern=".{6,}" required="true">
                </div>
                <div class="form-group">
                    <input type="tel" name="contact" class="form-control" placeholder="Contact" required="true">
                </div>
                <div class="form-group">
                    <input type="text" name="city" class="form-control" placeholder="City" required="true">
                </div>
                <div class="form-group">
                    <input type="text" name="address" class="form-control" placeholder="Address" required="true">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
            
        </div>
        
        </div>
       </div>
        
       <?php
       
        include ROOT.'includes/footer.php';
        ?>
        
        
   </body>
   
</html>