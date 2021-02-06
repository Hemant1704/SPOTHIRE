<?php

session_start();

$hid = $_POST['hid'];
$hname  = $_POST['hname'];
$con = mysqli_connect("localhost","root","");
mysqli_connect("localhost","root","");
mysqli_select_db($con,"project")or die("Failed");

$result = mysqli_query($con,"select HID,HNAME from hr where HID = '".$hid."' AND HNAME = '".$hname."' limit 1 ;");
if (mysqli_num_rows($result)==1){
	echo("You have succesfully logged in");
	$_SESSION['hid'] = $_POST['hid'];
	echo "<script> window.location.assign('finalhr.php'); </script>";
	exit();
}
else{
	echo("Incorrect login details");
	exit();
}
?>



