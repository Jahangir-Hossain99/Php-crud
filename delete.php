<?php

$id=$_GET['ID'];

require 'database.php';

$sql="DELETE FROM `employees` WHERE `employees`.`ID` = $id";

if ($conn->query($sql)) {
	session_start();
	$_SESSION['Message'] = 'Deleted Successfully';
	header("Location:home.php ");

}