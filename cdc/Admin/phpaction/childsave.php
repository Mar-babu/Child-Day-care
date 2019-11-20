<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/cdc/myphp/connect.php');
?>

<?php 
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

	$qur= "INSERT INTO `child`(`fname`, `lname`, `gender`, `dob`, `doe`, `sponsored_by`, `sponsored_type`, `term`, `adopted_by`, `education`, `school`, `medical_issue`, `diseasase`, `suffering_since`, `current_history`, `dod`, `hospital_name`) VALUES ('".$fname."', '".$lname."', '".$gender."', '".$dob."','".$doe."', '".$sponsored_by."', '".$sponsored_type."', '".$term."','".$adopted_by."', '".$education."', '".$school."', '".$medical_issue."','".$diseasase."', '".$suffering_since."', '".$current_history."', '".$dod."','".$hospital_name."')";




	if ($conn->query($qur) === TRUE) {
    
	$_SESSION["mas"]="child info recorded succesfully!!!";
	header('location: ../showallchild.php');


	} else {
	    $_SESSION["mas"]= "Error: " . $qur . "<br>" . $conn->error;
	    header('location: ../childsave.php');
	}

	$conn->close();

?>