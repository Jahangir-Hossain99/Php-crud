<?php
require "database.php";

$id = $_GET['ID'];



$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$salary=$_POST['salary'];
$address=$_POST['address'];



$sql="UPDATE employees SET  Name='$name', `E-mail`='$email' , `Phone` ='$phone', Salary = '$salary' , Address ='$address' WHERE ID = $id ";
if ($conn->query($sql)) {
	session_start();
	$_SESSION['Message'] = 'Updated Successfully';

header("Location:home.php ");
}
else{

	header("Location:update.php ");
}
