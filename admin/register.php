<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shelter Admin Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/register.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
</head>
<body>
<?php
require('../includes/dbconnection.php');
if (isset($_REQUEST['uname']))
{
	$name=stripslashes($_REQUEST['name']);
	$name = mysqli_real_escape_string($con,$name); 
	$user_name=stripslashes($_REQUEST['uname']);
	$user_name = mysqli_real_escape_string($con,$user_name);
	$email=stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email); 
	$mobile=stripslashes($_REQUEST['mobile']);
	$mobile = mysqli_real_escape_string($con,$mobile); 
	$password=stripslashes($_REQUEST['pwd']);
	$password = mysqli_real_escape_string($con,$password); 
	$registration_date = date("Y-m-d H:i:s");
	$sql_u = "SELECT * FROM `tbladmin` WHERE UserName='$user_name'";
	$res_u = mysqli_query($con, $sql_u);
	if (mysqli_num_rows($res_u) > 0) {
	 print '<script>alert("Sorry... username already taken") </script>';
	 }else{
	$query="INSERT into `tbladmin` (AdminName, UserName, MobileNumber, Email,  Password, AdminRegdate)
	VALUES ('$name', '$user_name', '$mobile', '$email', '".md5($password)."', '$registration_date')";
	$result = mysqli_query($con,$query);
	if($result)
	{
		echo "<div class='form-text text-center'>
		<h3>You are registered successfully.!!</h3>
		<br/>Click here to <a href='login.php'>Login</a></div>";
	}
	 }
}
else {
?>
	
	<div class="container">
	 <div class="login-page-title text-center">
		<img class="text-center" src="logo.png" alt="No Image Found" width="200px" height="90px">
	  <h1 class="text-center">Register Here</h1>
		</div>
	  <form action="" class="needs-validation" novalidate>
		<div class="form-group">
			<div class="form">
			<i class="fa fa-user-circle" aria-hidden="true"></i>
		  	<input type="text" class="form-control" id="name" placeholder="Name...." name="name" required>
		  	</div>
		  <div class="valid-feedback">Valid.</div>
		  <div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<div class="form-group">
			<div class="form">
			<i class="fa fa-user-circle" aria-hidden="true"></i>
		  	<input type="text" class="form-control" id="uname" placeholder="Username...." name="uname" required>
			</div>
		  <div class="valid-feedback">Valid.</div>
		  <div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<div class="form-group">
			<div class="form">
			<i class="fa fa-phone" aria-hidden="true"></i>
		  	<input type="tel" class="form-control" id="mobile" placeholder="Phone Number...." pattern="[0-9]{5}[0-9]{5}" name="mobile" required>
			</div>
		  <div class="valid-feedback">Valid.</div>
		  <div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<div class="form-group">
			<div class="form">
			  <i class="fa fa-envelope" aria-hidden="true"></i>
			  <input type="email" class="form-control" id="email" placeholder="E-mail...." name="email" required>
			</div>
		  <div class="valid-feedback">Valid.</div>
		  <div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<div class="form-group">
			<div class="form">
		  <i class="fa fa-lock" aria-hidden="true"></i>
		  <input type="password" class="form-control" id="pwd" placeholder="Password...." name="pwd" required>
			</div>
		  <div class="valid-feedback">Valid.</div>
		  <div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<div class="text-center">
		<button type="submit" class="btn">Register</button>
		</div>
	  </form>
	</div>
<?php 
}
?>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

</body>
</html>
