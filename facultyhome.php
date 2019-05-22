
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

.button{
	margin-right:16px;
}

.btn-lg{
	size: ;
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
				<a href="facultyhome.php" class="navbar-brand">Faculty Home</a>
				</div>
				<div>
					<ul class="navbar navbar-nav navbar-right">
				<li><a><form method='post' action='<?php echo $_SERVER['PHP_SELF'] ?>'><button name='logout'>Logout</button></form></a></li></ul>
			</div>
		</div>
	</nav>


<div class="container"> 
	<div class="jumbotron">
		<h1 align="center">Employee research progress managment system</h1>
		<h3 align="center" >Faculty Home</h3>
	</div>
</div>

<?php
include_once 'includes/dbh_inc.php';
session_start();



$sql ="select * from employee where employeeid ='".$_SESSION['employeeid']."' ";
$result= $conn->query($sql);


echo '<table id="tab">';
while($row = $result->fetch_assoc()){
	echo '<tr><td>Name : </td><td>'.$row["name"].'</td></tr><tr><td>Email : </td><td>'.$row["email"].'</td></tr><tr><td>Username : </td><td>'.$row["username"].'</td></tr>';
}


echo '</table>';
if(isset($_POST['logout'])){
	unset($_SESSION['employeeid']);
	header('Location:facultylogin.php');
}
?>
<div class="container">
		<div class="row">
			
					<div class='myDiv'>
    					<a  style="margin:60px" href="editpersonal.php" class="btn btn-success btn-lg"">UPDATE PERSONAL DETAILS</a>
    					<a style="margin:55px" class="btn btn-success btn-lg" href= "addnewresearch.php">Add new research details</a>
    					<a style="margin:55px" class="btn btn-success btn-lg" href= "research.php">Update present research details</a>
    					
    					

					</div>

				</div>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



<footer>
  <p>Developed by: Ar_Vamshi & Amulya</p>
</footer>
</body>
</html>