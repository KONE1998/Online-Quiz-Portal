<?php
include('header.html');
?>
<!DOCTYPE html>
<head>
<title>select quiz</title>

<style>
* {
  box-sizing: border-box;
}
#quiz{
	text-align:center;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

h1{
	text-align:center;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
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
  margin-top:1%;
}
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
button[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float:right;
  
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

button[type=submit]:hover {
  background-color: #45a049;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
<body>
<h1 id="quiz"> Select the Quiz</h1>
<div class="container">
<form action="selectquiz.php" method="Request">

<div class="row">
      <div class="col-25">
        <label for="fname">Enter the Title:</label>
      </div>
      <div class="col-75">
        <input type="text" id="title" name="title" placeholder="Enter the title">
      </div>
    </div>
<div class="row">
<button type="submit" class="" name="reg_user">Submit</button> 
    </div>
</form></div></div></div>
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
</style>
</head>
<body>
				

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `quiz_list` WHERE CONCAT(`quiz_name`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `quiz_list`";
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
	<h1>Quiz list</h1>
        <center><br>
		<div class="container">
        <form action="selectquiz1.php" method="post">
<div class="row">
    <div class="col-25">
         <label>Enter to search:</label>
	</div>
	<div class="col-75">
		 <input type="text" name="valueToSearch" placeholder="Value To Search">
	</div></div>
	<div class="row">
            <button type="submit" name="search" value="Filter">Filter</button>
	</div></div>
            
            <table>
                <tr>
                    <th>Quiz Title</th>
                   
                    </tr
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
					<td><?php echo $row['quiz_name'];?></td>
                    
                    
                </tr>
                <?php endwhile;?>
            </table>
			
        </form>
		</center>
<div id="footer">
<p id="copy">Copyright &copy;2019 DINESH KUMAR R.<br/> All rights reserved</p>
</div>
   

</body>
</html>

