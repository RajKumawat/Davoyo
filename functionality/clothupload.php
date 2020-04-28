<?php

if(isset($_POST['submit']))
 {
 	$filename = $_FILES['imageinput']['name'];
 	$filetmpname = $_FILES['imageinput']['tmp_name'];
 	$folder = '../uploads/';

 	move_uploaded_file($filetmpname, $folder.$filename);

 	// 	$target = '../uploads/'.basename($_FILES['imageinput']['name']);

 	// 	if(move_uploaded_file($_FILES['imageinput']['tmp_name'], $target))
		// {
		// 	$msg = "image upload sucessfully";
		// }


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
$typefor = $_POST['typefor'];
$brandcatogery = $_POST['brandcatogery'];
$price = $_POST['price'];
$actualprice = $_POST['actualprice'];
$off = $_POST['off'];
$imageinput = $_FILES['imageinput']['name'];


$sql = "insert into clothupload values(NULL,'$name','$typefor','$brandcatogery','$price','$actualprice','$off','$imageinput')";


$result = $conn->query($sql);
if($result)
{
	// header('Location: ../adminindex.html');
	echo ("data inserted sucessfully");
}
else
{
	// header('Location: ../adminindex.html');
	die("connection failed");
}
}
?>