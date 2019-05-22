  <html>
<head>
	<title>Edit Personal Details</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <style>
  body{
  padding-top: 70px;
  color: #2c3e55;
  padding-bottom: 100px;
}
.navbar-inverse{
  background: #2c3e55;
}

#content{
  text-align: center;
  padding: 15%;
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
        <a href="facultyhome.php" class="navbar-brand">Faculty Home</a>
      </div>
    </div>
  </nav>

<div class="container"> 
  <div class="jumbotron">
    <h1 align="center">Employee research progress managment system</h1>
  </div>
</div>


<div class="container"> 
	<form class="form-horizontal" method="POST">


  <div class="form-group">
    <label for="School" class="col-sm-2 control-label">School:</label>
    <div class="col-sm-10">
      <input type="text" name="school" class="form-control" id="School" placeholder="School">
    </div>
  </div>


  <div class="form-group">
    <label for="Desgination" class="col-sm-2 control-label">Desgination:</label>
    <div class="col-sm-10">
      <input type="text" name="desgination" class="form-control" id="Desgnation" placeholder="Designation">
    </div>
  </div>

  <div class="form-group">
    <label for="Cabin No." class="col-sm-2 control-label">Cabin number:</label>
    <div class="col-sm-10">
      <input type="text" name="cabino" class="form-control" id="Cabin No." placeholder="Cabin number">
    </div>
  </div>

  <div class="form-group">
    <label for="Phone number" class="col-sm-2 control-label">Phone number:</label>
    <div class="col-sm-10">
      <input type="text" name="phoneno" class="form-control" id="Phone number" placeholder="Phone number">
    </div>
  </div>
  

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10" >
      <input type="submit" class="btn btn-success" name="update" value="update">
    </div>
  </div>
</form>
</div>

<footer>
  <p>created by: Ar_Vamshi & Amulya</p>
</footer>
</body>
</html>




<?php 
  include_once 'includes/dbh_inc.php';
  session_start(); 
  if (isset($_POST['update'])) 
  { 
    $school = $_POST['school']; 
    $desgination = $_POST['desgination']; 
    $cabino = $_POST['cabino'];
    $phoneno = $_POST['phoneno'];
    $employeeid= $_SESSION['employeeid'];

    $sql = "update employee set school='$school' , designation='$desgination' , cabino='$cabino' , phoneno='$phoneno' where employeeid=$employeeid"; 
    $conn->query($sql);
    header('Location:facultyhome.php'); 
  } 
  ?> 
  