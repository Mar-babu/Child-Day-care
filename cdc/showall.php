<?php include('partials/header.php'); ?> <!--  Header section -->

<!-- Start top Navber Section -->
<?php include('partials/topnav.php') ?>
<!-- End top Navber Section -->

<!-- Start navber section -->
<?php include('partials/navbar.php') ?>
<!-- End navber section -->

<?php include("myphp/connect.php") ?>



<?php 
	
	$sql = "SELECT * FROM myinfo";

	$result = $conn->query($sql);
?>



<section>
	<div class="container">
		<h1> User list:</h1>

		<table class="table table-bordered table-hover" >
		  <thead>
		    <tr>
		      <th scope="col">SL No</th>
		      <th scope="col">Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>

		  	<?php
		  		$i = 0;
				if($result->num_rows > 0){
					While($row = $result->fetch_assoc()){
				
			?>

			<tr>
		      <th> <?php $i++; echo $i; ?> </th>
		      <td> <?php echo $row["fname"]." ".$row["lname"]; ?></td>
		      <td> <?php echo $row["email"]; ?> </td>
		      <td>
		      	<a type="button" class="btn btn-success btn-sm" href="show.php?id=<?php echo $row["id"];?>"> Show</a>
		      	<a type="button" class="btn btn-primary btn-sm" href="edit.php?id=<?php echo $row["id"];?>"> Edit</a>
		      	<a type="button" class="btn btn-danger btn-sm" href="myPhp/delete.php?id=<?php echo $row["id"];?>">Delete</a>
			  </td>
		    </tr>

			<?php


					}
				}

			?>


		    
		    
		  </tbody>
		</table>

	</div>
</section>

<?php include('partials/footer.php'); ?><!--  Footer section -->