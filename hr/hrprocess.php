<html>
<body>

<?php

$hname  = $_POST['hname'];
$dept = $_POST['dept'];
$hemail = $_POST['hemail'];
$hid = $_POST['hid'];
$comp_data = $_POST['cno'];
$cno = (int)$comp_data[0];

$con = mysqli_connect("localhost","root","");
mysqli_connect("localhost","root","");
mysqli_select_db($con,"project")or die("Failed");
$result = mysqli_query($con,"insert into hr values('$hid','$hname','$dept','$hemail','$cno');") or die("Failed to query database".mysqli_error($con))
?>
<h1><a href = "loginhr.php">Login Now</a></h1>

</body>
</html>
