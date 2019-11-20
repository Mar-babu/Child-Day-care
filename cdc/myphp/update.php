<?php include('connect.php'); ?>

<?php 
$id = $_POST["id"];
$fname = trim($_POST["fname"]);
$lname = trim($_POST["lname"]);
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);

$sql = "UPDATE `myinfo` SET `fname`='".$fname."',`lname`='".$lname."',`email`='".$email."', `password`='".$password."' WHERE id=".$id;


if ($conn->query($sql) === TRUE) {
    $_SESSION["mas"] = "Data update successfully";
    header('location: ../index.php');

} else {
	 $_SESSION["mas"] = "Error: " . $sql . "<br>" . $conn->error;
    header('location: ../index.php');
 
}

$conn->close();

?>