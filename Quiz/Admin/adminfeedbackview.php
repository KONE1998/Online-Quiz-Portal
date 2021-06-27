<html>
<head>
<link rel="stylesheet" href="../css/style.css">
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
</style>
</head>
<body>

<div id = 'menu-container'></div>
			<div id = 'name1'>
				
				</div>
				
<?php
	include('admin1.php');
	?>
			</div>

			
		<div id="vieww" >
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `tblcontact` WHERE CONCAT(`user_email`,`subject`,`user_name`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `tblcontact`";
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
	<h1>User Feedback view</h1>
        <center><br>
        <form action="adminfeedbackview.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email-id</th>
					<th>Subject</th>
					<th>Content</th>
					<th>Date</th>
                    </tr
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
					<td><?php echo $row['user_name'];?></td>
                    <td><?php echo $row['user_email'];?></td>
                    <td><?php echo $row['subject'];?></td>
					<td><?php echo $row['content'];?></td>
					<td><?php echo $row['Date'];?></td>
                    
                </tr>
                <?php endwhile;?>
            </table>
			
        </form>
		</center>
        
   
</html>
</body>