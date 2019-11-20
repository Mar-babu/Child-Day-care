<?php include("connect.php"); ?>

<?php 
	$fname=trim ($_POST["fname"]);
	$lname=trim ($_POST["lname"]);
	$email=trim ($_POST["email"]);
	$password=trim ($_POST["password"]);


	$qur= "INSERT INTO `myinfo`(`fname`, `lname`, `email`, `password`) VALUES ('".$fname."', '".$lname."', '".$email."', '".$password."')";

	if ($conn->query($qur) === TRUE) {
    
	$_SESSION["mas"]="You have been registered succesfully!!!  Now you can login";
	header('location: ../index.php');


	} else {
	    $_SESSION["mas"]= "Error: " . $qur . "<br>" . $conn->error;
	    header('location: ../index.php');
	}

	$conn->close();

?>