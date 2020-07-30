<?php
$active= 'view-enquiry';
include('header.php');
$view_id=$_GET['viewid'];
$ret=mysqli_query($con,"select * from `enquiry` where ID=$view_id");
$row=mysqli_fetch_array($ret);
									
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">View Enquiry</h1>
      </div>
	<div class="container">
		<form action="" class="needs-validation" novalidate method="post">
			<div class="form-group">
			  <label for="name">Name:</label>
			  <input type="text" class="form-control" id="name" readonly="true" placeholder="Enter your Name" name="name" value="<?php echo $row['name'];?>" required>
			</div>
			<div class="form-group">
				<label for="pwd">Email:</label>
				<input type="email" class="form-control" id="email" readonly="true" placeholder="Enter your Email" name="email" value="<?php echo $row['Email'];?>" required>
			</div>
			<div class="form-group">
			   <label for="pwd">Mobile:</label>
				<input type="text" class="form-control" id="mobile" readonly="true" placeholder="Enter your Phone Number" name="mobile" value="<?php echo $row['MobileNumber'];?>" required>
			</div>
			<div class="form-group">
				<label for="pwd">Subject:</label>
				<input type="text" class="form-control" id="subject" readonly="true" placeholder="Enter Subject" name="subject" value="<?php echo $row['subject'];?>" required>
			</div>
			<div class="form-group">
				<label for="pwd">Message:</label>
				<textarea type="text" class="form-control" id="message" readonly="true" placeholder="Enter Message" name="message" row="4" value="<?php echo $row['message'];?>" required></textarea>
			</div>
		</form>
</div>
</main>
<?php
include('footer.php');	
?>