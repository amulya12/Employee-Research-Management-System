

<!DOCTYPE html>
<html>
<head>
	<title>View home</title>
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
	</div>
</div>


<div class="container"> 
	<form class="form-horizontal" method='POST' action='viewpersonal.php'>

  <div class="form-group">
    <label for="search" class="col-sm-2 control-label" >Search Faculty:</label>
    <div class="col-sm-10">
    	<select name="name" placeholder="select">
    		<?php
    		include_once 'includes/dbh_inc.php';
    		$sql="select name from employee;";
    		$result= $conn->query($sql);
    		if($result){
    			while($x=mysqli_fetch_assoc($result)){
    				echo "<option value='".$x['name']."'>".$x['name']."</option>";
    			}

    		}
    		?>
    	</select>

      <!--<input type="text" name ="name" class="form-control" id="search" placeholder="Name">-->
    </div>
  </div>
  

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10" >
      <input type="submit" class="btn btn-success" href="viewpersonal.php" value="Search">
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