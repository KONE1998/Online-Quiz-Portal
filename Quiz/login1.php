<?php
include('header.html');
require('conn.php');
session_start();

if (isset($_POST['login_user'])){
        // removes backslashes
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE  email='$email'
and password='$password'";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['email'] = $email;
            // Redirect user to index.php
	    header("Location: selectquiz1.php");
         }else{
	echo "<script>alert('wrong email and password combination')</script>";
	}
    }
?>



