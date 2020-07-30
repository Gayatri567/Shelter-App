<?php
$active= 'enquiries';
include('header.php');
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Enquiry</h1>
      </div>
		<div class="container">
		 <table class="table table-bordered">
      <thead>
        <tr>
		  <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
		  <th>Subject</th>
		  <th>Message</th>
		  <th>Action</th>
        </tr>
      </thead>
      <tbody>
		  <?php
	  $query="select * from enquiry";
	  $ret=mysqli_query($con,$query);
	  $cnt=1;
	  while ($row=mysqli_fetch_array($ret)) {
	  ?>
		<tr>
		<td><?php  echo $cnt;?></td>
		<td><?php echo $row['name'];?></td>
		<td><?php echo $row["Email"]?>"</td>
		<td><?php echo $row["MobileNumber"]?></td>
		<td><?php echo $row["subject"]?></td>
		<td><?php echo $row["message"]?></td>
		<td><a href="view-enquiry.php?viewid=<?php echo $row['ID'];?>">View</a></td>
		<?php 
		$cnt=$cnt+1;
		}
		?>
		</tr>
      </tbody>
    </table>
</div>
</main>
<?php
include('footer.php');	
?>