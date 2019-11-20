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
<!-- End top Navber Section --><

<?php
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/cdc/myphp/connect.php');
?>


<?php 
$id_child = $_POST["id_child"];
  $fname=trim ($_POST["fname"]);
  $lname=trim ($_POST["lname"]);
  $gender=trim ($_POST["gender"]);
  $dob=trim ($_POST["dob"]);
  $doe=trim ($_POST["doe"]);
  $sponsored_by=trim ($_POST["sponsored_by"]);
  $sponsored_type=trim ($_POST["sponsored_type"]);
  $term=trim ($_POST["term"]);
  $adopted_by=trim ($_POST["adopted_by"]);
  $education=trim ($_POST["education"]);
  $school=trim ($_POST["school"]);
  $medical_issue=trim ($_POST["medical_issue"]);
  $diseasase=trim ($_POST["diseasase"]);
  $suffering_since=trim ($_POST["suffering_since"]);
  $current_history=trim ($_POST["current_history"]);
  $dod=trim ($_POST["dod"]);
  $hospital_name=trim ($_POST["hospital_name"]);

$sql = "UPDATE `child` SET `fname`='".$fname."',`lname`='".$lname."',`gender`='".$gender."', `dob`='".$dob."', `doe`='".$doe."',`sponsored_by`='".$sponsored_by."',`sponsored_type`='".$sponsored_type."', `term`='".$term."',`adopted_by`='".$adopted_by."',`education`='".$education."',`school`='".$school."', `medical_issue`='".$medical_issue."', `diseasase`='".$diseasase."',`suffering_since`='".$suffering_since."',`current_history`='".$current_history."', `dod`='".$dod."',`hospital_name`='".$hospital_name."' WHERE id_child=".$id_child;


if ($conn->query($sql) === TRUE) {
    $_SESSION["mas"] = "Data update successfully";
    header('location: ../showallchild.php');

} else {
   $_SESSION["mas"] = "Error: " . $sql . "<br>" . $conn->error;
    header('location: ../showallchild.php');
 
}

$conn->close();

?>

<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/cdc/Admin/inc/footer.php');
?><!--  Footer section -->