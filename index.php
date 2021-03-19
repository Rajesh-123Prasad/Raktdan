<?php

$con = mysqli_connect('localhost','root','','raktdan');

if($con == false)
{
  echo "connection is not done";

}
//else
  //echo "DB CONNECTED SUCCESSFULLY";
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
    






                        <!-- <table >

                    <form action="index.php" method="post">
                    <tr><td>
  

                    <select name="stateslist" id="statelist">
                    <option value="">Select State</option>
                     <?php 
                   //$sql="SELECT * FROM `state`";
                      // $run=mysqli_query($con,$sql);
                     //print_r($run); exit();
  
                      // while ($data=mysqli_fetch_assoc($run))
                          {
    
                                ?>
                           //<option value="<?php echo $data['state_code'] ?>"><?php echo $data['state_name'] ?></option>
                         <?php
    
                               }

                              ?>


</select>
<br>
</td>
</tr>

<tr>
<td>
    <br>
 <select name="citieslist" id="city-name">
  <option value="">Select City</option>
 </select> 
 
</td>
<br>
</tr>

  <br>
  
  
</form>
 
</table>
<script>
  $('#statelist').on('change', function() {
  var stat= $(this).val();
  
    jQuery.ajax({
      type:"GET",
      url:"getcity.php",
      data: ({ state:stat}),
      success: function(data){
   
       $('#city-name').html(data);
      }
    });
  });
  
  

</script>
<br>
<button>submit</button>-->

                 

 

     
        <div class="col-ld-6" style="width:100%">
                <img src="img/banner.jpg" alt="Login and Register" style="width:100%">
        </div>
        
   
             
        

    
    
 
  


<!--</div>
</div>-->
<br><br><br><br>
   <div class="row" style="margin-left:5px">
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
       <p>Every three seconds, someone needs a blood transfusion! 20% of recipients are children – many are cancer patients, 
        accident victims or patients undergoing surgery. A small needle prick and a little of your time could transform you into a superhero. 
        Yes, by donating blood you’ll be saving up to three human lives each time you donate!
        Isn’t it shocking that about 60% of the population are eligible to donate blood, yet less than 4% do!<br><br>

        June is National Blood Donor month. So, if you’re still in two minds about whether or not to donate blood,  consider the unexpected health benefits as a donor. It’s time to roll up your sleeve and save a life</p>
      </div>


              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                  <div class="panel panel-primary">
                      <div class="panel-heading">NEWS</div>
                        <div class="panel-body">
                         <marquee direction = "up" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="1">Every year on 14 June, countries around the world celebrate World Blood Donor Day (WBDD)<br>
						              <a href="https://www.news18.com/news/buzz/crpf-jawan-donates-blood-to-help-save-injured-naxal-twitter-hails-him-as-face-of-humanity-2030171.html">CRPF Jawan Donates Blood to Help Save Injured Naxal</a>
						 
						               </marquee>
                        </div>
                    </div>
                </div>
            <br>
     </div>
  </div>
</div>

<br><br>

<?php
include 'footer.php'
?>
</body>
</html>