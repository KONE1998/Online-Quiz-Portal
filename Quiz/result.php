<?php
ini_set('error_reporting',0);
ini_set('display_errors',0);
include('footer.html');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      
    <title>Online Quiz Portal</title>
<style>
.result{
	text-align:center;
}
</style>
   
  </head>
<body>			
				<p>Welcome</p> <p><?php
				
	include_once('login1.php');
	echo $_SESSION["email"];
	?></p>
  



<?php
include('selectquiz.php');
@$title=$_SESSION['name'];
$fetchqry = "SELECT * FROM `$title`";
$result=mysqli_query($con,$fetchqry);
$num=mysqli_num_rows($result);
$i=1;
for($i;$i<=$num;$i++){
@$userselected = $_POST[$i];
$fetchqry2 = "UPDATE `$title` SET `userans`='$userselected' WHERE `id`=$i"; 
mysqli_query($con,$fetchqry2);
} 
$qry3 = "SELECT `ans`, `userans` FROM `$title`;";
$result3 = mysqli_query($con,$qry3);
while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
    if($row3['ans']==$row3['userans']){
	 @$_SESSION['score'] += 1 ;
 }
}
 
 ?> 
 <div class="result">
<h2>Result:</h2><br><br>
 <span><b>No. of Correct Answer:</b>&nbsp;<?php  echo $no = @$_SESSION['score']; 
											//var_dump($_SESSION['ids']);
 //session_unset(); ?></span><br><br>
 <span><b>Your Score:</b>&nbsp<?php if(isset($no)) echo $total=$no*1; ?></span>
<?php

 $email=$_SESSION["email"];
// Attempt insert query execution
$sql =mysqli_query($con, "INSERT INTO result (email,title,score)VALUES('$email','$title','$total')");
if($sql){
    echo "<script> alert('inserted successfully.')</script)";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
 
</div>
 
