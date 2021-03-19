<?php

$con = mysqli_connect('localhost','root','','raktdan');

if($con == false)
{
  echo "connection is not done";

}
//else
  //echo "DB CONNECTED SUCCESSFULLY";


?>
<html>
<head>
	<title>Blood Bank About</title>
	
	<!-- Latest compiled and minified CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
		<!--<script src="js/bloodbank_registration.js"></script>-->
	<style type="text/css">
	
		#address{ width: 50%;height: 300px;float: left;}
		#map{width: 50%;height: 300px;float: left;}
	</style>
</head>


<body>
<?php
include 'heading.php'
 ?>

	
	<form action="" method="POST" onsubmit="return validation()" enctype="multipart/form-data" style="padding: 10px;">
	    <center>
		<div class="div2">
			<h3>BloodBank-Registration</h3>
		</div>
		<br><br>
	<div class="div1">
	<table style="background-color: whitesmoke">
			
     <tr>
         <td  width="200px" height="50px">Registration Number :</td>
         <td  width="200px" height="50px"><input type="text" id="register_id" class="form-control"  name="regis_no" required="required" ><br>
		
    </tr>
	
	<tr>
		<td  width="200px" height="50px">Blood-bank Name:</td>
		<td  width="200px" height="50px"><input type="text" class="form-control"  name="bloodbank_name" required="required"><br>
		
	</tr>

    <tr>
        <td width="200px" height="50px">State:</td>
		<td width="200px" height="50px"><input type="text" class="form-control" name="state" required="required"><br>
		
    </tr>
    <tr>

		<td  width="200px" height="50px">City:</td>
    	<td  width="200px" height="50px"><input type="text" class="form-control" name="city" required="required"><br>
	   </td>
    

	</tr>

    <tr>
    	<td  width="200px" height="50px">Address:</td>
		<td  width="200px" height="50px"><textarea name="address"  class="form-control" required="required"></textarea><br>
		
    </tr>

    <tr>
    
		<td  width="200px" height="50px">Pincode :</td>
		<td  width="200px" height="50px"><input type="numeric" class="form-control" name="pincode" required="required"><br>
	
	</tr>
		
    </tr>
		<td  width="200px" height="50px">Owner/Employee :</td>
		<td  width="200px" height="50px"> <select name="owner" class="form-control" required="required">
	                                        <option>Owner</option>
	                                        <option>Employee</option>
	  
	                                      </select>
		
    </tr>

    <tr>
		<td  width="200px" height="50px">Mobile :</td>
    	<td  width="200px" height="50px"><input type="numeric" class="form-control"  class="numeric"  name="mobile_no" required="required"><br><span class="error" style="color: Red; display: none">* Input digits (0 - 9)</span></td>
		
	</tr>
<tr>
	<td  width="200px" height="50px">email-id :</td>
    	<td  width="200px" height="50px"><input type="vharchir" class="form-control"  class="vharchar"  name="email_id" required="required"><br><span class="error" style="color: Red; display: none"></span></td>

  </tr>														

		<td  width="200px" height="50px">Registration Date :</td>
		<td  width="200px" height="50px"><input type="date"  class="form-control" readonly  name="reg_date" value="<?php echo date("Y-m-d")?>"><br>
	    </td>
    </tr>
   
    <tr>
		<td  width="200px" height="50px">Upload Registration:</td>
		<td  width="200px" height="50px"><input  type="file" class="form-control" name="upload_regis" required="required" ><br>
	     </td>
	</tr>
    
    <tr>
    <td width="200px" height="50px">Password:</td>
   <td width="200px" height="50px"><input type="password" class="form-control" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password" name="password" required="required"></td>
    </tr>
    </table>
			
     
	<br><br>
	<button type="submit"  name="sub"  style="border:0px; background:linear-gradient(#900,#D50000); width:100px ;height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; cursor: pointer; ">
  		save
  	</button>

    </form>
    </center>
<script type="text/javascript">
		
		function validation(){
		var register_id=document.getElementById('register_id').value;
		alert(register_id);
		
	}
</script>

 <?php

  if(isset($_POST['sub']))
  {
	  $regis_no=$_POST['regis_no'];
	  $bloodbank_name=$_POST['bloodbank_name'];
	  $state=$_POST['state'];
	  $city=$_POST['city'];
	  $address=$_POST['address'];
	  $pincode=$_POST['pincode'];
	  $owner   = $_POST['owner'];
	  $mobile_no=$_POST['mobile_no'];
	  $email_id=$_POST['email_id'];
	  $reg_date=$_POST['reg_date'];
	  $upload_regis=$_FILES['upload_regis']['name'];
	  $tempname=$_FILES['upload_regis']['tmp_name'];
	move_uploaded_file($tempname, "dataimg/$upload_regis");
	   $password=md5($_POST['password']);

      
      
  // $q= "INSERT INTO `bloodbank_registration`(`regis_no`, `bloodbank_name`, `state`, `city`, `address`, `pincode`, `owner`, `mobile_no`,`reg_date` ,`upload_regis `) VALUES ('$regis_no','$bloodbank_name','$state','$city','$address','$pincode','$owner','$mobile_no',sysdate() ,'$imagename')";


  $q= "INSERT INTO `bloodbank_registration`(`regis_no`, `bloodbank_name`, `state`, `city`, `address`, `pincode`, `owner`, `mobile_no`,`email_id`, `reg_date`, `upload_regis`,`password`) VALUES ('$regis_no','$bloodbank_name','$state','$city','$address','$pincode','$owner','$mobile_no','email_id',sysdate(),'$upload_regis','$password')"; 
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
<br><br><br><br><br><br>
<?php
include 'footer.php'
?>	 
     
</body>
</html>