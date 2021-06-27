<?php 
include('ad1.php');
if (!isset($_SESSION['email'])) {
		$_SESSION['msg'] = "You must log in first";
	/*	header('location: login.php'); */
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		//header("location: ad.php");
	}
?>
<html>
<head>
<title>Online Quiz Portal</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  	<h2>ADMIN LOGIN</h2>
  </div>

<form method="post" action="ad1.php">
  	
  	<div class="input">
  		<label>E-Mail_id</label>
  		<input type="email" name="email" >
  	</div>
 <div class="input">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div> 
  	<div class="input">
  		<button type="submit" class="btn" name="login_user">LOGIN</button>
  	</div>
  	<p id="page">
  		
  	</p>
  </form>
</div>
<?php
include('footer.html');
?>
</body>
</html>