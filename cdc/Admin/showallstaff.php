<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/cdc/Admin/inc/topnav.php');
?>


<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/cdc/Admin/inc/header.php');
?>

<!-- Start top Navber Section -->
<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/cdc/Admin/inc/navbar.php');
?>
<!-- End top Navber Section -->

<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/cdc/myphp/connect.php');
?>



<?php 
	
	$sql = "SELECT * FROM staff";
	$result = $conn->query($sql);
?>



<section>
	<div class="container">
		<h1> Staff Record:</h1>

		<table class="table table-bordered table-hover" >
		  <thead>
		    <tr>
		      <th scope="col">SL No</th>
		      <th scope="col">Name</th>
		      <th scope="col">Gender</th>
		      <th scope="col">Email</th>
		      <th scope="col">Working Hour</th>
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
		      <td> <?php echo $row["gender"]; ?> </td>
		      <td> <?php echo $row["email"]; ?> </td>
		      <td> <?php echo $row["work_duration"]; ?> </td>
		      <td>
		      	<a type="button" class="btn btn-success btn-sm" href="staffshow.php?id=<?php echo $row["id_child"];?>">Show</a>
		      	<a type="button" class="btn btn-primary btn-sm" href="childedit.php?id=<?php echo $row["id_child"];?>">Update</a>
		      	<a type="button" class="btn btn-danger btn-sm" href="phpaction/childremove.php?id=<?php echo $row["id_child"];?>">Delete</a>
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

<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/cdc/Admin/inc/footer.php');
?><!--  Footer section -->