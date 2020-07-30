<style>
	.needs-validation .validation {
    color: red;
    display: none;
    margin: 4px 0 20px 0;
    font-weight: 400;
    font-size: 13px;
}
</style>
<?php
$active= 'contact-us';
include('header.php');
?>
<?php
$msg="";

//unlink('uploads/mini-testimonial-1.jpg');
if(isset($_POST['submit']))
{
	$ID=$_POST['page_id'];
	$site_title=$_POST['title'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$facebook=$_POST['facebook'];
	$twitter=$_POST['twitter'];
	$instagram=$_POST['instagram'];
	$map=$_POST['map'];
	$created_date = date("Y-m-d H:i:s");
	$modified_date = date("Y-m-d H:i:s");
	$logo_details=upload();
	$logo=$logo_details[file_name];
	print_r($logo);
	if($logo!='')
	{
			 if($ID=='')
	  {
	  $query="INSERT into `site_administration` (site_title, Email, MobileNumber, facebook,  twitter, instagram,map,logo,CreatedDate,ModifiedDate)
			VALUES ('$site_title', '$email', '$mobile', '$facebook', '$twitter','$instagarm','$map','$logo','$created_date','$modified_date')";
	  }
	  else{
		  $query="update site_administration set site_title='$site_title',Email='$email',MobileNumber='$mobile',facebook='$facebook',twitter='$twitter',instagram='$instagram',map='$map',logo='$logo',ModifiedDate='$modified_date' where  ID='$ID'";
 
			}
			$result = mysqli_query($con,$query);
               if($result){
				$msg= "You are registered successfully.";
			}
			else{
			       $msg= "Failed to upload data.";
			}
	}
		else{
			$msg=$logo_details[msg];
			}

		}
/*function for uploading file*/
	function upload(){
	$logo_details=array();
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["logo"]["name"]);
	$uploadOk = 1;
		if($_FILES["logo"]["name"]!="")
	{
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$check = getimagesize($_FILES["logo"]["tmp_name"]);
	if($check !== false) {
    $msg= "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
	} else {
    $msg= "File is not an image.";
    $uploadOk = 0;
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	$msg= "Sorry, file already exists.";
	$uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	$msg= "Sorry, your file was not uploaded.";
	
   
// if everything is ok, try to upload file
	} else {
	if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
		 //$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
	$old_file=$_POST["old_logo_value"];
	unlink($old_file);
	//unlink("uploads/$old_file");
		$logo_details['file_name']=$target_file;
    //$msg= "The file ". basename( $_FILES["logo"]["name"]). " has been uploaded.";
	}
	else {
    $msg= "Sorry, there was an error uploading your file.";
	}
	}
	}
	else{
		$target_file=$_POST["old_logo_value"];
			$logo_details['file_name']=$target_file;
    
		
	}
	$logo_details['msg']=$msg;
	return $logo_details;
}
?>
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Contact Us</h1>
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
	$ret=mysqli_query($con,"select * from  site_administration");
	$row=mysqli_fetch_array($ret);
	$cnt=1;
	/*while ($row=mysqli_fetch_array($ret)) {*/	
 ?>
 <input type="hidden" name="page_id" id="page_id" value="<?php echo $row['ID'];?>"/>
 <div class="form-group">
      <label for="title">Site Title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Site Title" name="title" data-rule="required" data-msg="This feild is required" value="<?php  echo $row['site_title'];?>">
    <div class="validation"></div>
	</div> 
 <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Site Email" name="email" data-rule="email" data-msg="Please include valid email" value="<?php  echo $row['Email'];?>">
    <div class="validation"></div>
	</div> 
 <div class="form-group">
      <label for="mobile">Mobile</label>
      <input type="tel" class="form-control" id="mobile" placeholder="Enter Site Mobile Number" name="mobile" data-rule="mobile" data-msg="Please include valid mobile number" value="<?php  echo $row['MobileNumber'];?>">
    <div class="validation"></div>
	</div>
<div class="form-group">
      <label for="facebook">Facebook Link</label>
      <input type="text" class="form-control" id="facebook" placeholder="Enter Site facebook link" name="facebook" data-rule="required" data-msg="Please include valid facebook link" value="<?php  echo $row['facebook'];?>">
    <div class="validation"></div>
	</div>
<div class="form-group">
      <label for="twitter">Twitter Link</label>
      <input type="text" class="form-control" id="twitter" placeholder="Enter Site twitter link" name="twitter" data-rule="required" data-msg="Please include valid twitter link" value="<?php  echo $row['twitter'];?>">
    <div class="validation"></div>
	</div>	
<div class="form-group">
      <label for="instagram">Instagram Link</label>
      <input type="text" class="form-control" id="instagram" placeholder="Enter Site instagarm link" name="instagram" data-rule="required" data-msg="Please include valid instagram link"   value="<?php  echo $row['instagram'];?>"/>
    <div class="validation"></div>
	</div>
	<div class="form-group">
      <label for="map">Map</label>
	  <textarea id="map" class="form-control" name="map" placeholder="Please include the map address" row="4" data-rule="required" data-msg="Please include valid map address"><?php  echo $row['map'];?></textarea>
    <div class="validation"></div>
	</div>
	
	<div>
	<?php 
	 //$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
	if($row['logo'])
	{
	?>
	<div class="form-group">
     <label for="instagram">Logo</label>
     <input type="file" class="form-control" id="logo" placeholder="Enter Site logo" name="logo">
    <div class="validation"></div>
	</div>
	<img src="<?php echo $row['logo']?>" alt=""/>
	<?php
	}
	else{
		
	?>
	<div class="form-group">
      <label for="instagram">Logo</label>
      <input type="file" class="form-control" id="logo" placeholder="Enter Site logo" onchange="return fileValidation()" name="logo" data-rule="required" data-msg="Please include logo">
    <div class="validation"></div>
	</div>
	<?php
	}
	?>
	</div>
	 <input type="hidden" name="old_logo_value" id="old_logo_value" value="<?php echo $row['logo'];?>"/>
  <?php
	/*}*/
	?>
	<div class="text-center">
    <input type="submit" name="submit" id="submit" class="btn btn-warning text-white " value="Submit"/>
</div> 
		<p id="output"></p> 
		<div id="imagePreview"></div>
 </form>
</div>
 </main>
<?php
include('footer.php');	
?>
<script type="text/javascript"> 
			 $('#logo').on('change', function() { 
  
            const size =  
               (this.files[0].size / 1024 / 1024).toFixed(4); 
  
            if (size >4 || size < 0) { 
                alert("File must be between the size of 0-5 MB"); 
            } else { 
                $("#output").html('<b>' + 
                   'This file size is: ' + size + " MB" + '</b>'); 
            }
        });
		 function fileValidation() { 
            var fileInput =  
                document.getElementById('logo'); 
              
            var filePath = fileInput.value; 
          
            // Allowing file type 
            var allowedExtensions =  
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i; 
              
            if (!allowedExtensions.exec(filePath)) { 
                alert('Invalid file type'); 
                fileInput.value = ''; 
                return false; 
            }  
            else  
            { 
                // Image preview 
                if (fileInput.files && fileInput.files[0]) { 
                    var reader = new FileReader(); 
                    reader.onload = function(e) { 
                        document.getElementById( 
                            'imagePreview').innerHTML =  
                            '<img src="' + e.target.result 
                            + '" width="450" height="400"/>'; 
                    }; 
                      
                    reader.readAsDataURL(fileInput.files[0]); 
                } 
            } 
        } 
    </script> 