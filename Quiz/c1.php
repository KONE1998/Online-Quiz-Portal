<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'reg');
	if (isset($_POST['reg_user'])) {
	$username=$_POST['username'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$password=$_POST['password'];
	
	
	$query = "INSERT INTO reg (username, email, number, password) 
					  VALUES('$username', '$email','$number', '$password')";
 mysqli_query($db, $query);
	}
?>