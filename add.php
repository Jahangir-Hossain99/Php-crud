<?php
require "unchangedpage.php";
?>
<div>
  <div style=" margin-top: 70px; background-image:url(interview.png); background-repeat: no-repeat ; background-size: cover; display: inline-flex; float: left; height: 300px; width: 370px;"></div>

  <div style="margin-left: 80vh;">
  <h1 ><b>Add New Employee</b></h1></div>
  <br>

<form style="margin-left: 70vh;" action="newemployee.php" method="POST">
  <div class="form-group col-7">
      <label >Name</label>
      <input type="text" name="name" class="form-control" required >
    </div>

 
    <div class="form-group col-7">
      <label>E-mail</label>
      <input type="email" name="email" class="form-control" required >
    </div>

    <div class="form-group col-7">
    <label >Phone</label>
    <input type="text" name="phone" class="form-control" required >
  </div>

  <div class="form-group col-7">
    <label >Salary</label>
    <input type="text" name="salary" class="form-control" required >
  </div>
  
  
    

  <div class="form-group col-7">
    <label >Address</label>
    <input type="text" name="address" class="form-control"  placeholder="1234 Main St" required>
  </div>
  
  <div class="col-auto" >
  <button type="submit" class="btn btn-primary">Submit</button></div>
</form>
</div>
</div>


