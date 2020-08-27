<?php 

session_start();
$_SESSION['Message']='Logged Out Successfully';
session_destroy();
header("Location:index.php ");



?>