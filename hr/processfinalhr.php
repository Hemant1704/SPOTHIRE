
    <html>
    <head>
      <title></title>
       <style>
            #id1{
      font-family: 'Righteous', cursive;
      margin-left:480px;
      margin-top: 50px;
      margin-right: 400px;
      background-color:lightblue;
      color:black;
      height:80px;
      font-size: 60px;
      border: 3px solid black;
      border-radius: 30px;
    }
 
       </style>


    </head>
<body>
      <div>
            <h1 id = "id1">&nbsp;&nbsp;HERE IS YOUR DATA&nbsp;&nbsp;</h1>
            <br><br><br><br>
      <center><table  border="1px" width="1500px" cellpadding = "0px" cellspacing="0px" style = "line-height:6vh;">
            <tr>
            <th>NAME</th>
            <th>CGPA</th>
            <th>BRANCH</th>
            <th>UNIVERSITY</th>
            <th>EMAIL ADDRESS</th>
            <th>PHONE NUMBER</th>
            <th>RESUME</th>
            </tr>

     <?php
       $branch1 = false;
       if(isset($_POST['branch1'])){
                $branch1 = $_POST['branch1'];
        }
        $CGPA1 = false;
       if(isset($_POST['cgpa1'])){
                $cgpa1 = (float)$_POST['cgpa1'];
        } 
           
           $pname1 = false;
       if(isset($_POST['pname1'])){
                $pname1 = $_POST['pname1'];
        } 
           
           $uname1 = false;
       if(isset($_POST['uname1'])){
                $uname1 = $_POST['uname1'];
        } 
            
           
       $conn = mysqli_connect("localhost","root","","project");
       $result = $conn->query("SELECT SNAME,SCGPA,BRANCH,UID,SEMAIL,PHONE,fname from student natural join univ natural join post where BRANCH ='".$branch1."' AND SCGPA >".$cgpa1." AND PNAME = '".$pname1."' AND UNAME ='".$uname1."';");
      

       

       if($result-> num_rows > 0){
       	   while($row = $result-> fetch_assoc()){
           $path = 'http://localhost/WEBSITE/uploads/'.$row["fname"];
  
       	   	echo "<tr> <td>".$row["SNAME"]."</td><td>".$row["SCGPA"]."</td><td>".$row["BRANCH"]."</td><td>".$row["UID"]."</td><td>".$row["SEMAIL"]."</td><td>".$row["PHONE"]."<td><a href = '$path'>Download</a>"."</td></tr>";
           }
               
       echo"</table>";

       
       }
       
      ?>

</center>
</div>
</body>
</html>