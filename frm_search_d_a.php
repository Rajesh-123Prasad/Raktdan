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

	
</div>

 <div style="padding-bottom: 200px;" id="body">
 
<?php 
   $un=$_SESSION['un'];
  if(!$un)
  {
	  header("Location:login.php");
  }
?>	




<form action="blood-list.php" method="post">
<table>
 <tr>


  <td width="200px" height="50px">Enter BloodGroup</td>
  <td width="200px" height="50px">
    <select name="bggroup">
	  <option>O+</option>
	  <option>O-</option>
	  <option>A</option>
	  <option>A+</option>
	  <option>B+</option>
	  <option>B-</option>
	  <option>AB_</option>
	  <option>AB+</option>	
	</select>
  </td>
  </tr>

</table>

     <center>
  		<button type="submit" name="submit" value="submit" >
  		submit
  	</button>

</center>
</form>



</div>

<?php include'footer.php'?>
</body>
</html>


