<?php

$con = mysqli_connect('localhost','root','','raktdan');

if($con == false)
{
  echo "connection is not done";

}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Home</title>
	
	
	
</head>
<body>
<?php
include 'heading.php'
?>


<br><br>

<div class="container">
<div class="row">
    <div class="col-sm-6">
      <form action="frm_d_a_login.php" method="post" >
   <button type="submit"  name="sub" value="save" style="border:0px; background:linear-gradient(#900,#D50000); width:400px; height:100px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:30px; text-shadow:1px 1px 6px black; cursor: pointer; ">
     Donor / Acceptor Sign
    </button>
     </form>
    </div>
<div class="col-sm-6">
   <form action="frm_bloodbank_list.php" method="post">
   <button type="submit"  name="sub" value="save" style="border:0px; background:linear-gradient(#900,#D50000); width:400px; height:100px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:30px; text-shadow:1px 1px 6px black; cursor: pointer; ">
     Bloodbank Sign-In
    </button>
     </form>
   </div>







   
             
        

    
    
 
  


</div>
</div>
<br><br><br><br>

<br><br>

<?php
include 'footer.php'
?>
</body>
</html>