<?php
include '../dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head> 
    <title>Simple Quiz</title>

    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>
    <!-- Fixed navbar -->
  <div id = 'menu-container'>
			<div id = 'name'>
				<h3>Welcome admin</h3>
			</div>

			<div id = 'links'>
				<ul>
					<li><a href = 'quizs.html'>Home</a></li>
					<li><a href = 'logout.php'>logout</a></li>
				</ul>
			</div>
		</div>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="row">
<div class="title">
        <h1>Add Quiz</h1><br><br>
        <form action="" method="post">
            <div class="form-group">
                <label for="question1">Ask Question</label>
                <input type="text" class="form-control" id="question" name="question" placeholder="Enter your question here" Required>
            </div><br><br>
            <div class="form-group">
                <label for="correct_answer">Correct answer</label>
                <input type="text" class="form-control" id="correct_answer" name="correct_answer" placeholder="Enter the correct answer here" Required>
            </div><br><br>
            <div class="form-group">
                <label for="wrong_answer1">Wrong Answers</label>
                <input type="text" class="form-control" id="wrong_answer1" name="wrong_answer1" placeholder="Wrong answer 1" Required>
            </div><br><br>
            <div class="form-group">
                <label class="sr-only" for="wrong_answer2">Wrong Answers 2</label>
                <input type="text" class="form-control" id="wrong_answer2" name="wrong_answer2" placeholder="Wrong answer 2" Required>
            </div><br><br>
            <div class="form-group">
                <label class="sr-only" for="wrong_answer3">Wrong Answers 2</label>
                <input type="text" class="form-control" id="wrong_answer3" name="wrong_answer3" placeholder="Wrong answer 3" Required>
            </div><br><br>
            <button type="submit" class="btn btn-primary btn-large" value="submit" name="submit">+ Add Question</button><br><br>

        </form>
    </div>
     </div>
	 
	 <?php if(isset($_POST['submit'])){
$fetchqry = "SELECT * FROM `css`";
$result=mysqli_query($con,$fetchqry);
$num=mysqli_num_rows($result);
@$id = $num + 1;
@$que = $_POST['question'];
@$ans = $_POST['correct_answer'];
@$wans1 = $_POST['wrong_answer1'];
@$wans2 = $_POST['wrong_answer2'];
@$wans3 = $_POST['wrong_answer3']; 
$qry = "INSERT INTO `css`(`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`) VALUES ($id,'$que','$ans','$wans1','$wans2','$wans3','$ans')";
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
$fetchqry3 = "UPDATE `css` SET `timer`='$timer' WHERE`id`=1";
$result3 = mysqli_query($con,$fetchqry3);
if($result3==TRUE){
	echo "The timer currently set to $timer";
}
}
?>