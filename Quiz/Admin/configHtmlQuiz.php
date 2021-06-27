<?php

if(isset($_POST['Submit']))
{
	
	$answer1 = $_POST['Q1'];
	$answer2 = $_POST['Q2'];
	$answer3 = $_POST['Q3'];
	$answer4 = $_POST['Q4'];
	$answer5 = $_POST['Q5'];
	$answer6 = $_POST['Q6'];
	$answer7 = $_POST['Q7'];
	$answer8 = $_POST['Q8'];
	$answer9 = $_POST['Q9'];
	$answer10 = $_POST['Q10'];
	$totalcorrect = 0;
	
	
	if ($answer1 == ".html") { $totalcorrect++; }
	if ($answer2 == "2D") { $totalcorrect++; }
	if ($answer3 == "3A") { $totalcorrect++; }
	if ($answer4 == "4D") { $totalcorrect++; }
	if ($answer5 == "5A") { $totalcorrect++; }
	if ($answer6 == "6B") { $totalcorrect++; }
	if ($answer7 == "7B") { $totalcorrect++; }
	if ($answer8 == "8C") { $totalcorrect++; }
	if ($answer9 == "dir") { $totalcorrect++; }
	if ($answer10 == "10B") { $totalcorrect++; }
	
	echo "$totalcorrect / 10 correct";
}

?>