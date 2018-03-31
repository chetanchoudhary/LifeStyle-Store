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
   <link rel="stylesheet" type="text/css" href="footer.css">

    </head>
    <body>
    
        <?php
       define('ROOT', './');
        include ROOT.'includes/header.php';
        ?>
        
        <?php
   $user_id = $_SESSION['id'];
    $select_query= "SELECT * FROM users_items INNER JOIN items ON users_items.item_id = items.id WHERE user_id = '$user_id' and status = 'Added to cart'";
    $select_query_result = mysqli_query($con, $select_query);
    $rows = mysqli_num_rows($select_query_result);
     
    $sum = 0;
        ?>
        
        <?php
    if ($rows == 0){
        header('location: no_items.php');
    }
    
      
    
   ?>
        
        
    <div class="container" style="margin: 100px">
      <?php
        $select_query= "SELECT * FROM users_items INNER JOIN items ON users_items.item_id = items.id WHERE user_id = '$user_id'";
    $select_query_result = mysqli_query($con, $select_query);
    $rows = mysqli_num_rows($select_query_result);
       
        
      echo '<table class="table">';

    echo '<tr>';
    
         echo '<th>'."Item Number".'</th>';
        echo '<th>'."Item Name".'</th>';
        echo '<th>'."Price".'</th>';
        echo '<th>'."".'</th>';
        
      
   echo '</tr>';
        $itemno = 1; 
        while($array = mysqli_fetch_array($select_query_result)){
            
         echo '<tr>';
    
         echo '<td>'.$itemno.'</td>';
        echo '<td>'.$array['name'].'</td>';
        echo '<td>'.$array['price'].'</td>';
        echo '<td>'."<a href='cart-remove.php?id={$array['id']}' class='remove_item_link'><button type='submit' class='btn btn-danger'>Remove</button></a>".'</td>';
        
      
   echo '</tr>';
            $sum = $sum + $array['price'];
            $itemno = $itemno + 1;
        }
        echo '<tr>';
    
         echo '<th>'."".'</th>';
        echo '<th>'."Total".'</th>';
        echo '<th>'."Rs.". $sum .'</th>';
        echo '<th>'."<a href='success.php?id={$_SESSION['id']}'><button type='submit' class='btn btn-primary'>Confirm Order</button>".'</th>';
        
      
   echo '</tr>';
        
echo '</table>';
    ?>
        </div>
    
        <?php
        include ROOT.'includes/footer.php';
        ?>
    
    </body>
</html>