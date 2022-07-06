<?php

session_start();header('location:login.php');

$con=mysqli_connect('localhost','root','emsUwu@ss1st');

mysqli_select_db('uwuassist');

$name  = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password']; 

$s ="select * from login_info where Name ='$name' && E-mail = '$email' && Password = '$passwod'";

$result= mysqli_query($con,$s);
$num= mysqli_num_rows($result);

if($num==1){

    header('location:home.php');
}else{
    header('location:login.php');
}

?>