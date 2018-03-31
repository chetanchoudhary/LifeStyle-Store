<?php
        require "common.php";
   

$email = mysqli_real_escape_string($con, $_POST['email']);

    $regex_email = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
if(!preg_match($regex_email, $email)){
    echo "incorrect";
}
$password = mysqli_real_escape_string($con, $_POST['password']);
    if(strlen($password) < 6){
        echo "password should have atleast 6 characters"; }
$password = md5($password);


$name = mysqli_real_escape_string($con, $_POST['name']);
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);

$select_query = "SELECT id FROM users WHERE email = '$email'";
$select_query_result = mysqli_query($con, $select_query);
$select_rows = mysqli_num_rows($select_query_result);
if ($select_rows > 0)
{
 echo "email already exists";
}
else
{
    $insert_query = "INSERT into users (email, password, name, city, contact, address) values ('$email', '$password', '$name', '$city', '$contact', '$address')";
        $insert_query_result = mysqli_query($con, $insert_query);
       
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con);
    
    header('location: products.php');
}
?>