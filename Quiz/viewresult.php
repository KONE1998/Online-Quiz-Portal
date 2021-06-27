<html>
<head><title> Display.php </title></head>
<body bgcolor="aabbcc">
<?php
include('login1.php');
$query="select * from result where email='$email'"; // Fetch all the records from the table address
$result=mysqli_query($db,$query);
?>
 
<h3> Page to display the stored data </h3>
 
<table border="">
<tr>
<th> EMAIL-id </th>
<th> TITLE </th>
<th> MARKS </th>
 </tr>
 
<?php while($array=mysqli_fetch_row($result)) ?>
<tr>
<td><?echo $array[0];?></td>
<td><?echo $array[1];?></td>
<td><?echo $array[2];?></td>
</tr>
 

<?php mysqli_free_result($result); ?>
<?php mysqli_close($db); ?>
</table>
</body>
</html>