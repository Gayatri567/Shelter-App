<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
$msg="";
if(isset($_POST['login']))
{
	$user_name=$_POST['uname'];
	$password=md5($_POST['pwd']);
$query="select * from tbladmin where  UserName='$user_name' && Password='$password' ";

$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result);
if($row>0)
{
  $_SESSION['admin_id']=$row['ID'];
  $_SESSION['admin_name']=$row['AdminName'];
   // $msg="<p class='valid' style='color:green'>Valid user</p>";	
	 header('location:dashboard.php');   
}
else{
	$msg='<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong></strong> Invalid User
  </div>';

}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shelter - Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
   <link rel="stylesheet" href="css/responsive.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="login-page">
<div class="login-page-title text-center">
<img src="../image/logo.png" alt="image not found" width="100px" height="60px"/>
<h2 class="text-center">Login Page</h2>
</div>
 <form action="" class="needs-validation" method="post" novalidate>
   <?php if($msg!="")
  {
	  echo $msg;
}
 ?>
   <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
	
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   
	<div class="text-center">
    <input name="login" type="submit" class="btn text-white" value="Login"/>
</div> 
 </form>
 <a href="register.php" class="register">Click Here to Register</a>
 
 <a href="../index.php" class="home">Go Back to Home page</a>
 </div>
</div>
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