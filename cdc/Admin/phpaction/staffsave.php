<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/cdc/myphp/connect.php');
?>

<?php 
	$fname=trim ($_POST["fname"]);
	$lname=trim ($_POST["lname"]);
	$gender=trim ($_POST["gender"]);
	$email=trim ($_POST["email"]);
	$contact=trim ($_POST["contact"]);
	$dob=trim ($_POST["dob"]);
	$doj=trim ($_POST["doj"]);
	$child_count=trim ($_POST["child_count"]);
	$work_duration=trim ($_POST["work_duration"]);

	

	$qur= "INSERT INTO `staff`(`fname`, `lname`, `gender`, `email`, `contact`, `dob`, `doj`, `child_count`, `work_duration`) VALUES ('".$fname."', '".$lname."', '".$gender."', '".$email."','".$contact."', '".$dob."', '".$doj."', '".$child_count."','".$work_duration."')";




	if ($conn->query($qur) === TRUE) {
    
	$_SESSION["mas"]="staff info recorded succesfully!!!";
	header('location: ../showallstaff.php');


	} else {
	    $_SESSION["mas"]= "Error: " . $qur . "<br>" . $conn->error;
	    header('location: ../staffsave.php');
	}

	$conn->close();

?>