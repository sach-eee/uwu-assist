<?php

session_start();

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'uwuassist');

$email = $_POST['email'];
$password = $_POST['password']; 



$s ="select * from login_info where email ='$email'";

// echo $s;

$result= mysqli_query($con, $s);
$num= mysqli_num_rows($result);


if($num==1){
    echo "Have account:";
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        // If you want to display all results from the query at once:
        // print_r($row);
    
        // If you want to display the results one by one
        echo $row['username'];
        echo $row['password']; // etc..
    
    }
    
}else{

    echo "no account.";
}

?>