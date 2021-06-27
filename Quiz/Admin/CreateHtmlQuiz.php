<!DOCTYPE html>

<head>
<title>
Create HTML Quiz
</title>

<link rel="stylesheet" type="text/css" href="CreateHtmlQuiz.css">
</head>

<body>

	<div id="menu">
		
		<h1 id="title">Welcome Admin</h1>
		<h2 id="user">
		<?php
		include_once('configAdminLogin.php');
		echo $_SESSION["Email"];
		?>
		</h2>
		<h2 id="logout"><a href="configLogout.php">Logout</a><h2>
		
	</div>
	
	<div id="div1">
		<form id="form" method="post" action="configCreateHtmlQuiz.php">
			<div>
			<p id="p1">Question :</p>
			<input id="p1t" type="text" name="Question" placeholder = "Enter the Question Here">
			</div>
		<br>
			<div>
			<p id="p2">Option A :</p>
			<input id="p2t" type="text" name="OptionA" placeholder="Enter Option A here">
			</div>
		<br>
			<div>
			<p id="p3">Option B :</p>
			<input id="p3t" type="text" name="OptionB" placeholder="Enter Option B here">
			</div>
			
		<br>
			<div>
			<p id="p4">Option C :</p>
			<input id="p4t" type="text" name="OptionC" placeholder="Enter Option C here">
			</div>
		
		<br>
			<div>
			<p id="p5">Option D :</p>
			<input id="p5t" type="text" name="OptionD" placeholder="Enter Option D here">
			</div>
		<br>
			<div>
			&nbsp; &nbsp;<p id="p6">Answer :</p>
			<input id="p6t" type="text" name="Answer" placeholder="Enter the Correct Answer here">
			</div>
		
		<br><br>
	
		<center>
			<input id="Submit" type="submit" value="+Add Question" name="Submit">	
		</center>
		
		<br><br>
			
			<div>
			<p id="p7">Minutes:</p>
			<input id="p7t" type="digit" name="Minutes" placeholder="Minutes">
			</div>
		<br>
			<div>
			<p id="p8">Seconds :</p>
			<input id="p8t" type="digit" name="Seconds" placeholder="Seconds">
			</div>
		<br><br>
		
		<center>
			<input id="Submit" type="submit" value="+Set Timer" name="TimeSubmit">
		</center>
		</form>	
	</div>


</body>

</html>