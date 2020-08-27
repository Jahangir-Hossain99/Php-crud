<?php
require "database.php";
require "unchangedpage.php";


$name=$_POST['name'];
$phone=$_POST['phone'];
$sql="SELECT * FROM `employees` WHERE Name ='$name'AND Phone = '$phone' ";
$result=mysqli_query($conn,$sql);
$rowcounts=mysqli_num_rows($result);
if ($rowcounts==true){
	session_start();
	$_SESSION['Message'] = 'Logged in succesfullhy';
	header("Location:home.php ");}

else{
	session_start();
	$_SESSION['Message'] = 'Invalid Name & Phone';
	header("Location:index.php ");}





 ?>