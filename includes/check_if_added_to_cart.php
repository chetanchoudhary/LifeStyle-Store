<?php

function check_if_added_to_cart($item_id){
    $con = mysqli_connect("localhost", "root", "", "store");
    $user_id = $_SESSION['id'];
    
    $select_query = "SELECT * FROM users_items WHERE item_id = '$item_id' and user_id = '$user_id' and status='Added to cart'";
    
    $select_query_result = mysqli_query($con, $select_query);
    $rows = mysqli_num_rows($select_query_result);

    if($rows >= 1){
        return 1;
    }
    else{
        return 0;
    }
}
?>