<?php

session_start();

$con=mysqli_connect('localhost','root','emsUwu@ss1st');

mysqli_select_db('uwuassist')

$email = $_POST['email'];
$password = $_POST['password']; 

$s ="select * from login_info where Email ='$email'";

$result= mysqli_query($con,$s);
$num= mysqli_num_rows($result);

if($num==1){

    echo"Username Already Taken";
}else{
    $log="insert into login_info(Email,Password)values('$email' ,'$password')";
    mysqli_query($con,$log);
    echo
}

?>