<?php
	include_once 'dbh_inc.php';
	$name = $_POST['name'];
	$username= $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	//error handles
	//check for empty fields
	
	 if(empty($name) || empty($username) || empty($email) || empty($password))
	 {
	 	header("Location: ../signup.php?signup=empty");
	 	exit();
	 }
	 else 
	 {
	 	//check if input characters are valid
	 	if(!preg_match("/^[a-zA-Z]*$/", $name))
	 	{	
	 		header("Location: ../signup.php?signup=invalid");
	 		exit();
	 	}
	 	else
	 	{
	 	//check if email is valid 
	 		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	 		{
	 		header("Location: ../signup.php?signup=email");
	 		exit();	
	 		}
	 		else 
	 		{
	 			$sql ="select * from employee where email = '$email'";
	 			$result = $conn->query($sql);
	 			$result = $result->num_rows;

	 			if($resultCheck >0)
	 			{
	 			header("Location: ../signup.php?signup=usertaken");
	 			exit();	
	 			}
	 			else
	 			{
				//hashing the password
			 	$hashedpwd = password_hash($password, password_default);
			 	//insert user into database
			 	$sql1 ="insert into employee(name,username,password,phoneno,email,designation,cabino,school) values ('$name','$username','$hashedpwd','0','$email','','0','');";
			 	$conn->query($sql1);
			 	
			 	header("Location: ../facultylogin.php");
 				exit();
 				}
 			}
 		}
 	}

 ?>




