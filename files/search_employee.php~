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
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<h3 style="color: red">Enter the details here<br>------------------------------------------------------------</h3>

<table>
<tr>
<td>Emp Name:</td>
<td><input type="text" name="Emp_name" value="<?= isset($_POST['Emp_name']) ? htmlspecialchars($_POST['Emp_name']) : '' ?>" size="30" required></td>
</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="submit" value="Submit" height="50px" width="50px" style="background-color: grey; border-color: black; border-style: solid;"></td>
</tr>
</table>
</form>
<?php 
//$id=$_POST['Emp_id'];
if(isset($_POST['submit'])) {
$name=$_POST['Emp_name'];
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

$sql = "select Fname,Lname from emp_detail where Fname like '%$name%' OR Lname like '%$name%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
?>
<label style="color: red;">Employee Name is:</label><br><br>
<table style="border: 2px;border-color: black;width:400px;">
<tr><th>Name</th><th></th><th>Employee Name</th></tr>
<?php 
	while($row = $result->fetch_assoc()) 
	{
?>
	<tr><td align="center"><?php echo $name;?></td>
	    <td align="center"> => </td>
	    <td align="center"><?php 	echo  $row["Fname"]. " " .$row["Lname"];?></td>
	</tr>
<?php 	
	}
}  
else {
	echo "No results are Found";
     }
$conn->close();
}
?>
</table>
</div>

<div id="footer">
Copyright © Cybage Software Pvt.Ltd.
</div>
</body>
</html>
