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
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		#address{ width: 50%;height: 300px;float: left;}
		#map{width: 50%;height: 300px;float: left;}
	</style>
</head>
<div class="header">
	<div class="logo"><h2 align="center"><a href="index.php" >RAKTDAAN</a></h2></div> 
	<div class="nav">
		<div id="a"><a href="index.php">Home</a></div>
		<div id="b"><a href="about.php">About As</a></div>
		<div id="c"><a href="contact.php">Contact Us</a></div>
		<div id="d"><a href="login.php">Login</a></div>
		
	</div>
	
</div>

 <div id="body">



<body><center><form>
	
		<div class="div2">
			SignUp here
		</div><hr>
		<div class="div1">
		<table>
			
         <tr><td>Registration Number :</td><td><input type="text" class="txt1" id="txt1"><br>
																				<label id="l1" style="display: none;">*.Required</label></td></tr>

		<tr><td>Blood-bank Name:</td><td><input type="text" class="txt1" id="txt1"><br>
																				<label id="l1" style="display: none;">*.Required</label></td></tr>

        <tr><td>Aadhar Number:</td><td><input type="text" class="txt1" id="txt1"><br>
																				<label id="l1" style="display: none;">*.Required</label></td></tr>
          


			<tr><td>state:</td><td><input type="text" class="txt1" id="txt1"><br>
																				<label id="l1" style="display: none;">*.Required</label></td></tr>																	
            <tr><td>city:</td><td><input type="text" class="txt1" id="txt1"><br>
																				<label id="l1" style="display: none;">*.Required</label></td></tr>

			<tr><td>Pincode :</td><td><textarea placeholder="type pincode" class="txt1" id="txt3"></textarea><br>
																				<label id="l3" style="display: none;">*.Required</label></td></tr>
			<tr><td>Location:</td><td><input type="text" class="txt1" id="txt1"><br>
																				<label id="l1" style="display: none;">*.Required</label></td></tr>																	
			<tr><td>Owner/Employee :</td><td><input type="text" class="txt1" id="txt1"/><label id="l1" style="display: none;">*.Required</label></td></tr>


			<tr><td>Mob. No. :</td><td><input type="text" id="txt4"  class="numeric"><br><span class="error" style="color: Red; display: none">* Input digits (0 - 9)</span></td>
																				<label id="l1" style="display: none;">*.Required</label></td></tr>															

			
			<tr><td>Registration Date :</td><td><input type="text" class="txt1" id="txt5"><br><label  id="l4" style="display: none;">* Please enter valid date</label></td></tr>


			<tr>
        <td><input type="submit" name="sub" value="save"></td>
      </tr>
			
		</table>
	</form>
	</div>
	</center>
</form>

 <?php
  if(isset($_POST['sub'])&& $_POST['sub']=='save' )
  {
	  $regis_no=$_POST['regis_no'];
	  $bloodbank_name=$_POST['bloodbank_name'];
	  $aadhar=$_POST['aadhar'];
	   $state=$_POST['state'];
      $city=$_POST['city'];
      $pincode=$_POST['pincode'];
      $location=$_POST['location'];
      $owner  = $_POST['owner'];  
      $phone=$_POST['phone'];
      $reg_date=$_POST['reg_date'];

        $q= "INSERT INTO `bloodbank_registration`(`regis_no`, `bloodbank_name`, `aadhar`, `state`, `city`, `pincode`, `location`, `owner`,`phone`,`reg_date`) VALUES ('$regis_no','$bloodbank_name','$aadhar','$state','$city','$pincode','$location','$owner','$phone','$reg_date')";


        

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
	 
     
</body>
</html>