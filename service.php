<?php
include('header.php');
?>			
		<!--breadcrumb Section starts-->
		<section class="contact">
			<div class="bread-crumb">
				<div class="container">
					<h1 class="text-white text-center">SERVICE PAGE</h1>
					<ul class="breadcrumbs">
						<li style="color:gray">Home </li> -
						<li class="active">SERVICES</li>
					</ul>
				</div>
			</div>
		</section>
		<!--breadcrumb Section ends-->
		
		<!--service section starts-->
			<section class="mt-1 pt-1 mb-5">
				<div class="container">
					<div class="row">
					<?php
					$ret=mysqli_query($con,"SELECT * FROM `service`");
					while ($row=mysqli_fetch_array($ret)){
					?>
						<div class="col-lg-3 col-md-3 col-sm-6 col-12">
						  <div class="card service shelter-event mt-1">
							  <i class="<?php echo $row["icon"]; ?>"></i>				  
							  <div class="card-body text-center mt-0 pt-0">
								  <p class="service-text"><?php echo $row["title"]; ?></p>
								  <p class="service-text"><?php echo $row["description"]; ?></p>
							  </div>
						  </div>
						</div>
						<?php
						}
						?>
					</div>
				</div>
			</section>
		<!--service section ends-->
<?php
include('footer.php');
?>