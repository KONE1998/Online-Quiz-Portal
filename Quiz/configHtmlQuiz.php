<?php

if(isset($_POST['Submit']))
{
	
	$answer1 = $_POST['Q1'];
	$answer2 = $_POST['Q2'];
	$answer3 = $_POST['Q3'];
	$answer4 = $_POST['Q4'];
	$answer5 = $_POST['Q5'];
	$totalcorrect = 0;
	
	if ($answer1 == "1A") { $totalcorrect++; }
	if ($answer2 == "2A") { $totalcorrect++; }
	if ($answer3 == "3A") { $totalcorrect++; }
	if ($answer4 == "4A") { $totalcorrect++; }
	if ($answer5 == "5A") { $totalcorrect++; }
	
	echo "$totalcorrect / 5 correct";
}

?>