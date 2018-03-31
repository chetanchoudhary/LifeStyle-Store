<?php  
        require 'common.php';
    if (isset($_SESSION['email'])){
        header('location: products.php');
    }

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$password = md5($password);

$select_query = "SELECT id, email FROM users WHERE email = '$email' and password='$password'";
$select_query_result = mysqli_query($con, $select_query);
$rows = mysqli_num_rows($select_query_result);
$array = mysqli_fetch_array($select_query_result);
if($rows==0)
{
    echo "wrong password";
}
else{
$_SESSION['email'] = $email;
$_SESSION['id'] = $array['id'];
header('location: products.php');
}
?>