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
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="footer.css">
    </head>
    
   <body>
       
       <?php
       define('ROOT', './');
        include ROOT.'includes/header.php'; 
       ?>
        
        <div class="container" style="margin-top: 100px; margin-bottom: 100px">
           <div class="col-xs-8 col-xs-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Login to make a Purchase</h4>
                </div>
                <div class="panel-body">
                    <form method="post" action="login_submit.php">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" required="true">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
                <div class="panel-footer">
                    <p>Don't have an account?<a href="signup.php"> Register</a></p>
                </div>
                
            </div>
        </div>
       </div>
           
           <?php 
       include ROOT.'includes/footer.php';
       
       ?>
        
        
        
   </body>
   
</html>