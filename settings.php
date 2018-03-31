<?php
    require 'common.php';
    if(!isset($_SESSION['email'])){
        
    header('location: index.php');
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
   <link rel="stylesheet" type="text/css" href="footer.css">

    </head>
    <body>
    
         <?php
        define('ROOT', './');
        include ROOT.'includes/header.php';
        ?>
        
   <div class="container" style="margin-top: 100px">
       <div class="row">
           <div class="col-xs-8 col-xs-offset-2">
               <h1>Change Password</h1>
               <form action="settings_script.php" method="post">
                   <div class="form-group">
                       <input type="password" name="old_password" required="true" class="form-control" placeholder="Old Password">
                   </div>
                   <div class="form-group">
                       <input type="password" name="new_password" required="true" class="form-control" placeholder="New Password">
                   </div>
                   <div class="form-group">
                       <input type="password" name="renew_password" required="true" class="form-control" placeholder="Re-type New Password">
                   </div>
                   <button type="submit" class="btn btn-primary">Change</button>
               </form>
           </div>
       </div>
   </div>
   
       
          <?php
        include ROOT.'includes/footer.php';
        ?>
    
    </body>
</html>