<!--Footer section-->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav class="nav-footer">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="Index.php">Home</a></li>
								<li class="list-inline-item"><a href="about.php">About</a></li>
								<li class="list-inline-item"><a href="project.php">Project</a></li>
								<li class="list-inline-item"><a href="service.php">Services</a></li>
								<li class="list-inline-item"><a href="contact.php">Contact</a></li>
							</ul>
						</nav>
						<div>
							<ul class="list-inline">
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
								<li class="list-inline-item">
									<a href="#"><i class="fa fa-whatsapp"></i></a>
								</li>
							</ul>
						</div>
						<div class="bg-white">
							<hr/>
						</div>
						<div class="footer-copyright text-center">
							<p>&copy; 2020 Copyright:Shelter.com</p>
						</div>
						<div>
							Designed by <a href="https://www.accelerlab.co.in/">Accelerab Techonology</a>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--Footer section end-->

				<?php
				$msg="";
				if(isset($_POST['insert']))
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
						$msg= "BookNow Details added  successfully.";
				 }
				 else {
				$msg= "Sorry, there was an error while uploading the details.";
				}	
				}
				?>
				<!--footer section end-->
				   <!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-lg">
				  <div class="modal-content">
					<div class="modal-header">
					  <h4 class="modal-title text-center">Book Now</h4>
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body mx-5">
					 <form  class="needs-validation contactForm" novalidate method="post">
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
				  <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
				  <div class="validation"></div>
				</div>
				<div class="form-group">
				  <label for="email">Email:</label>
				  <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email" data-rule="email" data-msg="Please Include Valid email">
					<div class="validation"></div>
			   </div>
				<div class="form-group">
				  <label for="mobile">Mobile:</label>
				  <input type="tel" class="form-control" id="mobile" placeholder="Enter your Phone Number" name="mobile" pattern="[0-9]{5}[0-9]{5}" maxlength="12" data-rule="mobile" data-msg="Please Include Valid 10 digit mobile no.">
			   <div class="validation"></div> </div>
				<div class="form-group">
				  <label for="subject">Subject:</label>
				  <input type="text" class="form-control" id="subject" placeholder="Enter Subject" name="subject" data-rule="required" data-msg="Please Include Valid subject">
				<div class="validation"></div></div>
				<div class="form-group">
				  <label for="message">Message:</label>
				  <textarea  class="form-control" id="message" placeholder="Enter Message" name="message" row="4" data-rule="required" data-msg="Please Include Valid message" ></textarea>
				<div class="validation"></div></div>
			  
				<input type="submit" id="insert" name="insert" class="btn btn-warning text-white" value="Submit"/>
			  </form></div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		
		<!-- script section-->
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		  <script type="text/javascript" src="js/custom.js"></script>
		<!-- script section end-->
	
	</body>
</html>