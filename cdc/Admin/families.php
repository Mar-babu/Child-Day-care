

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
  <a href="showallparent.php">All Parent</a></button>


<section>
  <div class="container">
  <div class="reg-form">
    <div class="container">
      <h2>Families iNFO</h2>

      <dib class="row">
        <div class="col-md-6">

      <form action="phpaction/familiessave.php" method="POST">
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
          <label for="sponsored">Sponsored:</label>
         <input type="text" class="form-control"  placeholder="Any Sponsored?" name="sponsored">
         </div>

          <div class="form-group">
          <label for="donation_amount">Donation Amount:</label>
         <input type="text" class="form-control"  placeholder="Donation Amount" name="donation_amount">
         </div>

          <div class="form-group">
          <label for="count_of_kids_adopted">Count of kids adopted:</label>
         <input type="text" class="form-control"  placeholder="Count of kids adopted" name="count_of_kids_adopted">
            </div>

          <div class="form-group">
          <label for="short_term_plan">Short term plan:</label>
         <input type="text" class="form-control"  placeholder="Short term plan" name="short_term_plan">
            </div>

          <div class="form-group">
          <label for="long_term_plan">Long term plan:</label>
         <input type="text" class="form-control"  placeholder="Long term plan" name="long_term_plan">
            </div>

        <div class="form-group">
          <label for="term_duration">Term duration:</label>
         <input type="text" class="form-control" placeholder="Term duration" name="term_duration">
            </div>

          <div class="form-group">
          <label for="education">Occupasion:</label>
         <input type="text" class="form-control" placeholder="Occupasion" name="education">
            </div>

          <div class="form-group">
          <label for="medical">Medical Service:</label>
         <input type="text" class="form-control" placeholder="Medical Service" name="medical">
            </div>


      

          <button type="submit" class="btn btn-primary">Submit</button>
           </form>
        </div>
          <div class="col-md-6">
            
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