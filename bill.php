
<?php
 include "connection.php";
 //session_start();
 ?>



<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Registration Bill</title>
    <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
    <style>
        #print{
            float:right;
            margin-bottom:10px;
        }
        #customer{
            margin-left:5px;
        }
        #company{
            color:black;
        }
        .details{
            float:right;
            margin-right:20px;
        }
    #total{
        float:right;
        margin-right:100px;
    }
    #invoice {
        width:100%;
        border-spacing: 0;
        border-collapse: collapse;
  }
    .box-inner{
        margin-top:20px;
        margin-left:30px;
        margin-right:30px;
        border: 1px solid #DEDEDE;
        border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        box-shadow: 0 0 10px rgba(189, 189, 189, 0.4);
        -webkit-box-shadow: 0 0 10px rgba(189, 189, 189, 0.4);
        -moz-box-shadow: 0 0 10px rgba(189, 189, 189, 0.4);
    }
        .logo{
            float:left ;
            margin-left:0.2px;
        }
        img{
            height:50%;
            width:50%;
        }
        .tax{
            text-align: center;
            vertical-align: middle;
        }
        .customer{
            float:left;
        }
        
    </style>
    </head>

    <body>
    <button onclick="window.print()">Print</button>
    <div class="container-fluid box-inner">
        <div class = "row logo"><img src="img/iffdc.png" class="logo"></div>
        <div class = "row details"><h3 id="company">Raktadan Donor/ Acceptor Bill</h3></div>
        <hr style="width:100%">
        <div>
           
           <div>
               <strong>Register User:</strong><br>
               <p id = "customer"><?php 
                                               
                                              //  $v="select * from `tbl_donor`";
                                               
                                        ?>
                        </p><br>
           </div><br>
                <table id = "invoice" class="table-bordered center bootstrap-datatable">
                    <thead style="background:#f2f2f2">
                        <th>User.Id</th>
                        <th>Bloodbank-Name</th>
                        <th>Unit</th>
                        <th>Blood Group</th>
                        <th>Age</th>
                        <th>Doctor</th>
                        <th>Hospital</th>
                        <th>Date</th>
                        <th>Type:</th>
                      
                    </thead>
                    <tbody id="invoice body">
                        
<?php 
    
    
 
 //$bggroup=$_POST['bggroup'];

 $query = "SELECT * FROM `tbl_donor`  ";
 

//$sql="SELECT * FROM `donar_registration` WHERE city='$city' and bggroup='$bg'";

//$res=mysqli_query($con,$sql);///

//$row=mysqli_fetch_array($res);

//echo $row[0];

    $result = mysqli_query($con, $query);
   // print_r($result); exit();
    if($result)
    {
      while($row = mysqli_fetch_assoc($result))
      {
    ?>
    
    <tr>
       <td><center><?php echo $row['did']; ?></center></td> 
       <td><center><?php echo $row['blood_bank'];?></center></td>
       <td><center><?php echo $row['unit'];?></center></td>
       <td><center><?php echo $row['bgroup'];?></center></td>
       <td><center><?php echo $row['age'];?></center></td>
       <td><center><?php echo $row['doctor'];?></center></td>
       <td><center><?php echo $row['hospital'];?></center></td>
       <td><center><?php echo $row['d_date'];?></center></td>
       <td><center><?php echo $row['type'];?></center></td>
      
    </tr>
    <?php 
    }}
    ?>

                    </tbody>
                </table>
                
        </div>
    </div>
    
    </body>
</html>