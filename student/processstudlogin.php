<?php
session_start();

$regno = $_POST['regno'];
$name  = $_POST['name'];
$con = mysqli_connect("localhost","root","");
mysqli_connect("localhost","root","");
mysqli_select_db($con,"project")or die("Failed");



$result = mysqli_query($con,"select REGNO,SNAME from student where REGNO = '".$regno."' AND SNAME = '".$name."' limit 1;");
if (mysqli_num_rows($result)==1){
	echo("You have succesfully logged in");
	$_SESSION['regno'] = $_POST['regno'];
	echo "<script> window.location.assign('finalstudent.php'); </script>";
	exit();
}
else{
	echo("Incorrect login details");
	exit();
}
?>
