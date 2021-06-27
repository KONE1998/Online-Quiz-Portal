<?php

include('../admin1.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head> 
    <title>Simple Quiz</title>

    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>
    <!-- Fixed navbar -->
  
			

			<h3>WELCOME : <?php

echo $_SESSION["email"];
?>
 </h3>
		
      
      

<div class="title">
        <h1>Add Quiz</h1><br><br>
        <form action="createquiz.php" method="post">
		<div id="que">
               
               Title: <input type="text" id="title" name="title" placeholder="Enter your quiz title" Required>
         <br><br>
             Ask Question
                <input type="text" id="question" name="question" placeholder="Enter your question here" Required><br><br>
			option 1:
                <input type="text" id="option1" name="option1" placeholder="Enter the correct answer here" Required><br><br>
            option 2:
                <input type="text" id="option2" name="option2" placeholder="Wrong answer 1" Required><br><br>
			option 3:
                <input type="text" id="option3" name="option3" placeholder="Wrong answer 2" Required><br><br>
			option 4:
                <input type="text" id="option4" name="option4" placeholder="Wrong answer 3" Required>
			correct answer:
                <input type="text" id="correct_answer" name="correct_answer" placeholder="Wrong answer 3" Required>
            </div><br><br>
            <button type="submit"  value="Submit" name="submit"> Add Question</button><br><br>

        </form>
    </div>
     </div>
	 
	 <?php if(isset($_POST['submit'])){
		 $title=$_POST['title'];
$fetchqry = "SELECT * FROM 'quiz'";

$result=mysqli_query($con,$fetchqry);
$num=mysqli_num_rows($result);
@$id = $num + 1;
@$title=$_POST['title'];
@$question = $_POST['question'];
@$option1 = $_POST['option1'];
@$option2 = $_POST['option2'];
@$option3 = $_POST['option3'];
@$option4 = $_POST['option4']; 
@$ans = $_POST['correct_answer'];
$qry = "INSERT INTO `quiz`(`id`,`title`, `question`, `option1`, `option2`, `option3`, `option4`, `ans`) VALUES ($id,'$title','$question','$option1','$option2','$option3','$option4','$ans')";
$done = mysqli_query($con,$qry);
if($done==TRUE){
	echo "Question and Answers Sumbmitted Succesfully";
}
	 }
?>
<div class="row">
<div class="title">
    
<h2>Set New Timer</h2>
<form action="" method="post">

                <label for="minute" >Minutes</label>
                <input type="digit" class="form-control input-group-lg reg_name" name="min" placeholder="Min" Required>
			<br><br>
<div class="col-sm-3">
                <label for="second" >Seconds</label>
                <input type="digit" class="form-control input-group-lg reg_name" name="sec" placeholder="Sec" Required>
            </div><br><br>
			<button type="submit" class="btn btn-primary btn-large" value="submit" name="timesubmit">+Set Timer</button>
<form>
</div></div>
<?php
if(isset($_POST['timesubmit'])){
@$min = $_POST['min'];
@$sec = $_POST['sec'];
$timer = $min.':'.$sec;
$fetchqry3 = "UPDATE `quiz` SET `timer`='$timer' WHERE`id`=1";
$result3 = mysqli_query($con,$fetchqry3);
if($result3==TRUE){
	echo "The timer currently set to $timer";
}
}
?>