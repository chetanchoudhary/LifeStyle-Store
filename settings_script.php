<?php
require 'common.php';
if(!isset($_SESSION['email'])){
    header('location: index.php');
}

    $old_password = mysqli_real_escape_string($con, $_POST['old_password']);
    $new_password = mysqli_real_escape_string($con, $_POST['new_password']);
    $renew_password = mysqli_real_escape_string($con, $_POST['renew_password']);
    
    $old_password = md5($old_password);
    $new_password = md5($new_password);
    $renew_password = md5($renew_password);


$select_query= "SELECT id, password FROM users WHERE password = '$old_password'";
$select_query_result = mysqli_query($con, $select_query);
$rows = mysqli_num_rows($select_query_result);
$array = mysqli_fetch_array($select_query_result);
$id= $array['id'];
if($rows==0){
    echo "wrong password";
        header('location: logout_script.php');
}
    else{
        $update_query= "UPDATE users SET password='$new_password' WHERE id='$id'";;
        $update_query_result = mysqli_query($con, $update_query);
        header('location: products.php');
    }

?>
