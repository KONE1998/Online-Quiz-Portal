<?php
include('header.html');
include('footer.html');
if (isset($_POST['Submit'])){
$answer1 = $_POST['q1'];
$answer2 = $_POST['q2'];

$answer3 = $_POST['q3'];

$answer4 = $_POST['q4'];

$answer5 = $_POST['q5'];
$answer6 = $_POST['q6'];
$answer7 = $_POST['q7'];
$answer8 = $_POST['q8'];
$answer9 = $_POST['q9'];
$answer10 = $_POST['q10'];
$answer11 = $_POST['q11'];
$totalCorrect = 0;

if ($answer1 == "B") { $totalCorrect++; }

if ($answer2 == "A") { $totalCorrect++; }

if ($answer3 == "C") { $totalCorrect++; }

if ($answer4 == "A") { $totalCorrect++; }

if ($answer5) { $totalCorrect++; }
if ($answer6 == "A") { $totalCorrect++; }
if ($answer7 == "A") { $totalCorrect++; }
if ($answer8 == "A") { $totalCorrect++; }
if ($answer9 == "A") { $totalCorrect++; }
if ($answer10 == "A") { $totalCorrect++; }
if ($answer11 == "A") { $totalCorrect++; }

echo "<h1 class='head'>Your scored Mark:<div id='results'>$totalCorrect / 11 correct</div></h1>";

if($totalCorrect =="1"){
	echo"<h2 class='head'>poor performance Try To Improve</h2>";
}
if($totalCorrect =="5"){
	echo"<h2 class='head'>Put little effort to get Excellent Performance</h2>";
}
if($totalCorrect =="9"){
	echo"<h2 class='head'>Best Performance</h2>";
}

}

?>
<html>
<head>
<style>
.head{
	text-align:center;
	margin:2%;
}
</head>
<body>
</body>
</html>