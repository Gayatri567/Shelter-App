<?php
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include("includes/dbconnection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<!--meta tag section-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--meta tag section end-->
		
		<title>Shelter - sevice Aparment</title>
		
		<!-- css link section-->
		<!--bootsrap-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<!-- css link section end-->  
	</head>
	
	<body>
		<!--header secion-->
		<header>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top transparent">
				<a class="navbar-brand" href="#"><img src="image/logo.png" alt="No image found" width="200px" height="50px"/></a>
				<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon text-white"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
					<ul class="navbar-nav menu-list-format pr-md-0 mr-md-0 pl-md-0">
						<li class="nav-item <?= ($activePage == 'index') ? 'active':''; ?>">
                     <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
				  <li class="nav-item <?= ($activePage == 'about') ? 'active':''; ?>">
                     <a class="nav-link text-white" href="about.php">About <span class="sr-only">(current)</span></a>
                  </li>
				  <li class="nav-item <?= ($activePage == 'project') ? 'active':''; ?>">
                     <a class="nav-link text-white" href="project.php">Project <span class="sr-only">(current)</span></a>
                  </li>
				  <li class="nav-item <?= ($activePage == 'service') ? 'active':''; ?>">
                     <a class="nav-link text-white" href="service.php">Service <span class="sr-only">(current)</span></a>
                  </li>
				  <li class="nav-item <?= ($activePage == 'contact') ? 'active':''; ?>">
                     <a class="nav-link text-white" href="contact.php">Contact <span class="sr-only">(current)</span></a>
                  </li>
					</ul>
					<button class="btn btn-warning d-none d-md-block bg-warning text-white" data-toggle="modal" data-target="#myModal" type="button">
						BOOK NOW
					</button>
				</div>
			</nav>
		</header>
		<!--header secion end-->