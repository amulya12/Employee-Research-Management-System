
<!DOCTYPE html>
<html>
<head>
	<title>Facultylogin</title>
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
h3
{
	color: green;
}
.jumbotron{
	color: #2c3e55;
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
				<a href="http://localhost/software/home.php" class="navbar-brand">Home</a>
			</div>
		</div>
	</nav>

<div class="container"> 
	<div class="jumbotron">
		<h1 align="center">Employee research progress managment system</h1>
		<h3 align="center">Faculty Login</h3>
	</div>
</div>


<div class="container"> 
	<form class="form-horizontal" method="POST">

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label" >Username : </label>
    <div class="col-sm-10">
      <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
    </div>
  </div>


  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password : </label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>



  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-success" name="login" value="login"><br>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10" >
    	<label for="sign-up"> Not a user?</label>
      <a id="sign-up" type="submit" class="btn btn-danger " href ="signup.php">Sign-up</a>
    </div>
  </div>

</form>
</div>
  



<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



<footer>
  <p>Developed by: Ar_Vamshi & Amulya</p>
</footer>
</body>
</html>










	<?php 
	include_once 'includes/dbh_inc.php';
	session_start(); 
	if (isset($_POST['login'])) 
	{ 
		$username = $_POST['username']; 
		$password = $_POST['password']; 

		$sql = "SELECT password,employeeid FROM employee WHERE username = '$username'"; 
		$result = $conn->query($sql);
		if(mysqli_num_rows($result)>0){
				$_SESSION['employeeid'] = $row['employeeid']; 
				header('Location:facultyhome.php'); 
			}
			else{ 
				header('Location:facultylogin.php?a=invalid'); 
		}
	}
 	 
 	?> 
</body>
</html>
 
