<?php

?>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
	
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
#footer{
	text-align:center;
	font-weight:bold;
	background-color:#b3d1ff;
	color:#004d00;
  position: relative;
  bottom: 0;
  width: 100%;
  height: 50px;
}
#form{
	
	padding:7%;
	margin-left:30%;
	margin-bottom:2%;
	margin-top:2%;
}
#free{
	background-color:yellow;
}

</style>
</head>
<body>

<div id="free">
		<p>Welcome	:	
<?php
	include('login1.php');
	$a=$_SESSION['email'];
	echo"$a";
	?>
</p></div>
			
		<div id="vieww" >
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `result` WHERE CONCAT(`title`,`score`,`Date`) LIKE '%".$valueToSearch."%' AND `email` = '$a' ";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT title,score,Date FROM `result` where email='$a'";
    $search_result = filterTable($query);
}


function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "reg");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
			h1{
				text-align:center;
			}
        </style>
    </head>
    <body>
	<h1>User Result view</h1>
        
		<div id="form">
        <form action="userresultview.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                   
					<th>Title</th>
					<th>Score</th>
					<th>Date</th>
                    </tr
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
					
                    <td><?php echo $row['title'];?></td>
					<td><?php echo $row['score'];?></td>
					<td><?php echo $row['Date'];?></td>
                    
                </tr>
                <?php endwhile;?>
            </table>
			
        </form></div>
		
<div id="footer">
<p id="copy">Copyright &copy;2019 DINESH KUMAR R.<br/> All rights reserved</p>
</div>
   
</html>
</body>