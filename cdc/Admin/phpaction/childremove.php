<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/cdc/myphp/connect.php');
?>

<?php

$id = $_REQUEST["id"];

$sql = "DELETE FROM `child` WHERE `id_child`=".$id;

if($conn->query($sql)){
	$_SESSION["mas"] = "Data delete successfully";
    header('location: ../showallchild.php');
}else{
	$_SESSION["mas"] = "Data can not delete!!!";
    header('location: ../showallchild.php');
}

?>