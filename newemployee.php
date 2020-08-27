<?php 
require 'database.php';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$salary = $_POST['salary'];
$address = $_POST['address'];

$sql="INSERT INTO `employees` (`ID`, `Name`, `E-mail`, `Phone`, `Salary`, `Address`) VALUES (NULL, '$name', '$email', '$phone', '$salary', '$address'); ";
if ($conn->query($sql)){
	session_start();
	$_SESSION['Message']= 'Added Successfully';
	
	header("Location:home.php ");
}
else{
	echo "Failed";
	// header("Location:add.php ");
}

 ?>
