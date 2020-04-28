<?php
	$error = '';
	if(session_status() == PHP_SESSION_NONE)
	{
		session_start();
	}

	if(isset($_SESSION['isset']))
	{
		header('Location: ../middleindex.php');
	}

	$servername="localhost";
	$username = "root";
	$password ="";
	$dbname = "davoyo";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if($conn->connect_error)
	{
		die("Connection Failed : ".$conn->connect_error);
	}	

	$email = $_POST['email'];
	$password = $_POST['password'];
	// $passcheck = "";

	$sql = "SELECT * FROM signup WHERE email ='$email' and password = '$password' ";
	// echo $sql;
	$result = mysqli_query($conn,$sql);
	 // $resultcheck = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
		
	if($row){
		$_SESSION['isset'] = true;
		$_SESSION['email'] = $email;
		header('Location: ../middleindex.php');
	} else{
		echo ('Your id password do not match with database..Please Signup !!!');
	}
?>