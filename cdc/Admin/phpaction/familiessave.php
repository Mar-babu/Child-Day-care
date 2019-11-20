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
	$sponsored=trim ($_POST["sponsored"]);
	$donation_amount=trim ($_POST["donation_amount"]);
	$count_of_kids_adopted=trim ($_POST["count_of_kids_adopted"]);
	$short_term_plan=trim ($_POST["short_term_plan"]);
	$long_term_plan=trim ($_POST["long_term_plan"]);
	$term_duration=trim ($_POST["term_duration"]);
	$education=trim ($_POST["education"]);
	$medical=trim ($_POST["medical"]);


	$qur= "INSERT INTO `families` (`fname`, `lname`, `gender`, `dob`, `doe`, `sponsored`, `donation_amount`, `count_of_kids_adopted`, `short_term_plan`, `long_term_plan`, `term_duration`, `education`, `medical`) VALUES ('".$fname."', '".$lname."', '".$gender."', '".$dob."','".$doe."', '".$sponsored."', '".$donation_amount."', '".$count_of_kids_adopted."','".$short_term_plan."', '".$long_term_plan."', '".$term_duration."', '".$education."','".$count_of_kids_adopted.",'".$medical."')";




	if ($conn->query($qur) === TRUE) {
    
	$_SESSION["mas"]="Family info recorded succesfully!!!";
	header('location: ../showallparent.php');


	} else {
	    $_SESSION["mas"]= "Error: " . $qur . "<br>" . $conn->error;
	    header('location: ../showallparent.php');
	}

	$conn->close();

?>