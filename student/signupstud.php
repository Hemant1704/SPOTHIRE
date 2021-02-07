

<!Doctype html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
	 <style>
    
        *{
        	margin: 0; 
        	padding: 0;
        }
        body{
        	background: #ecf1f4; 
        	font-family: sans-serif;
        }
        
        .form-wrap{ 
        	width: 600px; 
        	background: #3e3d3d;
            height: 1000px; 
        	padding: 40px 20px; 
        	 
        	position: fixed; left: 50%; 
        	top: 50%; 
        	transform: translate(-50%, -50%);
            border-radius: 40px;
        
        }
        h1{
        	text-align: center; 
        	color: white; 
        	font-weight: normal; 
        	margin-bottom: 20px;
            font-family: 'Righteous', cursive;
    
        }
        
        input{
        	width: 100%; 
        	background: none; 
        	border: 1px solid #fff; 
        	border-radius: 3px; 
        	padding: 6px 15px; 
        	box-sizing: border-box; 
        	margin-bottom: 20px; 
        	font-size: 16px; 
        	background-color:white;
            font-family: 'Righteous', cursive;
        }
        #btn{
         background-color:lightgreen;
         color:black;
         font-size: 20px;
         font-family: 'Righteous', cursive;}
        
        #im1{
            margin-left: 210px;
            height: 100px;
            width:130px;

        }
        .d2{
            color:white;
            background-color: #3e3d3d;
            margin-top: 100px;
            margin-left:100px;
            margin-left:50px;
            margin-right: 1300px;

        }
        .d2 ol li{
            margin-left:40px;

        }
        #pid{
            width:560px;
            height: 35px;
        }
        #uid{
            width:560px;
            height: 35px;
        }
    
    </style>


</head>
    <body>
    	<div class="form-wrap">
            
            <form action = "studprocess.php" method = "POST" enctype="multipart/form-data">
                <br><br><br><br><br><br>
                <h1>STUDENT SIGNUP</h1>
                <input type="text" placeholder="Regno" id = "regno" name = "regno"><br><br>
                <input type="email" placeholder="Email" id = "email" name = "email"><br><br>
                <input type="text" placeholder="Name" id="name" name = "name"><br><br>
                <input type="text" placeholder="Branch" id = "branch" name = "branch"><br><br>
                <input type="text" placeholder="Phone" id = "phone" name = "phone"><br><br>
                <input type="text" placeholder="CGPA" id = "scgpa" name = "scgpa"><br><br>

                <?php
                    $mysqli = NEW MYSQLi('localhost','root','','project');

                    $result = $mysqli->query("SELECT uid,uname FROM univ");
                ?>
                
                <select name = "uid" id = "uid" placeholder = "Select university" style = "width: 100%;">
                   <?php
                      while($rows = $result->fetch_assoc())
                      {
                           $univ_name = $rows['uname'];
                           $univ_id = $rows['uid'];
                           echo "<option>$univ_id.$univ_name</option>";
                      }
                    ?>
                </select><br><br><br>
                
                <?php
                    $mysqli = NEW MYSQLi('localhost','root','','project');

                    $result = $mysqli->query("SELECT pid,pname FROM post");
                ?>
                
                <select name = "pid" id = "pid" placeholder = "Select post" style = "width: 100%;">
                   <?php
                      while($rows = $result->fetch_assoc())
                      {
                           $post_name = $rows['pname'];
                           $post_id = $rows['pid'];
                           echo "<option>$post_id.$post_name</option>";
                      }
                    ?>
                </select><br><br>
                <br>
                <input type = "file" name = "myfile"><br><br>
                <input type="submit" value="Sign Up" id = "btn" ><br><br><br>
            </form>
        
        </div>
        


	</body>






</html>