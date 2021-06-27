<?php

include('footer.html');
include('admin1.php');
?>
<!DOCTYPE html>
<head>
<title>Online Quiz</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
#form{
	margin-left:35%;
	margin-top:8%;
	font-weight:bold;
}
h1{
	text-align:center;
}
.button{
	margin-left:15%;
}
</style>
</head>
<body>
<h1> Create Quiz</h1>
<div id="form">

<form method="post" action="tablecreate.php">
Enter the quiz title:<input type="text" name="top"><br><br>
<div class="button">
<button type="submit" class="w3-button w3-green w3-hover-teal" name="reg_user">Submit</button></div></div>
<?php
if(isset($_POST['reg_user']))
{
$top=$_POST['top'];

// sql to create table
$sql = "CREATE TABLE $top (
  `id` int(255) NOT NULL,
  `question` text NOT NULL,
  `option1` varchar(222) NOT NULL,
  `option2` varchar(222) NOT NULL,
  `option3` varchar(222) NOT NULL,
  `option4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text,
  `timer` varchar(50) NOT NULL DEFAULT '03:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Table $top created successfully')</script>";
	
} else {
    echo "Error creating table: " . mysqli_error($con);
}
}
?>
<?php
if(isset($_POST['reg_user'])){
	$top=$_POST['top'];
	$email=$_SESSION['email'];
$sql="insert into quiz_list(`quiz_name`,`admin`) VALUES('$top','$email')";
if(mysqli_query($con,$sql)){
	echo "<script>alert('Data $top inserted successfully')</script>";
	
} else {
    echo "Error creating table: " . mysqli_error($con);
}
	
}
?>

</body>
