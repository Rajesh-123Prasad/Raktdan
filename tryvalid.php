<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
      <h1 class="text-center bg-dark text-white">Form Validaton Regex</h1>
	<div class="container">
		<br>
		<form onsubmit="return validation()">
			
			

			<div class="form-group">
				<label>Username:</label>
				<input type="text" name="" id="username" class="form-control">
				<span id="usererror" class="text-danger font-weight-bold"></span>
			</div>

			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="" id="password" class="form-control">
				<span id="passworderror" class="text-danger font-weight-bold"></span>
			</div>

			<div class="form-group">
				<label>Confirm Password:</label>
				<input type="password" name="" id="cpassword" class="form-control">
				<span id="cpassworderror" class="text-danger font-weight-bold"></span>
				
			</div>

			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="" id="email" class="form-control">
				<span id="emailerror" class="text-danger font-weight-bold"></span>
			</div>

			<div class="form-group">
				<label>Mobile Number:</label>
				<input type="text" name="" id="number" class="form-control">
				<span id="mobileerror" class="text-danger font-weight-bold"></span>
			</div>

			<center> <input type="submit" name="" class="btn btn-primary"></center>

		</form>
		
	</div>

	<script type="text/javascript">
		
		function validation(){
		var username=document.getElementById('username').value;
		var password=document.getElementById('password').value;
		//alert(password);
		var cpassword=document.getElementById('cpassword').value;
		var email=document.getElementById('email').value;
		var number=document.getElementById('number').value;
		//alert('username');
		var usercheck= /^[A-Za-z.]{3,30}$/;
		var passwordcheck = /^(?=.*[0-9])(?=.*[!@#$%^&*)])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
		var emailcheck= /^[A-Za-z_]{3,}@[A-Za-z]{3,}[A-Za-z.]{2,6}$/;
		var mobilecheck= /^[789][0-9]{9}$/;

		if(usercheck.test(username)){
			document.getElementById('usererror').innerHTML="";

		}
		else{
			document.getElementById('usererror').innerHTML="** username is invalid";
			return false

		}

		if(passwordcheck.test(password)){
			document.getElementById('passworderror').innerHTML="";

		}
		else{
			document.getElementById('passworderror').innerHTML="** password is invalid";
			return false

		}

		if(cpassword.match(password)){
			document.getElementById('cpassworderror').innerHTML="";

		}
		else{
			document.getElementById('cpassworderror').innerHTML="** password is not matching";
			return false

		}

		if(emailcheck.test(email)){
			document.getElementById('emailerror').innerHTML="";

		}
		else{
			document.getElementById('emailerror').innerHTML="** Email is invalid";
			return false


		}

		if(mobilecheck.test(number)){
			document.getElementById('mobileerror').innerHTML="";

		}
		else{
			document.getElementById('mobileerror').innerHTML="** Mobile Number is invalid";
			return false


		}


	}
	</script>

</body>
</html>


