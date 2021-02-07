<?php

session_start();
if(!isset($_SESSION['regno'])){

    header('location:loginstud.php');
}

?>

<!Doctype html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
	<title></title>
	<style>
    
    .b1{
       margin-left: 95px;
       width: 300px;
       height:40px;
       background-color: rgba(0,0,0,0.45);
       border: 2px solid black;
       margin-top: 40px;
       color:white;
       font-family: 'Righteous', cursive;

    }
    #id1{
    	font-family: 'Righteous', cursive;
    	margin-left: 580px;
    	margin-top:30px;
    	margin-right: 640px;
    	background-color:white;
    	color:black;
        width:600px;
    	height:80px;
    	font-size: 60px;
    	border: 3px solid black;
    	border-radius: 20px;
    }
    #btn1{
    	width:250px;
    	height:40px;
    	font-family: 'Righteous', cursive;
    	border: 2px solid black;
    	margin-left: 150px;
    	color: white;
    	background-color: rgba(0,0,0,0.85);
    }
    #btn1:hover{
        color:black;
        background-color: white;
    }
    #t1{
    	margin-left: 650px;
    	font-family: 'Righteous', cursive;
    	font-size: 50px;
    	color:white;
    	background-color: black;
    	border-radius: 20px;
    	margin-right: 600px;

    }
    #mdiv{
    	background-image: url("https://images.unsplash.com/photo-1491308056676-205b7c9a7dc1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60");
    	background-repeat: no-repeat;
    	background-size:100%100%;
        width: 100%;
        height: 1200px;
        
          
    }
    *{
    	margin:0px;
    	padding:0px;
    }
    #dd{
       font-size: 20px;
       line-height: 20vh;
       font-family: 'Righteous', cursive;
       margin-left: 40px;


    }
    #id1{
      margin-left: 570px;
    }

    #updiv{
        background-color: rgba(0,0,0,0.75);
        height: 100px;
    }
    #log{
        float:right;
        margin-right: 30px;
        line-height: 10vh;
    }
    #home{

        margin-left: 30px;
        line-height: 10vh;
    }  


	 </style> 
	 
</head>
<body>
	<div id = "mdiv">

    <div id = "updiv">
      <a href = 'http://localhost/WEBSITE/hemant.php' id = "home"><font color="white" size="6px">HOME</font></a>
      <a href = 'logout.php' id = "log"><font color="white" size="6px">LOGOUT</font></a>
    </div>
	<div id = "id1">
        
	    &nbsp;&nbsp;&nbsp;&nbsp;   STUDENT AREA

    </div>
     <br><br>
     <p id = "t1">&nbsp;&nbsp;APPLY CHOICES</p>
     <br><br><br><br><br><br><br><br>	
	<form action = "processans1.php" method = "POST">
        <div id = "dd">SEE POSTS IN COMPANY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
            
                <?php
                    $mysqli = NEW MYSQLi('localhost','root','','project');

                    $result = $mysqli->query("SELECT cname FROM company");
                ?>
                
                <select name = "myv1" class= "b1">
                   <?php
                      while($rows = $result->fetch_assoc())
                      {
                           $comp_name = $rows['cname'];
                           echo "<option>$comp_name</option>";
                      }
                    ?>
                </select>

        
        <input type = "submit" id = "btn1" value = "CLICK HERE">
    </div>
</form>
       <form action = "processans2.php" method = "POST">
        <div id = "dd">MIN SALARY EXPECTED &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type = "text" class = "b1" name = "myv2">
            
        <input type = "submit" id = "btn1" value = "CLICK HERE">
    </div>
       </form>
       <form action = "processans3.php" method = "POST">
        <div id = "dd">SELECT POST FOR HR INFO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
            <?php
                    $mysqli = NEW MYSQLi('localhost','root','','project');

                    $result = $mysqli->query("SELECT pname FROM post");
                ?>
                
                <select name = "myv3" class= "b1">
                   <?php
                      while($rows = $result->fetch_assoc())
                      {
                           $post_name = $rows['pname'];
                           echo "<option>$post_name</option>";
                      }
                    ?>
                </select>

        <input type = "submit" id = "btn1" value = "CLICK HERE">
    </div>
       </form>

<br><br><br>
        

</div>
</body>
</html>



