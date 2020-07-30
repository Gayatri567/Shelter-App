<?php
include('header.php');
?>	
	<!-- carousel section -->
      <section>
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
			<?php
			$ret=mysqli_query($con,"select *from  banner limit 3");
			$active="active";
			while ($row=mysqli_fetch_array($ret)){
			?>
               <div class="carousel-item <?php echo $active;?>">
                  <img src="<?php echo'admin/uploads/banner/'.$row["banner_image"]?>" alt="Los Angeles" width="100%" height="590"> 
                  <div class="container">
                     <div class="overlay"></div>
                     <div class="carousel-caption text-center">
                        <h1 class="text-warning"><?php echo $row['title'] ?></h1>
                        <p class="text-white font-weight-bold"><?php echo $row['sub_title'] ?></p>
                        <p><a class="btn btn-lg btn-warning text-white" href="#" role="button">View Mode</a></p>
                     </div>
                  </div>
               </div>
			    <?php
				$active='';
				}
			   ?>
			   <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               
			   <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </section>
	  <!-- carousel section end-->
		
		<!--About us section-->
		<section class="m-0 p-0 p-md-5 m-md-5 py-5">
			<div class="container">
						<?php
					$ret=mysqli_query($con,"SELECT * FROM `about-us`");
					$row=mysqli_fetch_array($ret);
				?>
				
				<h1 class="text-center text-warning"><?php echo $row["title"]; ?></h1>
            <div class="row">
			   <div class="col-lg-4 col-md-4 col-sm-12">
					<img src="<?php echo'admin/'.$row["image"]?>" class="img-fluid img-thumbnail border border-warning home-about-img">
               </div>
               <div class="col-lg-8 col-md-8 col-sm-12 border-left border-warning home-about-border">
					<p class="text-justify pt-3 home-about-line-height">
						 <?php echo $row["Description"]; ?>
					</p>
				</div>
				</div>
			</div>
		</section>
		<!--About us section end-->
		
		<!-- project section-->
		  <section>
			<div class="container">
				<div class="row justify-content-center">
				
					<div class="col-12 mt-5 pt-5">
						<div class="text-center">
							<span>View our awsome projects</span>
							<h2 class="home-project"><b>Occpy house </b>Make Life better</h2>
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit autugit, sed consequuntur magni dolores ratione voluptatem sequi nesciunt. Neque porro quisquamst. Nemo enim ipsam voluptatem quia volupta.</p>
							<a class="btn btn-warning text-white" href="#" title="">View more</a>				
						</div>
					</div>
					<br><br>
					<div class="col-12 mt-5 pt-5">
						<div class="home-project-section center-dots">
							<div class="project-item">
								<img src="image/a.jpg" alt="Not Found" width="400" height="430"/>
								<div class="project-name">
									<h3>Project 1</h3>
									<a href="#">View More >> </a>
									<a class="btn btn-warning btn-booknow" href="#"> BOOK NOW</a>
								</div>
							</div>
							<div class="project-item">
								<img src="image/f.jpg" alt="Not Found"  width="400" height="430"/>
								<div class="project-name">
									<h3>Project 2</h3>
									<a href="#">View More >> </a>
									<a class="btn btn-warning btn-booknow" href="#"> BOOK NOW</a>
								</div>
							</div>
							<div class="project-item">
								<img src="image/b.jpg" alt="Not Found"  width="400" height="430"/>
								<div class="project-name">
									<h3>Project 3</h3>
									<a href="#">View More >> </a>
									<a class="btn btn-warning btn-booknow" href="#"> BOOK NOW</a>
								</div>
							</div>
							<div class="project-item">
								<img src="image/g.jpg" alt="Not Found"  width="400" height="430"/>
								<div class="project-name">
									<h3>Project 4</h3>
									<a href="#">View More >> </a>
									<a class="btn btn-warning btn-booknow" href="#"> BOOK NOW</a>
								</div>
							</div>
							<div class="project-item">
								<img src="image/c.jpeg" alt="Not Found"  width="400" height="430"/>
								<div class="project-name">
									<h3>Project 5</h3>
									<a href="#">View More >> </a>
									<a class="btn btn-warning btn-booknow" href="#"> BOOK NOW</a>
								</div>
							</div>
							<div class="project-item">
								<img src="image/e.jpg" alt="Not Found" width="400" height="430"/>
								<div class="project-name">
									<h3>Project 6</h3>
									<a href="#">View More >> </a>
									<a class="btn btn-warning btn-booknow" href="#"> BOOK NOW</a>
								</div>
							</div>
							<div class="project-item">
								<img src="image/d.jpg" alt="Not Found"  width="400" height="430"/>
								<div class="project-name">
									<h3>Project 7</h3>
									<a href="#">View More >> </a>
									<a class="btn btn-warning btn-booknow" href="#"> BOOK NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		  </section>
		<!--project section end-->
		
		<!--Service section start-->
			<section class="mt-5 pt-5 mb-5">
				<div class="container">
					<h1 class="text-center text-warning text-weight-bold">Our Services</h1>
					<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
					  <div class="card home-service mt-1">
					         <i class="fa fa-building-o"></i>
						  <div class="card-body text-center mt-0 pt-0">
							  <h4 class="card-title">LUXURY</h4>
						  </div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					  <div class="card home-service mt-1">
					      <i class="fa fa-coffee"></i>
						  <div class="card-body text-center mt-0 pt-0">
							  <h4 class="card-title">GREAT SERVUCES</h4>
						  </div>
					  </div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
					  <div class="card home-service mt-1">
						<i class="fa fa-laptop"></i>
						  <div class="card-body text-center mt-0 pt-0">
							  <h4 class="card-title">24/7 Services</h4>
						  </div>
					  </div>
					</div>
				</div>
					<div class="text-center mt-2">
					<a class="btn btn-warning btn-lg text-white">View all Services</a>
					</div>
				</div>
			</section>
		<!--Service section ends-->
		
 <?php
include('footer.php');
?>