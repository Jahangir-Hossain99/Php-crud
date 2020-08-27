<?php
require "unchangedpage.php";
require "database.php";

$id = $_GET['ID'];
$sql="SELECT * FROM employees WHERE ID = $id";
$result=$conn->query($sql);
$employee=$result->fetch_assoc();
?>


<div>
  <div style=" margin-top: 50px; margin-left: 130px; background-image:url(update.png); background-repeat: no-repeat ; background-size: 270px; display: inline-flex; float: left; height: 420px; width: 260px;"></div>

  <div style="margin-left: 80vh;">
  <h1 ><b>Update Employee</b></h1>



</div>
  <br>

<form style="margin-left: 70vh;" action="updated.php?ID=<?php echo $employee ['ID'];?>" method="post">
  <div class="form-group col-7">
      <label >Name</label>
      <input type="text" name="name" class="form-control" value=" <?php echo $employee['Name']; ?>" required >
    </div>

 
    <div class="form-group col-7">
      <label>E-mail</label>
      <input type="email" name="email" class="form-control" value=" <?php echo $employee['E-mail']; ?>" required >
    </div>

    <div class="form-group col-7">
    <label >Phone</label>
    <input type="text" name="phone" class="form-control" value=" <?php echo $employee['Phone']; ?>" required >
  </div>

  <div class="form-group col-7">
    <label >Salary</label>
    <input type="text" name="salary" class="form-control" value=" <?php echo $employee['Salary']; ?>" required >
  </div>
  
  
    

  <div class="form-group col-7">
    <label >Address</label>
    <input type="text" name="address" class="form-control"  value=" <?php echo $employee['Address']; ?>" required>
  </div>
  
  <div class="col-auto" >
  <button type="submit" class="btn btn-primary">Update</button></div>
</form>
</div>
</div>