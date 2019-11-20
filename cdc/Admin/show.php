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

<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/cdc/myphp/connect.php');
?>

<br>
<h2>All Child List</h2>
<br>

<div class="container">
<div style="overflow-x:auto;">
<table>

<?php 

$sql="SELECT * FROM child";
$result= mysqli_query($conn,$sql);



echo'<table border="1" bordercolor="black">';
	echo '<tr>
	<td>Child_id</td><td>fname</td><td>lname</td><td>gender</td><td>dob</td><td>doe</td><td>sponsored_by</td><td>sponsored_type</td><td>term</td><td>adopted_by</td><td>education</td><td>school</td><td>medical_issue</td><td>diseasase</td><td>suffering_since</td><td>current_history</td><td>dod</td><td>hospital_name</td></tr>
	</tr>';
while($row=mysqli_fetch_row($result))
{
    echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td><td>'.$row[6].'</td><td>'.$row[7].'</td><td>'.$row[8].'</td><td>'.$row[9].'</td><td>'.$row[10].'</td><td>'.$row[11].'</td><td>'.$row[12].'</td><td>'.$row[13].'</td><td>'.$row[13].'</td><td>'.$row[14].'</td><td>'.$row[15].'</td><td>'.$row[16].'</td><td>'.$row[17].'</td></tr>';
}
echo "Time :";
date_default_timezone_set("Asia/Dhaka");
$today = date("H:i:s"); 
echo $today;
?>
</table>
</div>
</div>




<?php 
$myRoot = $_SERVER["DOCUMENT_ROOT"];
// echo $myRoot
include($myRoot . '/cdc/Admin/inc/footer.php');

?><!--  Footer section -->