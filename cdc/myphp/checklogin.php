<?php include("connect.php"); ?>

<?php 
	$email=trim($_POST["email"]);
	$password=trim($_POST["password"]);
	$qur = "SELECT * FROM `myinfo` WHERE `email` ='".$email."'";

	$result = $conn->query($qur);


	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			if ($row["password"] == $password) {
				$_SESSION["login"]="Ok";
				header('location: ../Admin/dashboard.php');
			}else{
				$_SESSION["mas"]="password do not match";
				header('location: ../index.php');
			}
		}
	}
		else{
			$_SESSION["mas"]="No user Exists";
			header('location: ../index.php');
		}
	
    
?>