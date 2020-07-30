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
$active= 'about-us';
include('header.php');	
?>
<?php
$msg="";

if (isset($_POST['submit']))
{
	$ID=$_POST['page_id'];
	$title=$_POST['title'];
	$description=$_POST['desc'];
	$created_on = date("Y-m-d H:i:s");
	$modified_on = date("Y-m-d H:i:s");
	
	$abt_image_details=upload();
	$abt_image=$abt_image_details[file_name];
	if($abt_image!='')
	{
	if($ID=='')
	  {
	$query="INSERT into `about-us` (title,Description,image, created_on,  modified_on)VALUES ('$title', '$description','$abt_image','$created_on','$modified_on')";}
	  else{
		  $query="update `about-us` set title='$title',Description='$description',image='$abt_image',modified_on	='$modified_on' where  ID='$ID'";
 
			}
	 $result = mysqli_query($con,$query);
	  if($result){
            $msg= " Details added  successfully.";
     }
	 else{
			       $msg= "Failed to upload data.";
			}
	}
		else{
			$msg=$abt_image_details[msg];
			}
}
/*function for uploading file*/
	function upload(){
	$abt_image_details=array();	
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["abt_image"]["name"]);
	$uploadOk = 1;
	if($_FILES["abt_image"]["name"]!="")
	{
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$check = getimagesize($_FILES["abt_image"]["tmp_name"]);
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
  if (move_uploaded_file($_FILES["abt_image"]["tmp_name"], $target_file)) {
		 //$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
	$old_file=$_POST["old_abt_image_value"];
	unlink($old_file);
	//unlink("uploads/$old_file");
		$abt_image_details['file_name']=$target_file;
    //$msg= "The file ". basename( $_FILES["logo"]["name"]). " has been uploaded.";
  }
  else {
    $msg= "Sorry, there was an error uploading your file.";
  
	}
	}
	}
	else{
		$target_file=$_POST["old_abt_image_value"];
			$abt_image_details['file_name']=$target_file;
    
		
	}
	$abt_image_details['msg']=$msg;
	return $abt_image_details;
}
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">About Us</h1>
	</div>
	<div class="container">
	<form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
		<?php if($msg!="")
		  {
			  echo '<div class="alert alert-danger alert-dismissible fade show">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong></strong>'.$msg.'
		  </div>';
		}
		$ret=mysqli_query($con,"select * from `about-us`");
		$row=mysqli_fetch_array($ret);
		$cnt=1;
		/*while ($row=mysqli_fetch_array($ret)) {*/	
		?>
		<input type="hidden" name="page_id" id="page_id" value="<?php echo $row['ID'];?>"/>
		<div class="form-group">
		<label for="uname">Your Title:</label>
		<input type="text" class="form-control" id="title" placeholder="Enter Your Title" name="title" data-rule="required" data-msg="This feild is required" value="<?php  echo $row['title'];?>">
		<div class="validation"></div>
		</div>  
		<div class="form-group">
		<label for="desc">Description:</label>
		<textarea id="desc" class="form-control" name="desc" placeholder="Please include Description" row="4" data-rule="required" data-msg="Please include Description"><?php  echo $row['Description'];?></textarea>
		<div class="validation"></div>
		</div>
	<div>
	<?php 
	 //$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';
	if($row['image'])
	{
	?>
	<div class="form-group">
      <label for="image">Image</label>
      <input type="file" class="form-control" id="abt_image" placeholder="Enter project Image"  onchange="return fileValidation()" name="abt_image" data-rule="required" data-msg="Please include banner image">
    <div class="validation"></div>
	</div>	
	<img src="<?php echo $row['image']?>" alt=""/>
	<?php
	}
	else{
		
	?>
	<div class="form-group">
    <label for="instagram">Image:</label>
    <input type="file" class="form-control" id="abt_image" placeholder="Enter Image" name="abt_image" data-rule="required" data-msg="Please include logo">
    <div class="validation"></div>
	</div>
	<?php
	}
	?>
	</div>
	<input type="hidden" name="old_abt_image_value" id="old_abt_image_value" value="<?php echo $row['image'];?>"/>
  <?php
	/*}*/
	?>
	<div class="text-center">
	<input type="submit" class="btn btn-warning text-white" id="submit" name="submit" value="submit">
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
			 $('#abt_image').on('change', function() { 
  
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
                document.getElementById('abt_image'); 
              
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

