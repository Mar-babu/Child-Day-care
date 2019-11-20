<?php 
	session_start();
	if (!isset($_SESSION["login"])) {
		$_SESSION["mas"]="Please LogIn";
		header('location: ../dashboard.php');
	}
?>

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



<div class="container" ">
<table>
<section>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="4.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="h.jpg" alt="Third slide">

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</section>
</table>
    </div>



<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/cdc/Admin/inc/footer.php');
?><!--  Footer section -->



