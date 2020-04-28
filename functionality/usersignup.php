<?php

$servername="localhost";
$username = "root";
$password ="";
$dbname = "davoyo";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn->connect_error)
{
	die("Connection Failed : ".$conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$password = $_POST['password'];

$sql = "insert into signup values('$name','$email','$phone','$gender','$password')";
$result = $conn->query($sql);
if($result)
{
	header('Location: ../login.php');
	// echo ("data inserted sucessfully");
}
else
{
	die("connection failed");
}
?>