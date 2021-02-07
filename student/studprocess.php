<html>
<head></head>
<body>

<h1><a href = "loginstud.php">LOGIN NOW</a></h1>
<?php
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $branch = $_POST['branch'];
    $scgpa = $_POST['scgpa'];
    $regno = $_POST['regno'];
    $post_data = $_POST['pid'];
    $pid = (int)$post_data[0];

    $univ_data = $_POST['uid'];
    $uid = (int)$univ_data[0];

    $con = mysqli_connect("localhost","root","");
    mysqli_connect("localhost","root",""); mysqli_select_db($con,"project")or
    die("Failed"); 
    $filename = $_FILES['myfile']['name'];


    $destination = 'C:\\xampp\\htdocs\\WEBSITE\\uploads\\'.$filename;

    $extension = pathinfo($filename,PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];

    if(!in_array($extension, ['pdf','jpg','png','docx'])){
	    echo "File must be a pdf,image or word document";
    }

    else{
	    if(move_uploaded_file($file,$destination)){
            $result = mysqli_query($con,"insert into student
            values('$regno','$email','$name','$branch','$phone','$scgpa','$uid','$pid','$filename');")
            or die("Failed to query database".mysqli_error($con));
  
        }
    }

?>



</body>
</html>