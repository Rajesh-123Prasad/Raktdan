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
   <script>
    function deletepro(id)
    {
    console.log(id);
     var status = $("#"+id).text();
     console.log(status);
    var s = document.createElement("script");
    s.src="statusselector.php?x="+JSON.stringify({"usage":"rempro","id":id,"status":status});
    document.body.appendChild(s);
    }
    function reload(){
      
      location.reload();
    }
</script>
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


<center><h1><b> Bloodbank-List</b></h1></center>
<br><br>
 <form action="frm_bloodbank_list.php" method="post" enctype="multipart/form-data">
 <center>
    <table class="table table-responsive">
    <tr style="padding-bottom: 50px;">
       <td><center><b><font color:"blue">Registration Number</font></b></center></td>
	   <td><center><b><font color:"blue">Bloodbank Name</font></b></center></td>
	   <td><center><b><font color:"blue">State</font></b></center></td>
	   <td><center><b><font color:"blue">City</font></b></center></td>
	   <td><center><b><font color:"blue">Address</font></b></center></td>
	   <td><center><b><font color:"blue">pincode</font></b></center></td>
	   <td><center><b><font color:"blue">Owner/Employee</font></b></center></td>
	   <td><center><b><font color:"blue">Mobile</font></b></center></td>
	   <td><center><b><font color:"blue">Registration Date</font></b></center></td>
	   <!--<td><center><b><font color:"blue">Upload Registration Details</font></b></center></td>-->
	   <td><center><b><font color:"blue">Status</font></b></center></td>
	</tr>
	<?php 
	$query = "select * from bloodbank_registration";
    $result = mysqli_query($con, $query);
	if($result)
	{
	  while($row = mysqli_fetch_assoc($result))
	  {
		
	?>
	
	<tr>
	   <td ><center><?php echo $row['regis_no'];?></center></td>
	   <td><center><?php echo $row['bloodbank_name'];?></center></td>
	   <td><center><?php echo $row['state'];?></center></td>
	   <td><center><?php echo $row['city'];?></center></td>
	   <td><center><?php echo $row['address'];?></center></td>
	   <td><center><?php echo $row['pincode'];?></center></td>
	   <td><center><?php echo $row['owner'];?></center></td>
	   <td><center><?php echo $row['mobile_no'];?></center></td>
	   <td><center><?php echo $row['reg_date'];?></center></td>
	  <!-- <td style="padding-left: 10px;"><img src="dataimg/<?php echo $data['upload_regis']; ?>" style="max-width: 100px;"/></td>-->
	   <td><center><?php  
                        echo  " <a class='btn btn-danger' id='".$row['regis_no']."' onclick='deletepro(this.id)'>";
                        echo           $row['status'] ;
                        echo  "        </a>";
                ?>
                          
      </center></td>

	</tr>
	<?php 
	}}
	?>
	
 </table>
 </center>
 </div>
 </div>
<br><br><br><br>
<?php 
include 'footer.php'
?>
 
 </body>
 </html>