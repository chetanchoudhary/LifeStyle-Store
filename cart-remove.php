<?php
    require 'common.php';
    
    
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];

    $delete_query = "DELETE from users_items WHERE item_id = '$item_id' and user_id = '$user_id'";
    $delete_query_result = mysqli_query($con, $delete_query);
    
    header('location: cart.php');

?>