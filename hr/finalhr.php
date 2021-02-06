
<?php

session_start();
if(!isset($_SESSION['hid'])){
    echo "You are logged out";
    header('location:loginhr.php');
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
       background-color: white;
       border: 2px solid black;
       margin-top: 40px;
       color:black;
       font-family: 'Righteous', cursive;
    }
    #id1{
    	font-family: 'Righteous', cursive;
    	margin-left: 660px;
    	margin-top: 50px;
    	margin-right: 680px;
    	background-color:white;
    	color:black;
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
    	margin-left: 730px;
    	color: white;
    	background-color: rgba(0,0,0,0.85);
    }
    #btn1:hover{
        color:black;
        background-color: white;
    }
    #t1{
    	margin-left: 600px;
    	font-family: 'Righteous', cursive;
    	font-size: 50px;
    	color:white;
    	background-color: black;
    	border-radius: 20px;
    	margin-right: 560px;

    }
    #mdiv{
    	background-image: url("https://images.pexels.com/photos/326311/pexels-photo-326311.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500  ");
    	background-repeat: no-repeat;
    	background-size:100%100%;
        width: 100%;
        height: 800px;
        
    }
    *{
    	margin:0px;
    	padding:0px;
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
      <a href = 'http://localhost/WEBSITE/hemant.php'><font color="white" size="6px" id = "home">HOME</font></a>
      <a href = 'logout.php' id = "log"><font color="white" size="6px">LOGOUT</font></a>
    </div>
	<div id = "id1">
	    HELLO HR!!!
    </div>
     <br><br>
     <p id = "t1"> APPLY YOUR CHOICES</p>
     <br><br>	
	<form action = "processfinalhr.php" method = "POST">
       
        <select type = "text" class = "b1" name = "branch1" placeholder = "SELECT BRANCH">
        	<option disabled selected>SELECT BRANCH</option>
        	<option>INFORMATION TECHNOLOGY</option>
        	<option>COMPUTER SCIENCE</option>
        	<option>MECHANICAL ENGINEERING</option>
        	<option>ELECTRICAL ENGINEERING</option>
        </select>
        <select type = "text" class = "b1" name = "cgpa1" placeholder = "">
        	<option disabled selected> SELECT MIN CGPA</option>
        	<option>9.5</option>
        	<option>8.8</option>
        	<option>8.5</option>
        	<option>8.0</option>
        </select>
       <select type = "text" class = "b1" name = "pname1" placeholder = "">
        	<option disabled selected> SELECT POST NAME</option>
        	<option>SYSTEM ENGG</option>
        	<option>WEB DEVELOPER</option>
        	<option>DATA ANALYST</option>
        	<option>ANDROID DEV</option>
            <option>SOFTWARE DEV</option>
        </select>
        <select type = "text" class = "b1" name = "uname1" placeholder = "">
        	<option disabled selected> SELECT UNIVERSITY NAME</option>
        	<option>VIT VELLORE</option>
        	<option>VIT CHENNAI</option>
        	<option>IIT MADRAS</option>
        	<option>IIT DELHI</option>
            <option>IIT BOMBAY</option>
        </select>
        	
        	


        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <br><br><br><br><br><br>
        <input type = "submit" id = "btn1" value = "CLICK HERE">

	</form>
    
	
</div>

<br><br><br>
        


</div>
</body>
</html>



