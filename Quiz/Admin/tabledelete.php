<?php
include('header.html');
include('footer.html');
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
<h1> Delete Quiz</h1>
<div id="form">

<form method="post" action="tabledelete.php">
Enter the quiz title:<input type="text" name="top"><br><br>
<div class="button">
<button type="submit" class="w3-button w3-green w3-hover-teal" name="reg_user">Submit</button></div></div>
<?php
include('conn.php');
if(isset($_POST['reg_user']))
{
$top=$_POST['top'];

// sql to create table
$sql = "DROP TABLE $top";
if (mysqli_query($con, $sql)) {
    echo "<script>alert('Quiz $top Removed successfully')</script>";
	
} else {
    echo "Error creating table: " . mysqli_error($con);
}
}
?>
<br>
<?php
if(isset($_POST['reg_user']))
{
$top=$_POST['top'];
$sql="Delete from quiz_list where `quiz_name`='$top'";
if(mysqli_query($con,$sql)){
	echo "<script>alert('Data $top deleted successfully')</script>";
	
} else {
    echo "Error creating table: " . mysqli_error($con);
}
}
?>
</body>
</html>