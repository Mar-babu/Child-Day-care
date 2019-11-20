<?php include('connect.php'); ?>

<?php

$id = $_REQUEST["id"];

$sql = "DELETE FROM `myinfo` WHERE id =".$id;

if($conn->query($sql)){
	$_SESSION["mas"] = "Data delete successfully";
    header('location: ../showall.php');
}else{
	$_SESSION["mas"] = "Data can not delete!!!";
    header('location: ../index.php');
}

?>