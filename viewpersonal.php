





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>





















<!DOCTYPE html>
<html>
<head>
	<title>FACULTY HOME</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	
	<style>
	
	body{
	padding-top: 70px;
	color: #2c3e55;
	padding-bottom: 100px;
	background: 808080;
}
.navbar-inverse{
	background: #2c3e55;
}

#content{
	text-align: center;
	padding: 15%;
}
button{
	background: #2c3e55;
	color: #dc143c;
	border: #2c3e55;
	font-size: 20px;
}
hr{
	border-top: 2px solid #f8f8f8;
	border-bottom: 2px solid rgb(0,0,0,0.2 );
}
h3
{
	color: green;
}
table{
width: 100%;
}
tr{
	text-align: center;
	font-size:20px;
	color: #2c3e55;
	border: 3px solid #2c3e55;	
}



footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #2c3e55;
  color: white;
  text-align: center;
}



</style>



</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
	        	<span class="sr-only">Toggle navigation</span>
	      		</button>
				<a href="home.php" class="navbar-brand">Home</a>
				</div>
		</div>
	</nav>







<div class="container"> 
	<div class="jumbotron">
		<h1 align="center">Employee research progress managment system</h1>
		<h3 align="center" >Personal details</h3>
	</div>


<table>
	<tr><td>Personal details</td></tr>
</table>


<?php
include_once 'includes/dbh_inc.php';
session_start();

$name=$_POST['name'];
$employeeid='';
$sql ="select * from employee where name='$name';";
$result= $conn->query($sql);

echo '<table id="tab">';
while($row = $result->fetch_assoc()){
	echo '<tr><td>Name : </td><td>'.$row["name"].'</td></tr><tr><td>Employeeid : </td><td>'.$row["employeeid"].'</td></tr>';
	$employeeid=$row["employeeid"];
}
echo '</table>';
echo '<a style="margin:55px" class="btn btn-success btn-lg" href="detailview(view).php?a='.$employeeid.'">Research details</a>';

?>

</div>





<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



<footer>
  <p>Developed by: Ar_Vamshi & Amulya</p>
</footer>
</body>
</html>





</body>
</html>