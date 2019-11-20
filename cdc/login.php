<?php include("partials/header.php"); ?>

<!-- Start top Navber Section -->
<?php include('partials/topnav.php') ?>
<!-- End top Navber Section -->

<!--Start Navbar Section-->
<?php include("partials/navbar.php"); ?>
<!--End Navbar Section-->

	<div class="container">
		<h1>
			This is Login page
		</h1>
	</div>


	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<form action="myphp/checklogin.php" method="POST">
					  <div class="form-group">
					    <label for="email">Email address</label>
					    <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelp" placeholder="Enter email">
					  </div>
					  <div class="form-group">
					    <label for="password">Password</label>
					    <input type="password" class="form-control" name="password" id="" placeholder="Password">
					  </div>
					  <div class="form-check">
					    <input type="checkbox" class="form-check-input" id="exampleCheck1">
					    <label class="form-check-label" for="exampleCheck1">Check me out</label>
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>




<?php include("partials/footer.php"); ?>

