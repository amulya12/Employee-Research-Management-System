<!DOCTYPE html>
<html>
<head>
  <title>New research</title>
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

#fileToUpload {
  text-align: center;
  margin: auto;
}
h3{
  color: green;
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
    <h3 align="center" >Add New Research</h3>
  </div>
</div>




<div class="container"> 
<form class="form-horizontal" action="includes/addresearch.php" method="post" enctype="multipart/form-data">


  <div class="form-group">
    <label for="Status" class="col-sm-2 control-label">Status:</label>
    <div class="col-sm-5">
      <input type="text" name="status" class="form-control" id="Status" placeholder="Status">
    </div>
  </div>
  

  <div class="form-group">
    <label for="Research title" class="col-sm-2 control-label">Research title:</label>
    <div class="col-sm-10">
      <input type="Text" name='title' class="form-control" id="Research title" placeholder="Research title">
    </div>
  </div>

<div class="form-group">
    <label for="Start date" class="col-sm-2 control-label">Start date:</label>
    <div class="col-sm-5">
      <input type="date" name='startdate' class="form-control" id="Start date" placeholder="Start date">
    </div>
  </div>

  <div class="form-group">
    <label for="End date" class="col-sm-2 control-label">End date:</label>
    <div class="col-sm-5">
      <input type="date" name='enddate' class="form-control" id="End date" placeholder="Start date">
    </div>
  </div>

    
    <div class="form-group">
    <label for="fileToUpload" class="col-sm-2 control-label">Document to upload:</label>
    <div class="col-sm-offset-2 col-sm-10" >
      <input type="file" name="fileToUpload" id="fileToUpload" value="upload" class="btn btn-default btn-lg ">
    </div>

    <br><br><br><br><br>
   
    <div class="col-sm-offset-2 col-sm-10" >
      <input type="submit" class="btn btn-success btn-lg" value="Submit">
    </div>
  </div>

</form>
</div>

<!-- $_SESSION['employeeid']; -->

<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



<footer>
  <p>Developed by: Ar_Vamshi & Amulya</p>
</footer>
</body>
</html>