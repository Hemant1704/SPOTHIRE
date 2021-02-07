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
            <th>CNAME</th>
            <th>PID</th>
            <th>PNAME</th>
            <th>AVGPAY</th>
            </tr>
<?php
    $myv2 = false;
    if(isset($_POST['myv2'])){
        $myv2 = $_POST['myv2'];
    }
    $con = mysqli_connect("localhost","root","");
    
    mysqli_select_db($con,"project")or die("Failed");
    
    $result = mysqli_query($con,"SELECT CNAME,PID,PNAME,AVGPAY from POST NATURAL JOIN CANHAVE NATURAL JOIN COMPANY WHERE AVGPAY > ". $myv2 .";");
    
    if($result->num_rows > 0){
        
        while($row = $result-> fetch_assoc()){
            echo "<tr><td>".$row["CNAME"]."</td><td>".$row["PID"]."</td><td>".$row["PNAME"]."</td><td>".$row["AVGPAY"]."</td></tr>";
        }
        
        echo"</table>";
    }
?>