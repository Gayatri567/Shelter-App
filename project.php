<?php
include('header.php');
?>		
		<!--breadcrumb Section starts-->
		<section class="contact">
			<div class="bread-crumb">
				<div class="container">
					<h1 class="text-white text-center">PROJECTS PAGE</h1>
					<ul class="breadcrumbs">
						<li style="color:gray">Home </li> -
						<li class="active">PROJECT</li>
					</ul>
				</div>
			</div>
		</section>
		<!--breadcrumb Section ends-->
		 <!--section start-->
		<section class="project mb-5 pb-5">
			<div class="container">
			<div class="row">
				<?php
					$ret=mysqli_query($con,"SELECT * FROM `project`");
					while ($row=mysqli_fetch_array($ret)){
				?>
					
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-5">
				<div class="project-item">
					<div class="image">
					      <div><img src="<?php echo'admin/uploads/project/'.$row["project_image"]?>" alt="Not Found" width="350" height="420"/></div>
					</div>
					<div>
						<p class="project-head "><?php echo $row["title"]; ?></p>
						<a href="#" class="project-a btn">View More</a>
					</div>
				</div>
				</div>
				 <?php
				}
			   ?>
			</div>
			</div>
			</div>
		</section>
		<!--section ends-->
<?php
include('footer.php');
?>