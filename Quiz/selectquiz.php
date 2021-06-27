<?php
session_start();
 if (isset($_REQUEST["reg_user"])) {
	$title=$_REQUEST["title"];
	$_SESSION['name']=$title;
echo "$title";
header("Location: htmlquiz1.php");

 }
 ?>
