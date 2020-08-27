<?php
$conn=new mysqli('localhost','root','','AsusEmployee');
$sql="SELECT * FROM employees" ;
$result=$conn->query($sql);
session_start();






?>






<!DOCTYPE html>
<html>
<head>
  
	
	<title>Asus|| Employee</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
    <a id="orange" class="nav-link "  href="home.php"><b>Home</b></a>
  </li>
  
  <li class="nav-item">
    <a id="orange" class="nav-link" href="add.php"><b>Add</b></a>
  </li>

   <li class="nav-item">
    <a id="orange" class="nav-link" href="update.php"><b>Update</b></a>
  </li>

  <li class="nav-item">
    <a id="orange" class="nav-link" href="logout.php"><b>Sign Out</b></a>
  </li>
 
 
</ul>
            
            
        </nav>
        
    </header>
     <?php if (isset($_SESSION['Message'])) {?>
            <div style=" margin:0px;" class="alert alert-success" role="alert"  >
              <?php echo $_SESSION['Message']; ?>
            </div>
            <?php session_destroy(); } ?>
    
   


  <div style="background: linear-gradient(to top,skyblue,white); height: 540px; width: 100% ;"> 

   <div style=" margin-top: 50px; background-image:url(baby.png);background-size: 300px; background-repeat: no-repeat; height: 100%; width: 100%;">
    
    
      





   	<h1  style="margin-left: 240px;" ><b>Employee Lists</b></h1><br>
    <div style="margin-left: 37vh;"><a class="btn btn-primary" style="color: white;" href="add.php"><b>Add Employee</b></a></div>
    
   		<div style="margin-left:226px; margin-top: 7px;" class="col-sm-10">
   		<table style="border-radius: 10px 10px 10px 10px" bgcolor="white" class="table"  >
  <thead bgcolor=" black" >
    <tr>
      <th style="color: white;"  >ID</th>
      <th style="color: white;" >Name</th>
      <th style="color: white;"   >E-mail</th>
      <th style="color: white;"  >Phone</th>
      <th style="color: white;"  >Salary</th>
      <th style="color: white;" >Address</th>
      <th style="color: white;" >Actions</th>
    </tr>
  </thead>

  <tbody>
  	<?php while ($row=$result->fetch_assoc()) {?>
  		
  	
    <tr>
  
      <td ><?php echo $row['ID']; ?></td>
      <td class="col-md-2"><?php echo $row['Name']; ?></td>
      <td><?php echo $row['E-mail']; ?></td>
      <td><?php echo $row['Phone']; ?></td>
      <td><?php echo $row['Salary']; ?></td>
      <td><?php echo $row['Address']; ?></td>
      <td class="col-md-3" >
      <a class="btn btn-warning" style="color: white;" href="view.php?ID=<?php echo $row ['ID'];?>"><b>View</b></a>
       <a class="btn btn-primary" style="color: white;"  href="update.php?ID=<?php echo $row ['ID'];?>"><b>Update</b></a>
   <a class="btn btn-danger" style="color: white;" onclick="return confirm('Want to delete this Employee?')"href="delete.php?ID=<?php echo $row ['ID'];?>"><b>Delete</b></a>
      	


      </td>
    </tr>
   
<?php } ?>
  </tbody>
</table></div>



   </div>
 </div>


    

</body>

</html>