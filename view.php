<?php
require "database.php";
require "unchangedpage.php";
$id = $_GET['ID'];
$sql="SELECT * FROM employees WHERE ID = $id";
$result=$conn->query($sql);

$employee=$result->fetch_assoc();

?>

<div style="margin-left: 30vh" ><div style=" margin-top: -20px; background-image:url(atti.png); background-repeat: no-repeat ; background-size: 350px; display: inline-flex; float: left; height: 470px; width: 320px;"></div>

<div ><br>
	<h1 style="margin-top: 30px; margin-left: 40vh;">Veiwing info of  <?php echo $employee['Name']; ?> </h1>

	<a class="btn btn-warning" href="home.php" style="color: white; margin-left: 0vh; "><b> Home</b></a>

	 <a class="btn btn-primary" href="update.php?ID=<?php echo $employee['ID']; ?>"  style="color: white;"><b> Update</b></a>

	<a class="btn btn-danger" href="delete.php?ID=<?php echo $employee['ID']; ?>" onclick="return confirm('Want to delete this Employee?')" style="color: white;"><b> Delete</b></a>

	<br><br>

<table style=" margin-left: 40vh; margin-top: 20px;   background: transparent;" class="table col-sm-6 "     >

    <tr >
      <th   >ID :</th>
      <td> <?php echo $employee['ID']; ?></td></tr>

      <tr>
      <th  >Name :</th>
      <td> <?php echo $employee['Name']; ?></td></tr>

      <tr>
      <th    >E-mail :</th>
      <td> <?php echo $employee['E-mail'] ;?></td></tr>

      <tr>
      <th   >Phone :</th>
      <td> <?php echo $employee['Phone'];?></td></tr>

      <tr>
      <th   >Salary :</th>
      <td> <?php echo $employee['Salary']; ?></td></tr>

      <tr>
      <th  >Address :</th>
      <td> <?php echo $employee['Address']; ?></td></tr>

  </table></div></div>