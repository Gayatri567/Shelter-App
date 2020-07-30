<?php
require_once('header.php');
?>
		<!--breadcrumb Section starts-->
		<section class="contact">
			<div class="bread-crumb">
				<div class="container">
					<h1 class="text-white text-center">CONTACT PAGE</h1>
					<ul class="breadcrumbs">
						<li style="color:gray"><a href="index 2.php">Home</a></li>-
						<li class="active">CONTACT</li>
					</ul>
				</div>
			</div>
		</section>
		<!--breadcrumb Section ends-->
		
		<!--Contact Heading Section-->
		<?php
		$ret=mysqli_query($con,"SELECT * FROM `site_administration`");
		$row=mysqli_fetch_array($ret);
		?>
		
			<section class="contact">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-9">
							<h2>JOIN THE ULTIMATE AND IRREPLACABLE EXPERIENCE NOW! </h2>
						</div>
						<div class="col-12 col-md-3">
							<h2><span class="call-now">Call Now</span> : <a href="tel:+91 1234567789">+91 <?php echo $row['MobileNumber'];?></a></h2>
						</div>
					</div>
				</div>
			</section>
			<?php 
			$msg="";
			if(isset($_POST['submit']))
			{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$subject=$_POST['subject'];
			$message=$_POST['message'];
			$created_on=date("Y-m-d H:i:s");
			$modified_on=date("Y-m-d H:i:s");
			$query="INSERT into `enquiry` (name, Email, MobileNumber,subject,message, CreatedDate,  ModifiedDate)
			VALUES ('$name', '$email', '$mobile','$subject','$message',  '$created_on', '$modified_on')";
		 
			$result = mysqli_query($con,$query);
			   if($result){
					$msg= "conatct Details added  successfully.";
			 }
			 else {
			$msg= "Sorry, there was an error while uploading the details.";
			}	
			}
			?>
			<section class="contact mb-5 pb-5"">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="map">
							<?php echo $row['map'];?>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="conatct-form">
								<form action="" class="needs-validation" novalidate method="post">
								 <?php if($msg!="")
								  {
									  echo '<div class="alert alert-danger alert-dismissible fade show">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<strong></strong>'.$msg.'
								  </div>';
									}
									?>
									<div class="form-group">
									  <label for="name">Name:</label>
									  <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name" required>
									  <div class="valid-feedback">Valid.</div>
									  <div class="invalid-feedback">Please fill out this field.</div>
									</div>
									<div class="form-group">
									  <label for="pwd">Email:</label>
									  <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email" required>
									  <div class="valid-feedback">Valid.</div>
									  <div class="invalid-feedback">Please fill out this field.</div>
									</div>
									<div class="form-group">
									  <label for="pwd">Mobile:</label>
									  <input type="text" class="form-control" id="mobile" placeholder="Enter your Phone Number" name="mobile" required>
									  <div class="valid-feedback">Valid.</div>
									  <div class="invalid-feedback">Please fill out this field.</div>
									</div>
									<div class="form-group">
									  <label for="pwd">Subject:</label>
									  <input type="text" class="form-control" id="subject" placeholder="Enter Subject" name="subject" required>
									  <div class="valid-feedback">Valid.</div>
									  <div class="invalid-feedback">Please fill out this field.</div>
									</div>
									<div class="form-group">
									  <label for="pwd">Message:</label>
									  <textarea type="text" class="form-control" id="message" placeholder="Enter Message" name="message" row="4" required></textarea>
									  <div class="valid-feedback">Valid.</div>
									  <div class="invalid-feedback">Please fill out this field.</div>
									</div>
									<input type="submit" id="submit" name="submit" class="btn btn-warning text-white text-center" value="submit">
								 </form>
							 </div>
						</div>
					</div>
				</div>
			</section>
		<!--Contact Heading Section ends-->
<?php
require_once('footer.php');
?>