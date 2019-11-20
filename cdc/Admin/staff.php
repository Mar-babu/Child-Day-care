

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
<button type="button" class="btn btn-outline-secondary">
  <a href="showallchild.php">All Staff</a></button>


<section>
  <div class="container">
	<div class="reg-form">
	  <div class="container">
	  	<h2>STAFF iNFO</h2>

	  	<dib class="row">
	  		<div class="col-md-6">

	  	<form action="phpaction/staffsave.php" method="POST">
          <div class="form-group">
          <label for="fname">First Name:</label>
         <input type="text" class="form-control"  placeholder="First Name" name="fname">
            </div>

          <div class="form-group">
          <label for="lname">Last Name:</label>
         <input type="text" class="form-control"  placeholder="Last Name" name="lname">
            </div>

        <div class="form-group">
          <label for="gender">Gender:</label>
         <input type="text" class="form-control" placeholder="Gender" name="gender">
            </div>

          <div class="form-group">
          <label for="dob">Email:</label>
         <input type="email" class="form-control"  placeholder="Email" name="email">
            </div>

          <div class="form-group">
          <label for="contact">Contact:</label>
         <input type="text" class="form-control" placeholder="Contact" name="contact"> </div>



          <div class="form-group">
          <label for="dob">Date of Birth:</label>
         <input type="Date" class="form-control"  placeholder="Sponsored by" name="dob">
         </div>

          <div class="form-group">
          <label for="doe">Date of Entry:</label>
         <input type="Date" class="form-control"  placeholder="Date of Entry" name="doe">
         </div>

          <div class="form-group">
          <label for="child_count">Child count:</label>
         <input type="text" class="form-control"  placeholder="Child count" name="child_count">
            </div>

          <div class="form-group">
          <label for="work_duration">Work duration:</label>
         <input type="text" class="form-control"  placeholder="work_durationwork_duration" name="work_duration">
            </div>

          

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

          <button type="submit" class="btn btn-primary">Submit</button>
           </form>
	  		</div>
	  	</dib>	
	</div>
	</div>
</div>
</section>





<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/cdc/Admin/inc/footer.php');
?><!--  Footer section -->