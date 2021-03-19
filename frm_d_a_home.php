
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


 <div id="body" style="padding-bottom: 100px;">
 
<?php 
   $un=$_SESSION['un'];
  if(!$un)
  {
	  header("Location:frm_d_a_login.php");
  }
?>	
<center>
 <h1><b>Donor/ Acceptor</b></h1>

 </center>
<br><br><br>
<center>

	<div class="col-sm-12">
   
 <form action="frm_d_a_home.php" method="post">
 <table class="table"style="background-color: pink; padding:300px;">
 <tr>
  <td width="200px" height="50px"><b>User.Id:</b> </td>
      <td width="200px" height="50px"><input type="numeric" name="did"  class="form-control  " placeholder="Enter Id" required="required"></td>
  </tr>     

<tr>
  <td width="200px" height="50px"><b>Blood_bank:</b></td>
  <td width="200px" height="50px">

  <select name="blood_bank" id="blood_bank" class="form-control">
 <!-- <option value=""> Select Bloodbank</option>--> 

  <?php 
$sql="SELECT * FROM `bloodbank_registration` where status='Approved'";
  $run=mysqli_query($con,$sql);
  //print_r($run); exit();
  
  while ($data=mysqli_fetch_assoc($run))
      {
    
    ?>
<option value="<?php echo $data['regis_no'] ?>"><?php echo $data['bloodbank_name'] ?></option>
<?php
    
  }

  ?>


</select>



</td>

 </tr>


 <tr>

  <td width="200px" height="50px"><b>Unit:</b></td>
  <td width="200px" height="50px">
    <select name="unit" class="form-control">
    <option>1</option>
    <option>2</option>
    <option>3</option>  
  </select>
  </td>

   </tr>

  <tr>

  <td width="200px" height="50px"><b>Blood Group:</b>></td>
  <td width="200px" height="50px">
    <select name="bgroup" class="form-control">
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

  <td width="200px" height="50px"><b>Age:</b></td>
  <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age" class="form-control" required="required"></td>
  </tr>

  <tr>
  <td width="200px" height="50px"><b>Doctor's Name:</b></td>
  <td width="200px" height="50px"><input type="text" name="doctor" placeholder="Enter's Name"  class="form-control"required="required"></td>
  
  </tr>
  
  <tr>
  <td width="200px" height="50px"><b>Hospital Name:</b></td>
  <td width="200px" height="50px"><input type="text" name="hospital" placeholder="Enter Hospital's Bame" class="form-control" required="required"></td>
</tr>

<tr>
  <td width="200px" height="50px"><b>Date:</b></td>
  <td  width="200px" height="50px"><input type="date" class="form-control"  name="d_date"><br></td>
  </tr>

<tr>
  <td width="200px" height="50px"><b>Type:</b></td>
  <td width="200px" height="50px">
   <select name="type" class="form-control">
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
      echo "<script>window.location = 'bill.php'</script>";


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
</center>
 </div>


 </body>
 </html>
 
 