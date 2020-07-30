<?php
$active= 'add-banner';
include('header.php');
$edit_id=$_GET['editid'];
?>
<?php
if(isset($_POST['submit']))
{
	$title=$_POST['title'];
	$icon=$_POST['icon'];
	$description=$_POST['description'];
	$modified_on=date("Y-m-d H:i:s");
	
	$query="update service set title='$title',icon='$icon',description='$description',modified_on='$modified_on' where  ID='$edit_id'";
	$result = mysqli_query($con,$query);
    if($result){
    $msg= "Service Details updated  successfully.";
     }	
	 else {
    $msg= "Sorry, there was an error while uploading the details.";
	}
}
?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Services</h1>
      </div>
	  <div class="container my-5 form">
	 <form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
		
	  <?php if($msg!="")
  {
	  echo '<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong></strong>'.$msg.'
  </div>';
}
$edit_id=$_GET['editid'];
$ret=mysqli_query($con,"select * from `service` where ID=$edit_id");
$row=mysqli_fetch_array($ret);
/*while ($row=mysqli_fetch_array($ret)) {*/	
?>
		<div class="form-group">
			  <label for="title">Title</label>
			  <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" data-rule="required" data-msg="This feild is required" value="<?php  echo $row['title'];?>">
			<div class="validation"></div>
			</div> 
		 <div class="form-group">
			  <label for="icon">Icon</label>
			  <input type="text" class="form-control" id="icon" placeholder="Enter Service Icon" name="icon" data-rule="required" data-msg="This feild is required" value="<?php  echo $row['icon'];?>">
			<div class="validation"></div>
			</div>
			<div class="form-group">
			  <label for="text">Description</label>
			  <textarea type="text" class="form-control" id="description" placeholder="Enter Description" name="description" row="4" data-rule="required" data-msg="This feild is required"><?php  echo $row['description'];?></textarea>
			<div class="validation"></div>
			</div>	
			<div class="text-center">
			<input type="submit" name="submit" id="submit" class="btn btn-warning text-white " value="Submit"/>
		</div> 
		 </form>
		</div>
 </main>
<?php
include('footer.php');
?>