<?php
 include "connection.php";
 //session_start();
 ?>

 <!DOCTYPE html>

<html>
    <head>
        <title>Sample</title>
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
         <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"> </script> 
        <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"> </script>
      
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style>
      
       .blood{
           font-size: 20px;
           color: white;
       } 
       .nav{
           background-color:  lightgoldenrodyellow;
           border-left: 3px solid;
       }
       .container-fluid{
           border: 3px solid;
       }
       .line{
           border-right: 3px solid;
           
       }
       
      
    </style>
    
    </head>
    
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="row">
        <div class="navbar-header">
          <a href="frm_admin_home.php">  <img src="img/rakta.jpg" alt="rakta" height="100" width="100"></a>
            
            
           
        </div>
        </div>
    </div>
</nav>


     <div class="container-fluid nav">
           
            <ul class="nav navbar-nav navbar-right">
            
                <li > <a align="center" href="logout.php"><font color:"white" >logout</font></a></li>
                
            </ul>
        </div>






 
<?php 
   $un=$_SESSION['un'];
  if(!$un)
  {
	  header("Location:frm_admin_login.php");
  }
//include('connection.php');
  ?>


<center>
 <h1><b> User List</b></h1></center>
 <div style="padding-bottom: 200px;" id="form">
 <center>
    <table class="table">
    <tr>
	   <td><center><b><font color:"blue">Name</font></b></center></td>
	   <td><center><b><font color:"blue">Aadhar</font></b></center></td>
	   <td><center><b><font color:"blue">addres</font></b></center></td>
	   <td><center><b><font color:"blue">Blood Group</font></b></center></td>
	   <td><center><b><font color:"blue">Mobile</font></b></center></td>
	   <td><center><b><font color:"blue">E-mail</font></b></center></td>
	   <td><center><b><font color:"blue">Password</font></b></center></td>
	  
	</tr>
	<?php 
	
    
 
 //$bggroup=$_POST['bggroup'];

 $query = "SELECT * FROM `user`  ";

//$sql="SELECT * FROM `donar_registration` WHERE city='$city' and bggroup='$bg'";

//$res=mysqli_query($con,$sql);///

//$row=mysqli_fetch_array($res);

//echo $row[0];

    $result = mysqli_query($con, $query);
	if($result)
	{
	  while($row = mysqli_fetch_assoc($result))
	  {
	?>
	
	<tr>
	   <td><center><?php echo $row['name'];?></center></td>
	   <td><center><?php echo $row['aadhar'];?></center></td>
	   <td><center><?php echo $row['address'];?></center></td>
	   <td><center><?php echo $row['bggroup'];?></center></td>
	   <td><center><?php echo $row['phone'];?></center></td>
	   <td><center><?php echo $row['email'];?></center></td>
	   <td><center><?php echo $row['password'];?></center></td>
	  
	</tr>
	<?php 
	}}
	?>
	
 </table>
 </center>
 </div>

 </div>
  <center>
<?php include'footer.php'
?> 
 </body>
 </html>
 