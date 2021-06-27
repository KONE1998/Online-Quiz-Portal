<?php 

if(isset($_POST['submit'])){
@$title=$_POST['title'];
	 $fetchqry = "SELECT * FROM `$title`";
$result=mysqli_query($con,$fetchqry);
$num=mysqli_num_rows($result);

@$id = $num + 1;
@$que = $_POST['question'];
@$ans = $_POST['correct_answer'];
@$wans1 = $_POST['wrong_answer1'];
@$wans2 = $_POST['wrong_answer2'];
@$wans3 = $_POST['wrong_answer3']; 
$qry = "INSERT INTO `$title`(`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`) VALUES ($id,'$que','$ans','$wans1','$wans2','$wans3','$ans')";
$done = mysqli_query($con,$qry);
if($done==TRUE){
	echo "<script> alert('Question and Answers Sumbmitted Succesfully')</script>;";
}
	 }
?>