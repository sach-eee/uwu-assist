<?php

session_start();
// header('location:login.php');

//trigger exception in a "try" block
try {
    $con=mysqli_connect('localhost','root','');
    //If the exception is thrown, this text will not be shown
    echo 'If you see this, the number is 1 or below';
  }
  
  //catch exception
  catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
  



mysqli_select_db($con, 'uwuassist');

$name  = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password']; 

$s ="select * from login_info where username ='$name'";



$result= mysqli_query($con,$s);
$num= mysqli_num_rows($result);

if($num==1){

    echo"Username Already Taken";
}else{

    try {
        $log="insert into login_info values ('$name', '$email', '$password');";
        mysqli_query($con,$log);
        echo "Registration successfull";
    }  
    //catch exception
    catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
}   
?>