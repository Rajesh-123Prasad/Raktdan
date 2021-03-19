 <?php
 	//session_start();
 	error_reporting(0); 
   $un=$_SESSION['un'];
  if(!$un)
  {
	  //header("Location:frm_d_a_login.php");
  }

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
      
      body{
        overflow-x: hidden;
      }
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
          <a href="frm_d_a_form.php">  <img src="img/rakta.jpg" alt="rakta" height="100" width="100"></a>     
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
<div>
<?php
     if (isset($_POST['btn_veryfy']))
     {
     	$phoneno = $_POST['did'];
     	include "connection.php";
     	$sql = "SELECT * from user WHERE phone='$phoneno'";
     	$run = mysqli_query($con, $sql);
     	if ($run==true)
     	{
     		$data = mysqli_fetch_assoc($run);
     		$uname = $data['name'];
     		$phno = $data['phone'];
     		if($uname=="" && $phno=="")
     		{
     ?>
     			<script type="text/javascript">alert("User Not Valid")</script>
     <?php
     		}
     		else
     		{
?>
				<p><?php echo $uname;?></p>
     			<script type="text/javascript">alert("User Verified")</script>
     			<p><?php echo $uname; ?></p>
     			<p><?php echo $phno; ?></p>
<?php
     		//echo $uname;
     		}
     	}

     }
?>
</div>
<div>
 	<form action="#" method="POST">
  		<td width="200px" height="50px">User.Id </td>
  		<td width="200px" height="50px"><input type="numeric" name="did" placeholder="Enter Id" required="required"></td>
  		<td> <input type="submit" name="btn_veryfy" value="Check"></td>
  	</form>
</div>
 
<center>	
<div class="div2">
			<h1><b>Donar / Acceptor Form<b></h1>
</div>
<br><br><br>



 <div class="row">
 	<div class="col-sm-6">
 <form action="Donar_reg.php" method="POST"><!--some thing is wrong-->
 <table style="background-color: pink; padding:300px;">
 <tr>
</tr>

<tr>
  <td width="200px" height="50px">Blood_bank</td>
  <td width="200px" height="50px">

  <select name="blood_bank" id="blood_bank">
 <!-- <option value=""> Select Bloodbank</option>--> 

  <?php 
$sql="SELECT * FROM `bloodbank_registration` WHERE status='Approved'";
  $run=mysqli_query($con,$sql);
  //print_r($run); exit();
   if(mysqli_num_rows()>0) echo "yes";
   else echo "no";
  while ($data=mysqli_fetch_assoc($run))
      {
        echo $data ;
        echo "<option value='".$data['regis_no']."'>".$data['bloodbank_name']."</option>";
      }

  ?>


</select>

</td>

 </tr>


 <tr>

  <td width="200px" height="50px">Unit</td>
  <td width="200px" height="50px">
    <select name="unit">
	  <option>1</option>
	  <option>2</option>
	  <option>3</option>	
	</select>
  </td>

   </tr>

  <tr>

  <td width="200px" height="50px">Blood Group</td>
  <td width="200px" height="50px">
    <select name="bgroup">
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

  <tr>

  <td width="200px" height="50px">Age</td>
  <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age" required="required"></td>
  </tr>

  <tr>
  <td width="200px" height="50px">Doctor's Name</td>
  <td width="200px" height="50px"><input type="text" name="doctor" placeholder="Enter's Name" required="required"></td>
  
  </tr>
  
  <tr>
  <td width="200px" height="50px">Hospital Name</td>
  <td width="200px" height="50px"><input type="text" name="hospital" placeholder="Enter Hospital's Bame" required="required"></td>
</tr>

<tr>
  <td width="200px" height="50px">Date</td>
  <td  width="200px" height="50px"><input type="date"  name="d_date"><br></td>
	</tr>

<tr>
	<td width="200px" height="50px">Type</td>
	<td width="200px" height="50px">
	 <select name="type">
	  <option>Acceptor</option>
	  <option>Donar</option>
	</select>
  </td>
   </tr>

</table>

<br><br><br>

  		<button type="submit"  name="sub" value="save" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; cursor: pointer; ">
  		save
  	</button>
 </form>
</div>
 
 <?php
  if(isset($_POST['sub'])&& $_POST['sub']=='save' )
  {
	  $did=$_POST['did'];
	  $blood_bank=$_POST['blood_bank'];
	  $unit=$_POST['unit'];
      $bgroup=$_POST['bgroup'];
      $age=$_POST['age'];
	  $doctor=$_POST['doctor'];
      $hospital=$_POST['hospital'];
	  $d_date=$_POST['d_date'];
      $type=$_POST['type'];
 

	  
	  //$q="select e_mail from donar_registration where e_mail='$e_mail' ";
	 // $recexist=mysqli_query($con,$q);
	 //  $rowcount=mysqli_num_rows($recexist);
	 // if($rowcount==0)
	 // {
		/* $q="INSERT INTO donar_registration (name,fname,address,city,age,bggroup,e-mail,mno) VALUES  
	   ('". $name."','".$fname."','".$address."','".$city."','".$age."','".$bggroup."','".$e_mail."','".$mno."')";*/

	  // echo $password;
	   //echo $re_password;
	   //if ($password==$re_password)
	  // {
	   	//$newpwd = $password;
  		//}
  		$q= "INSERT INTO `tbl_donor`(`did`, `blood_bank`, `unit`, `bgroup`, `age`, `doctor`, `hospital`, `d_date`,`type`) VALUES ('$did','$blood_bank','$unit','$bgroup','$age','$doctor','$hospital',sysdate(),'$type')";
	 // echo $q; exit;
	 // $qExe=mysqli_query($con, $q);
	 //if($qExe)
	  // {
		//   echo "<script>alert('donar-registration succesful')</script>";
	   //}
   //   else 
    //  echo "donar-registration failed";
     // }
	 // }
	//  else{ echo "<script>alert('email already exists')</script>";}
  //}







       $run=mysqli_query($con,$q);
	   if($run==true)
	   {
       ?>
		<script>
			alert('Data Inserted Successfully');
		</script>
		<?php
	   }

   }
?>

 <br><br><br><br><br>
 </div>
</center>
 </div>



 <div class="footer">
         <div class="row">
             <div class="col-sm-4">
                 <h2>Contact Us</h2><br>
                 <h4>Email:&nbsp; Anandjhacse12345@gmail.com<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;22rajeshprasad@gmail.com</h4>
               
             </div>
             
             <div class="col-sm-4">
                 <h2>Connect</h2><br>
                 <a href="#"><span class="fa fa-facebook-square"></span></a>
                 <a href="#"><span class="fa fa-twitter"></span></a>
                 <a href="#"><span class="fa fa-youtube"></span></a>
              </div>
             
             <div class="col-sm-4">
                 <h2>Developer</h2><br>
                 <P><big>Rajesh Prasad<br>Anand Jha<br>Suhel Ansari<br>Nikhil Kandhay</big></p>
              </div>
              
             
         </div>
        </div>
    
 </body>
 </html>
 