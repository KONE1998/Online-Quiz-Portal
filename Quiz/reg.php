<?php
error_reporting(E_ERROR | E_PARSE);
require_once('mail/PHPMailerAutoload.php');
$mail= new PHPMailer();
include('header.html');
include_once('conn.php');
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$sql = "INSERT INTO users (name, gender, email,mobile,password)
VALUES ('$username','$gender','$email','$mobile','$password')";

if (mysqli_query($con, $sql)) {
   echo "<script>alert('Registration Successful')</script>";
   
   

//Send mail using gmail

require_once('PHPMailerAutoload.php');
$mail = new PHPMailer(true);

//Send mail using gmail
$mail->IsSendmail();

    $mail->IsSMTP(); // telling the class to use SMTP
   // $mail->SMTPDebug = 2;
	//$mail->SMTPDebug = 1;
	$mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->Username = "dineshkumar.r2016@vitstudent.ac.in"; // GMAIL username
    $mail->Password = "61951224"; // GMAIL password
    //$mail->SMTPDebug = 3 ;
$email2 = "dineshkumar.r2016@vitstudent.ac.in";
$name = "name";
//Typical mail data
$mail->AddAddress($email, $name);
$mail->SetFrom($email2, "name");
$mail->Subject = "Mail from AngularJS";
$mail->Body = "This mail is sent from AngularJS";

try{
    $mail->Send();
    echo "Success!";
} catch(Exception $e){
    //Something went bad
    echo "Fail - " . $mail->ErrorInfo;
}
   
   
   
   
   
   
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="reg.php">
  
  	<div class="input">
  	  <label>Username</label>
  	  <input type="text" name="username" required>
  	</div>
  	<div class="input">
  	  <label>Email</label>
  	  <input type="email" name="email" required>
  	</div>
	<div class="input1">
  	  <label>GENDER</label>
  	  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br> 
  	</div>
	<div class="input">
  	  <label>MOBILE NUMBER</label>
  	  <input type="text" name="mobile"required>
  	</div>
  	<div class="input">
  	  <label>Password</label>
  	  <input type="password" name="password"required>
  	</div>
  	<div class="input">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_1"required>
  	</div>
  	<div class="input">
  	  <button type="submit" class="btn" name="submit">Register</button>
  	</div>
  	<p id="page">
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>