<html>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
require('conn.php');
session_start();

if (isset($_POST['submit'])){
        // removes backslashes
	$email = stripslashes($_REQUEST['email']);
       
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `admin` WHERE  email='$email'
and password='$password'";
	$result = mysqli_query($con,$query) or die(mysqli_error($con));
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['email'] = $email;
            // Redirect user to index.php
	    header("Location: quizs.html");
         }else{
	echo "<script>alert('invalid details');</script>
	<div id='v'><h2>click here to <a href='admin.php'>Login</a></h2></div>";
	}
    }
?>
</body>
</html>