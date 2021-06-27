<?php
include ('../conn.php');
include('../header.html');
?>

<!DOCTYPE html>
<html lang="en">
  <head> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Quiz Portal</title>
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
  <h2>Add Question</h2>

<div class="container">
  <form action="createquiz1.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Title</label>
      </div>
      <div class="col-75">
        <input type="text" id="title" name="title" placeholder="Enter the title">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Question</label>
      </div>
      <div class="col-75">
        <input type="text" id="question" name="question" placeholder="Enter the question">
      </div>
      </div>
  <div class="row">
  <div class="col-25">
        <label for="lname">Option1</label>
      </div>
      <div class="col-75">
        <input type="text" id="option1" name="option1" placeholder="Enter the option">
      </div></div>
   <div class="row">
  <div class="col-25">
        <label for="lname">Option2</label>
      </div>
      <div class="col-75">
        <input type="text" id="option2" name="option2" placeholder="Enter the option">
      </div></div>
      <div class="row">
  <div class="col-25">
        <label for="lname">Option3</label>
      </div>
      <div class="col-75">
        <input type="text" id="option3" name="option3" placeholder="Enter the option">
      </div></div>
      <div class="row">
  <div class="col-25">
        <label for="lname">Option4</label>
      </div>
      <div class="col-75">
        <input type="text" id="option4" name="option4" placeholder="Enter the option">
      </div></div>
      <div class="row">
  <div class="col-25">
        <label for="lname">Answer</label>
      </div>
      <div class="col-75">
        <input type="text" id="correct_answer" name="correct_answer" placeholder="Enter the answer">
      </div>
    </div>
  
    
    <div class="row">
      <button type="submit" value="Submit" name="submit">Add Question</button>
    </div>
	</div>

	  
	  
<?php 
if(isset($_POST['submit'])){
@$title=$_POST['title'];

 $fetchqry = "SELECT * FROM $title";
$result=mysqli_query($con,$fetchqry);
$num=mysqli_num_rows($result);  
//echo $num;//print_r( $result);



@$id = $num + 1;
echo $id;
@$que = $_POST['question'];
@$option1 = $_POST['option1'];
@$option2 = $_POST['option2'];
@$option3 = $_POST['option3'];
@$option4 = $_POST['option4'];
@$cans=$_POST['correct_answer']; 
//$qry="INSERT INTO `quiz` (`id`, `title`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`, `userans`, `timer`) VALUES ($id, '$que', '$ans', '$wans1', '$wans2', '$wans3', '$ans', '', '', '')";

//$qry1="INSERT INTO `$title` (`id`, `title`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`, `userans`, `timer`) VALUES ($id, '$title', '$que', '$ans', '$wans1', '$wans2', '$wans3', '$cans', '', '')";
$qry = "INSERT INTO `$title`(`id`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`) VALUES ($id,'$que','$option1','$option2','$option3','$option4','$cans')";
//$qry="INSERT INTO `$name` (`id`,`title`,`question`,`option1`,`option2`,`option3`,`option4`,`ans`,`userans`,`timer`) VALUES (`10`, `html`, `qwerty`, `wertyui`, `ertyu`, `ertyui`, `ertyuz`, `qwertyu`, `NULL`, `03:00`);"

//$qry="insert into `$name`(`title`,`question`,`option1`,`option2`,`option3`,`option4`,`ans`,`userans`,`timer`) values(`html`, `qwerty`, `wertyui`, `ertyu`, `ertyui`, `ertyuz`, `qwertyu`, `NULL`, `03:00`);"
//$qry = "INSERT INTO quiz('id','title','question','option1','option2','option3','option4','ans') VALUES($id,'$que','$ans','$wans1','$wans2','$wans3','$ans')";
echo $qry;

$done = mysqli_query($con,$qry);
if($done==TRUE){
	echo "<script> alert('Question and Answers Submitted Succesfully')</script>;";
}
else{
	echo"error";
}
}
?>
<h2> Add Timer</h2>
<div class="container">
  <form action="createquiz1.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Minutes</label>
      </div>
      <div class="col-75">
        <input type="text" id="title" name="min" placeholder="Enter the title">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Seconds</label>
      </div>
      <div class="col-75">
        <input type="text" id="question" name="sec" placeholder="Enter the question">
      </div>
      </div>
<div class="row">
      <button type="submit" value="Submit" name="Timer">Add Timer</button>
    </div>
	  </div>  
<?php
if(isset($_POST['Timer'])){
@$min = $_POST['min'];
@$sec = $_POST['sec'];
$timer = $min.':'.$sec;
echo"$timer";
$fetchqry3 = "UPDATE `$title` SET `timer`='$timer' WHERE`id`=1";
$result3 = mysqli_query($con,$fetchqry3);
if($result3==TRUE){
	echo "<script> alert('The timer currently set to $timer')</script>";
}
}
?>
