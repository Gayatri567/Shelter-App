<?php
$active= 'manage-banner';
include('header.php');
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Manage Banner</h1>
      </div>
	  <div class="container">
	  <div class="table-responsive">
		<table class="table table-bordered">
		  <thead>
			<tr>
			  <th>#</th>
			  <th>Title</th>
			  <th>Sub_Title</th>
			  <th>Image</th>
			  <th>Action</th>
			</tr>
		  </thead>
		   <tbody>
	  <?php
		$ret=mysqli_query($con,"SELECT * FROM `banner`");
		$cnt=1;
		while ($row=mysqli_fetch_array($ret)) {
		?>
		<tr>
		<td><?php echo $cnt;?></td>
		<td><?php echo $row['title'];?></td>
		<td><?php echo $row['sub_title'];?></td>
		<td><img src="<?php echo 'uploads/banner/'.$row['banner_image']; ?>" alt="No image found" width="150" height="150"/></td>	
		<td><a href="edit-banner.php?editid=<?php echo $row['ID'];?>">Edit</a>/<a href="delete-banner.php?editid=<?php echo $row['ID'];?>" Onclick="return ConfirmDelete();" type="submit" name="actiondelete" value="1">Delete		
		</a></td>
		</tr>
		  <?php 
		$cnt=$cnt+1;
		}
		?>
		</tbody>
		</table>
	</div>
  </div>
    </main>
 <?php
include('footer.php');
?>

<script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
</script> 