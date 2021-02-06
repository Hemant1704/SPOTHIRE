
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
            width: 500px; 
            background: #3e3d3d; 
            padding: 40px 20px; 
            box-sizing: border-box; 
            position: fixed; left: 50%; 
            top: 50%; 
            transform: translate(-50%, -50%);
            font-family: 'Righteous', cursive;
            border-radius: 40px;
        }
        h1{
            text-align: center; 
            color: white; 
            font-weight: normal; 
            margin-bottom: 20px;
        }
        
        input{
            width: 100%; 
            font-color: black; 
            border: 1px solid #fff; 
            border-radius: 3px; 
            padding: 6px 15px; 
            box-sizing: border-box; 
            margin-bottom: 20px; 
            font-size: 16px; 
            background-color: white;
        }
        #id1{
            background-color: lightgreen;
            color:black;
            border: 1px solid black;

        }
        #b1{
                background-color: lightseagreen;
                border: 2px solid black;
                color: white;
                padding: 15px 60px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                
                font-family: 'Righteous', cursive;
            

      }
      #b1:hover {
              background-color: rgba(0,0,0,0.8);
          color: white; 
                }
        
    
    </style>


</head>
    <body>
        <br><br>
        <center><button id="b1" type="button" name="_button" onclick="location.href='http://localhost/WEBSITE/hemant.php';">HOME</button></center>
        <div class="form-wrap">
            
            <form action = "processhrlog.php" method = "POST">
            
                <h1> HR LOG IN</h1>
                <input type="text" placeholder="HID" name = "hid"><br><br><br>
                <input type="text" placeholder="HNAME" name = "hname"><br><br><br>
                <input type="submit" value="Log In" id = "id1"><br><br><br>
            
            </form>
        
        </div>


    </body>






</html>