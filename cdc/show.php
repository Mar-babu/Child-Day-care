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

<section>
	<div class="container">
		<h1>Show single info</h1>

		<label>First name:</label>
		<h3> <?php echo $row["fname"]; ?> </h3>
		<label>Last name:</label>
		<h3> <?php echo $row["lname"]; ?> </h3>
		<label>Email:</label>
		<h3> <?php echo $row["email"]; ?> </h3>
	</div>
</section>


<?php include('partials/footer.php'); ?><!--  Footer section -->