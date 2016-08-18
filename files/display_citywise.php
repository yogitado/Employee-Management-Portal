<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Employee Corner</title>
<style>
body 
{
background-color: lightgrey;
height:500px;
width:750px;
padding:1px;
float:center;
border:5px solid black;
}
#header {
	height:80px;
    background-color:green;
    color:black;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:30px;
    background-color:#eeeeee;
    height:350px;
    width:150px;
    float:left;
    padding:5px;	      
}
#section {
	height:350px;
    width:500px;
    float:left;
    padding:10px;	 	 
}
#footer {
	height:30px;
    background-color:black;
    color:white;
    clear:both;
    text-align:center;
   padding:5px;	 	 
}
table,th, tr, td {
    border: 3px solid black;
     border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}

</style>
</head>
</head>
<body>
<div id="header">
<h1>Employee Corner</h1>
</div>

<div id="nav">
<a href="index.html">Home</a><br>
<a href="view_records.php">View Employee Details</a><br>
<a href="add_records.html">Add Employee Details</a><br>
<a href="display_citywise.php">Citywise count</a><br>
<a href="search_employee.php">Search Employee</a><br>
<a href="sortby_Lname.php">Display Last names</a><br>


</div>

<div id="section">
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) 'Count of Employees',City 'city'
		FROM mydb.emp_detail   
		GROUP BY City ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>
<label style="color: red;">Employee Names are:</label><br><br>
<table style="border: 2px;border-color: black;width:400px;">
<tr><th>Count of Employees</th><th>City</th></tr>
<?php 

	while($row = $result->fetch_assoc()) {
?>
	<tr><td><?php 	echo  $row['Count of Employees']?></td><td><?php echo $row['city'];?></td></tr>
<?php 	
	}
	//echo $result;
}  
else {
	echo "No results are Found";
}
$conn->close();
?>
</table>

</div>

<div id="footer">
Copyright © Cybage Software Pvt.Ltd.
</div>
</body>
</html>
