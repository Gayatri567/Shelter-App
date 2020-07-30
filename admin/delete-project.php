<?php
include('../includes/dbconnection.php');
$edit_id=$_GET['editid'];
$query="delete from project where ID='$edit_id'";
$result = mysqli_query($con,$query);
           if($result){
            $msg= "project Details deleted  successfully.";
      header('location:manage-project.php');
  
	 }
?>