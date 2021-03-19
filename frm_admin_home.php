
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


 <div id="body">
 
<?php 
   $un=$_SESSION['un'];
  if(!$un)
  {
	  header("Location:frm_admin_login.php");
  }
?>	
<center>
 <h1><b>Admin</b></h1>

 </center>
<br><br><br>
<div style="padding: 150px;" class="row">
	<div class="col-sm-6">
   
	 <form action="frm_bloodlist.php" method="post" >
	 <button type="submit"  name="sub" value="save" style="border:0px; background:linear-gradient(#900,#D50000); width:400px; height:100px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:30px; text-shadow:1px 1px 6px black; cursor: pointer; ">
  	User-List
  	</button>
     </form>
    </div>
<div class="col-sm-6">
	 <form action="frm_bloodbank_list.php" method="post">
	 <button type="submit"  name="sub" value="save" style="border:0px; background:linear-gradient(#900,#D50000); width:400px; height:100px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:50px; text-shadow:1px 1px 6px black; cursor: pointer; ">
  		Bloodbank-list
  	</button>
     </form>
   </div>
</div>
	
 
  
</div>
   <?php 
   include 'footer.php'
   ?>

 

 </body>
 </html>