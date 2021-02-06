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
            padding: 40px 20px; 
            box-sizing: border-box; 
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
         font-family: 'Righteous', cursive;
        }
        #im1{
            margin-left: 225px;
            height: 100px;
            width:100px;

        }
        #cno{
            width:560px;
            height: 40px;
        }
    
    </style>        	


</head>
    <body>
    	<div class="form-wrap">
        
            <form action = "hrprocess.php" method = "POST">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ53xhQQEUj7hgl-Z7iizTqEAOYucSmHVzO3i4861oLFd97KOWTdg&s" id = "im1"><br><br><br>
                <h1>HR Sign Up</h1>
                <input type="text" placeholder="HID" id = "hid" name = "hid"><br><br><br>
                <input type="text" placeholder="HNAME" id="hname" name = "hname"><br><br><br>
                <input type="text" placeholder="DEPARTMENT" id = "dept" name = "dept"><br><br><br>
                <input type="email" placeholder="HEMAIL" id = "hemail" name = "hemail"><br><br><br>
                
                <?php
                    $mysqli = NEW MYSQLi('localhost','root','','project');

                    $result = $mysqli->query("SELECT cno,cname FROM company");
                ?>

                <select name = "cno" id = "cno" placeholder = "Select company">
                   <?php
                      while($rows = $result->fetch_assoc())
                      {
                           $comp_name = $rows['cname'];
                           $comp_no = $rows['cno'];
                           echo "<option>$comp_no.$comp_name</option>";
                      }
                    ?>
                   </select><br><br><br>

                <input type="submit" value="Sign Up" id = "btn"><br><br><br>
            
            </form>
        
        </div>


	</body>






</html>