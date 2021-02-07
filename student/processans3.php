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
            <th>HR NAME</th>
            <th>DEPARTMENT</th>
            <th>COMPANY</th>
            <th>POST</th>
            </tr>

<?php

    if(isset($_POST['myv3'])){
          
          $myv3 = $_POST['myv3'];

    }
   
    $con = mysqli_connect("localhost","root","");
      
    mysqli_select_db($con,"project")or die("Failed");
    
    $result = mysqli_query($con,"SELECT HNAME,DEPT,CNAME,PNAME from POST NATURAL JOIN canhave NATURAL JOIN COMPANY NATURAL JOIN HR WHERE PNAME = '".

      $myv3."';");
    
    if($result-> num_rows > 0){
        
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>".$row["HNAME"]."</td><td>".$row["DEPT"]."</td><td>".$row["CNAME"]."</td><td>".$row["PNAME"]."</td></tr>";
        }
        
        echo"</table>";
    }

?>


</table>
</center>
</div>
</body>
</html>
