<?php
include("connection.php");
$v = json_decode($_GET["x"],true);
$usage = $v['usage'];
$status = $v['status'];
switch($usage){
   case "rempro":
   $set = "" ;
        $id = $v['id'];
        if($status == "Approved") $set = "Pending" ;
        else $set = "Approved";
       $query = "UPDATE bloodbank_registration set status='$set' where regis_no = $id" ;
        $val = mysqli_query($con,$query);
        echo "reload()";
        break;
    case "updpro":
        $id = $v['id'];
        $field = $v['field'];
        $value = $v['value'];
        $query = "UPDATE product SET $field = '$value' WHERE id = $id";
        $val = mysqli_query($con,$query);

}
?>