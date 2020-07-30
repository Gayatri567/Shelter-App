<?php
session_start();
error_reporting(0);
include("includes/dbconnection.php");

if (strlen($_SESSION['admin_id']==0)) {
  header('location:logout.php');
  }
?>

    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Shelter - Admin Dashbord</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
	<link rel="stylesheet" href="css/style.css"/>

    <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
	<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#"><img src="logo.png" alt="image not found" width="100px" height="50px"/></a>
	<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="welcome-msg">
	<h6>Welcome <?php
	session_start();
	echo $_SESSION['admin_name'];
	?> </h6>
	</div>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item ">
            <a class="nav-link <?php if($active=='dashbord'){echo 'active';}else{echo'noactive';}?>" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($active=='about-us'){echo 'active';}else{echo'noactive';}?>" href="about-us.php">
              <span data-feather="file"></span>
              About us
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($active=='contact-us'){echo 'active';}else{echo'noactive';}?>" href="contact-us.php">
              <span data-feather="mail"></span>
              Contact us
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($active=='enquiries'){echo 'active';}else{echo'noactive';}?>" href="enquiries.php">
              <span data-feather="users"></span>
              Enquiries
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?php if($active=='add-service'){echo 'active';}else{echo'noactive';}?>" href="add-service.php">
              <span data-feather="bar-chart-2"></span>              
              Add Services
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link <?php if($active=='manage-service'){echo 'active';}else{echo'noactive';}?>" href="manage-service.php">
              <span data-feather="bar-chart-2"></span>              
              Manage Services
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($active=='add-project'){echo 'active';}else{echo'noactive';}?>" href="add-project.php">
              <span data-feather="layers"></span>
              Add Projects
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link <?php if($active=='manage-project'){echo 'active';}else{echo'noactive';}?>" href="manage-project.php">
              <span data-feather="layers"></span>
              Manage Projects
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link <?php if($active=='add-banner'){echo 'active';}else{echo'noactive';}?>" href="add-banner.php">
              <span data-feather="layout"></span>
              Add Banners
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link <?php if($active=='manage-banner'){echo 'active';}else{echo'noactive';}?>" href="manage-banner.php">
              <span data-feather="layout"></span>
              Manage Banners
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <span data-feather="log-out"></span>
              Log-out
            </a>
          </li>
        </ul>	
      </div>
    </nav>
</body>
</html>