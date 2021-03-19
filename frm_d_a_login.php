<?php
 include "connection.php";
 //session_start();
 ?>
 <?php
 
 
 //print_r($_POST);exit;
 if(isset($_POST['sub']))
 {
	
	//print_r($_POST);exit;
	$un=$_POST['un'];
	$ps=md5($_POST['ps']);
	//echo "SELECT * FROM admin WHERE uname='$un' && pass='$ps'";exit;
	
	$q="SELECT * FROM user where phone='".$un."' && password='".$ps."'";
	$res=mysqli_query($con, $q);
	//$count=mysqli_num_rows($res);
	//print_r($res); exit;	
	//$q=$con->prepare("SELECT * FROM admin WHERE uname='$un' AND pass='$ps'");
	//$q->execute();
	//$res=$q->fetchAll();
	if ($data=mysqli_fetch_assoc($res))
      {
		//$_SESSION['loggedin'] = 'yes'; 
		//echo $_SESSION['loggedin'];exit;
		//echo 'Hello';exit;
		$_SESSION['un']=$un;
		header("Location:frm_d_a_home.php");
		
	}
	else 
	{
		echo "<script>alert('Not authentic user')</script>";
	}
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank About</title>
	
	<style type="text/css">
		#address{ width: 50%;height: 300px;float: left;}
		#map{width: 50%;height: 300px;float: left;}
	</style>
</head>
<body>

<?php
include 'heading.php'
?>
   
<div style="height:500px;">
     <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

   <table cellpadding="0" cellspacing="0" width="600px" height="300px" class="tableborder" style="margin:auto; margin-top:100px;" >
     <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td colspan="2" align="center"><h1><b>Donor / Acceptor </b></h1></td></tr>
    
     <tr><td colspan="2">&nbsp;</td></tr>  <tr><td colspan="2">&nbsp;</td></tr> 
                
<tr>
<td align="right"><img src="Images/login1.png" width="200px" height="150px" />
</td>
 
<td style="vertical-align:top">
<table cellpadding="0" cellspacing="0" height="200px">

<tr><td class="lefttd"><b>Mobile<br>(User.Id)</b></td><td><input type="numeric" name="un" placeholder="User.Id" required="required"/></td></tr>
<tr><td class="lefttd"><b>Password</b></td><td><input type="password" name="ps"    placeholder="Password" required="required" pattern="[a-zA-Z0-9]{2,10}" title="please enter only character or numbers between 2 to 10 for password"  /></td></tr>


<tr><td>&nbsp;</td><td>
	<button type="submit"  name="sub" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; cursor: pointer; ">Login</button>
</td></tr>
<br>
 <tr><td style="font-size:14px">Not a Donor?</td><td ><a href="frm_d_a.php" style="color:#C30">Click here</a> to REGISTER.</td></tr>
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
              
</table>
</td></tr></table>


		
</form>
</div>
<?php
include 'footer.php'
?>
</body>
</html>
