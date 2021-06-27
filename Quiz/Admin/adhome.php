<?php
include('ad1.php');
include('footer.html');
?>
<!DOCTYPE html>
<head>
<title>Online Quiz</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="title.css">
</head>
<body>
<h3>WELCOME : <?php

echo $_SESSION["email"];
?></h3>
<div class="w3-center">
<div class="w3-container">

  
  <a href="addfaculty.php" class="w3-button w3-green w3-hover-teal">Add Faculty</a>
  <a href="deletefaculty.php" class="w3-button w3-green w3-hover-teal">Remove Faculty</a>

  
</div>
</div>
</body>
</html>