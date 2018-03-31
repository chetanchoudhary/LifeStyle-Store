<?php
    require 'common.php';
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
$user_id = $_GET['id'];
$update_query = "UPDATE users_items SET status = 'Confirmed' WHERE user_id = '$user_id'";
$update_query_result = mysqli_query($con, $update_query);
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
      <div class="jumbotron">
          <h2>Success!</h2>
          <h4>Your Order is confirmed. Thank-you for shopping with us.</h4>
          <p><a href="products.php">Click here</a> to purchase any other item.</p>
      </div>
      
      
      </div>
       
         
         
          <?php
        include ROOT.'includes/footer.php';
        ?>
    
    </body>
</html>