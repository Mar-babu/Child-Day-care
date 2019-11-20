

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
  <a href="showallchild.php">All child</a></button>


<section>
  <div class="container">
	<div class="reg-form">
	  <div class="container">
	  	<h2>CHILD iNFO</h2>

	  	<dib class="row">
	  		<div class="col-md-6">

	  	<form action="phpaction/childsave.php" method="POST">
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
          <label for="dob">Date of Birth:</label>
         <input type="Date" class="form-control"  placeholder="Date of Birth" name="dob">
            </div>

          <div class="form-group">
          <label for="doe">Date of Entry:</label>
         <input type="Date" class="form-control" placeholder="Date of Entry" name="doe"> </div>



          <div class="form-group">
          <label for="sponsored_by">Sponsored by:</label>
         <input type="text" class="form-control"  placeholder="Sponsored by" name="sponsored_by">
         </div>

          <div class="form-group">
          <label for="sponsored_type">Sponsored type:</label>
         <input type="text" class="form-control"  placeholder="Sponsored type" name="sponsored_type">
         </div>

          <div class="form-group">
          <label for="term">Term:</label>
         <input type="text" class="form-control"  placeholder="Term" name="term">
            </div>

          <div class="form-group">
          <label for="adopted_by">Adopted by:</label>
         <input type="text" class="form-control"  placeholder="Adopted by" name="adopted_by">
            </div>

          <div class="form-group">
          <label for="education">Education:</label>
         <input type="text" class="form-control"  placeholder="Education" name="education">
            </div>

        <div class="form-group">
          <label for="school">School:</label>
         <input type="text" class="form-control" placeholder="School" name="school">
            </div>

          <div class="form-group">
          <label for="medical_issue">Medical issue:</label>
         <input type="text" class="form-control" placeholder="Medical issue" name="medical_issue">
            </div>

          <div class="form-group">
          <label for="diseasase">Diseasase:</label>
         <input type="text" class="form-control" placeholder="Diseasase" name="diseasase">
            </div>


          <div class="form-group">
          <label for="suffering_since">Suffering since:</label>
         <input type="Date" class="form-control" placeholder="Suffering since" name="suffering_since">
            </div>


          <div class="form-group">
          <label for="current_history">Current history:</label>
         <input type="text" class="form-control"  placeholder="Current history" name="current_history">
            </div>

          <div class="form-group">
          <label for="dod">Date of diseasase:</label>
         <input type="Date" class="form-control" placeholder="Date of diseasase" name="dod">
            </div>

          <div class="form-group">
          <label for="hospital_name">Hospital name:</label>
         <input type="text" class="form-control" placeholder="Hospital name" name="hospital_name">
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