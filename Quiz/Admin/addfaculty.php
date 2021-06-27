<?php
include('ad1.php');

?>
<!DOCTYPE html>
<head>
<title>Online Quiz</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="title.css">
<style>
#footer{
	text-align:center;
	font-weight:bold;
	background-color:#b3d1ff;
	color:#004d00;
  position: relative;
  bottom: 0;
  width: 100%;
  height: 50px;
}

<!----- style for form ---->
* {
  box-sizing: border-box;
}
h2{
	text-align:center;
	margin:1%;
}


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=password], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

button[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

button[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<h3>WELCOME : <?php

echo $_SESSION["email"];
?></h3>
<form action="addfaculty.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Email_id</label>
      </div>
      <div class="col-75">
        <input type="text" id="title" name="title" placeholder="Enter the email">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="question" name="question" placeholder="Enter the password">
      </div>
      </div>
 <div class="row">
      <button type="submit" value="Submit" name="submit">Add Faculty</button>
    </div>
	</form>

<?php
	if(isset($_POST['submit'])){


$que = $_POST['title'];
$option1 = $_POST['question'];
$qry = "INSERT INTO ad('email','password') VALUES('$que','$option1')";
$done = mysqli_query($con,$qry);
if($done==TRUE){
	echo "<script> alert('Faculty Added Successfully')</script>;";
}
else{
	echo"error";
}
}
include('footer.html');
?>
</body>
</html>