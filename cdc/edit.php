<?php include('partials/header.php'); ?> <!--  Header section -->

<!-- Start top Navber Section -->
<?php include('partials/topnav.php') ?>
<!-- End top Navber Section -->

<!-- Start navber section -->
<?php include('partials/navbar.php') ?>
<!-- End navber section -->

<?php include("myphp/connect.php") ?>

<?php 

$id = $_REQUEST["id"];

$sql = "SELECT * FROM myinfo WHERE id=".$id;

$result = $conn->query($sql);

$row = $result->fetch_assoc();

 ?>

<!-- Start Registration Form Section -->

<section>
	<div class="container">
		<h1>Registration Form</h1>
		<div class="row">
			<div class="col-md-6">
				<form action="myphp/update.php" method="POST">
				  <div class="form-group">

				  	<input type="text" style="display: none;" value="<?php echo $row["id"]; ?> " name="id" >

				    <label for="fname">First Name</label>
				    <input type="text" class="form-control" id="fname" value="<?php echo $row["fname"]; ?> " name="fname" >
				  </div>
				  <div class="form-group">
				    <label for="lname">Last Name</label>
				    <input type="text" class="form-control" id="lname" value="<?php echo $row["lname"]; ?>" name="lname" >
				  </div>
				  <div class="form-group">
				    <label for="email">E-mail</label>
				    <input type="email" class="form-control" id="email" value=" <?php echo $row["email"]; ?> " name="email" >
				  </div>
				  </div>
				  <div class="form-group">
				    <label for="email">Password</label>
				    <input type="password" class="form-control" id="email" value=" <?php echo $row["email"]; ?> " name="password" >
				  </div>

				  <button type="Submit" class="btn btn-outline-info btn-lg btn-block">Update</button>
				</form>
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
</section>
<!-- End Registration Form Section -->


<?php include('partials/footer.php'); ?><!--  Footer section -->