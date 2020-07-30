<?php
include('header.php');
?>		
		<!--breadcrumb Section starts-->
		<section class="contact">
			<div class="bread-crumb">
				<div class="container">
					<h1 class="text-white text-center">ABOUT PAGE</h1>
					<ul class="breadcrumbs">
						<li style="color:gray">Home </li> -
						<li class="active">ABOUT</li>
					</ul>
				</div>
			</div>
		</section>
		<!--breadcrumb Section ends-->
		
		<!--Section starts-->
		<section class="mb-5 pb-5">
			<div class="container">
				<div class="row align-items-center">
				<?php
					$ret=mysqli_query($con,"SELECT * FROM `about-us`");
					$row=mysqli_fetch_array($ret);
				?>
            
					<div class="col-12 col-md-4">
						<h1 class="text-warning"><?php echo $row["title"]; ?></h1>
					</div>
					<div class="col-12 col-md-4">
						<img src="<?php echo'admin/'.$row["image"]?>" alt="not exist" width="300px" height="400px" class="about-image">
					</div>
					<div class="col-12 col-md-4">
						<p class="about-description"><?php echo $row["Description"]; ?></p>
					</div>
				</div>
			</div>
		</section>	
		<!--section ends--> 
		
<?php
include('footer.php');
?>