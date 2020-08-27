<?php
require "database.php";

 ?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Asus|| Employee</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style >
		#orange:hover{
			 text-decoration: inherit;
    background-color: orangered;
        transition: 1s;
		}
    a:active{
      background-color: orangered;

    }
   
		
		

	</style>



</head>
<body   > <header>
       
        <nav>
        <header style="background: linear-gradient(to right,skyblue,white); height: 100px;">
        <h1 style="margin-left: 150px;">Asus </h1>
        <h3 style="margin-left: 150px;" >In Search Of Incredible </h3></header>
        <div style="background-color: orangered; height: 5px;"></div>
            
            <ul style="display: inline-flex; float: right; margin-top: -41px;" class="nav nav-tabs">
  <li class="nav-item" >
    <a id="orange" class="nav-link"  href="index.php"><b>Sign In</b></a>
  </li>

 
 
</ul>
            
            
        </nav>
        
    </header>
    <?php if (isset($_SESSION['Message'])) {?>
            <div style=" margin:0px;" class="alert alert-success" role="alert"  >
              <?php echo $_SESSION['Message']; ?>
            </div>
            <?php session_destroy(); } ?>
    
  <div style="background: linear-gradient(to top,skyblue,white); height: 84vh; width: 100% ;"> 
  	<div style="background-image: url(google.png);background-size:70px; margin-left: 96vh; margin-top: 50px; height: 70px;  background-repeat: no-repeat;"></div>

  	 <div style="margin-left: 70vh;">
      <h1 style="margin-left: 15px;">Login</h1>
  	 	<form method="post" action=login.php>

  	  <div class="form-group col-6">
      <label >Name :</label>
      <input type="text" name="name" class="form-control"  required >
    </div>
     
        <div class="form-group col-6">
      <label >Phone :</label>
      <input type="text" name="phone" class="form-control"  required >
    </div>

    <div class="col-auto" >
  <button type="submit" class="btn btn-primary" >Login</button>
<input type="checkbox" name="" >Remember me!

</div>
</form>

</div>
  </div>
  	</body>
