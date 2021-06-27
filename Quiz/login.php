<?php 
include('login1.php');
?>
<html>
<head>
<title>Online Quiz Portal</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  	<h2>LOGIN</h2>
  </div>

<form method="post" action="login.php">
  	
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
  		Not yet a member? <a href="reg.php"> sign up</a>
  	</p>
  </form>
</div>
<?php
include('footer.html');
?>
</body>
</html>