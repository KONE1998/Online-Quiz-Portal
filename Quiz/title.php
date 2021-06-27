<?php  
include('login1.php');
 
	if (!isset($_SESSION['email'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<head>
<title>Title page</title>
<link rel="stylesheet" href="title.css">
</head>
<body>
<h3>WELCOME : <?php

echo $_SESSION["email"];
?></h3>
<div id="header-container">
<h1><center> Select the Course to Start the Quiz</center></h1>
</div>
<div id="subject-container">
<a href="htmlquiz1.php" target="_blank" >HTML</a>
<a href="#">CSS</a>
<a href="#">JAVASCRIPT</a>
<a href="#">PHP</a>
<a href="#">MYSQL</a>
</div>
<?php
include('footer.html');
?>
</body>
</html>