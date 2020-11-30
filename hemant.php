<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <style type = "text/css">
         *{
            margin : 0px;
            padding:0px;
          }
          .bgimage{
            background-image:url("https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60");
            background-size:100%100%;
            width: 100%;
            height: 100vh;
          }
          .menu{
            width :100%;
            height:80px;
            background-color:rgba(0,0,0,0.75);
        
          }
          .lmenu{
            width : 35%;
            line-height: 80px;
            float: left;
            font-weight:bold;
            color:white;
            font-size:12px;
            font-family: 'Righteous', cursive;
            margin-left: 20px;

          }
          .rmenu{
           width : 60%;
           height:15vh;
           float:right;
           font-size: 15px;
           font-weight:bold;
           color:white; 
           font-family: 'Righteous', cursive;

          }
          .rmenu ul li {
            display:inline;
            list-style: none;
            font-weight: bold;
            line-height: 80px;
            margin-left:75px;
            font-size: 20px;  
            font-family: 'Righteous', cursive;
          

          }
          .text{
            font-family: 'Righteous', cursive;
            line-height: 20vh;
            font-size: 45px;
            margin-left: 100px;
            color:rgba(0,0,0,0.85);
            line-height:140px;
            margin-top: 40px;
           }

           .rmenu li a{
             text-decoration: none;
             color:#fff;

           }
           .m1{
            width:95%;
            height:800px;
            margin:auto;
            border:3px solid black; 
           }

           .d1{
            line-height: 12vh;
            font-family: 'Shadows Into Light', cursive;
            background-color: pink;

            }
            .d1t{
            width : 47.5%;
            height:35
            0px;
            margin:auto;
            border: 2px solid black;
            margin-left: 0.1px;

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
                margin-left: 20px;
                font-family: 'Righteous', cursive;
            

            }
            #b1:hover {
              background-color: white;
              color: black; 
                }
            #b2{
                background-color:#EDE61C;
                border: 2px solid black;
                color: black;
                padding: 15px 60px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
                margin-left: 80px;
                font-family: 'Righteous', cursive;

              }
            #b2:hover {
              background-color: rgba(0,0,0,0.8);
              color: white; 
                }


            .rd:hover{
              width:600px;
      
            }
            .ld:hover{
              width:600px;

            }
            .bgimage2{
            width: 100%;
            background-color:rgba(0,0,0,0.65);
          
              

            }
            .menu2{
            width :100%;
            height:250px;
            background-color:rgba(0,0,0,0.65);
            margin-top: 20vh;
          }
          .lmenu2{
            width : 35%;
            line-height: 80px;
            float: left;
            font-weight:bold;
            color:white;
            font-size:12px;
            font-family: 'Righteous', cursive;
            margin-left: 20px;

          }
          .rmenu2{
           width : 60%;
           height:8vh;
           float:right;
           font-size: 15px;
           font-weight:bold;
           color:white; 
           font-family: 'Righteous', cursive;

          }
          .rmenu2 ul li {
            display:inline;
            list-style: none;
            font-weight: bold;
            line-height: 80px;
            margin-left:85px;
            font-size: 20px;
            font-family: 'Righteous', cursive;
          

          }
          .rmenu2 li a{
             text-decoration: none;
             color:#fff;

           }
           .div1{
            margin-top: 15vh;
            border: 3px solid lightblue;
            margin-left: 200px;
            margin-right: 200px;
            height:405px;
            width:405px;
            font-size:50px;
            font-family:'Righteous', cursive;
            background-color:white;
            color:black;
            border-radius: 50%;
            display: inline-block;
           }
           .div1:hover{
            background-color: lightblue;
            color:black;
            border:3px solid black;
            
           }
           .socio{
           width : 60%;
           float:right;
           font-size: 15px;
           font-weight:bold;
           color:white; 
           font-family: 'Righteous', cursive;

           }
           .socio ul li{
            display:inline;
            list-style: none;
            font-weight: bold;
            margin-left: 85px;
             

           }
           #id1{
            font-family: 'Montserrat', sans-serif;
            font-size: 50px;
            color:rgba(0,0,0,0.75);
            border: 4px solid black;
            margin-left: 70px;
            margin-right: 70px;
            border-radius: 70px;
            background-color: white;
           }
           #id2{
            font-family: 'Montserrat', sans-serif;
            font-size: 30px;
            margin-left:33px;
            margin-top: -50px;

           }
           #ld{
            margin-top: 50px;
            margin-left: 30px;
            color:white;

           }
           @media screen and (max-width: 400px){
            #mmain{
              width:100%;

           }
           .bgimage{
              width:100% ;
           }
           .menu{
            height:40vh;
           }
           .lmenu{
              width:35%;
           }
           .rmenu{
            width:75%;
           }
         }

      </style>
      <script type = "text/javascript">
        function f1(){
            

        }

      </script>
</head>
<body>
  <div id = "mmain">
   <div class = "bgimage">
    <div class = "menu">
        <div class = "lmenu">
            <h1>SPOTHIRE</h1>
        </div>
        <div class = "rmenu">
            <ul>
                <li><a href = "#">CATEGORIES</a></li>
                <li><a href = "#">IT SECTOR</li>
                <li><a href = "#">BENEFIT</a></li>
                <li><a href = "window.location='div1'">DEVELOPER</a></li>
                <li><a href = "loginstud.php">LOGIN</a></li>
            </ul>
        </div>
    </div>
    <div class = "text">
      <BR>
        <h4>HAVE-ENOUGH-SKILLS???</h4>
        <h1>JOB SEARCH ENDS HERE</h1>
        <h3></h3>
        
        <input type = "button" name = "b1" value = "STUDENTSIGNUP" id = "b1" onclick="window.location.href = 'student/signupstud.php';">
        <input type = "button" name = "b2" value = "HRSIGNUP" id = "b1" onclick="window.location.href = 'hr/signuphr.php';">
        <input type = "button" name = "b3" value = "STUDENTLOGIN" id = "b1" onclick="window.location.href = 'student/loginstud.php';">
        <input type = "button" name = "b4" value = "HRLOGIN" id = "b1" onclick="window.location.href = 'hr/loginhr.php';">
    </div>
  </div><br><br><br>
  <br>
  <br>
  <div class = "bgimage2">
    <center><h1 id = "id1"> EXPLORE ABOUT DIFFRENT FIELDS</h1></center>
   <div>
    <div class = "div1" onclick="location.href='https://en.wikipedia.org/wiki/Information_technology';">
      <br>
      <br>
      <br>
      <BR>
      <p id = "id2">INFORMATION TECHNOLOGY</p></a>
            
    </div>
    <div class = "div1" onclick = "location.href = 'https://en.wikipedia.org/wiki/Computer_science';">
      <br>
      <br>
      <br>
      <br>
      <pre id = "id2">  COMPUTER <br>  SCIENCE</pre>
  
    </div>
    <div class = "div1" onclick = "location.href = 'https://en.wikipedia.org/wiki/Electrical_engineering';">
      <br>
      <br>
      <br>
      <br>
      <p id = "id2">ELECTRICAL ENGINEERING</p>
     
   </div>
    <div class = "div1" onclick = "location.href = 'https://en.wikipedia.org/wiki/Mechanical_engineering';">
      <br>
      <br>
      <br>
      <br>
      <p id = "id2" >MECHANICAL ENGINEERING</p>
     
    </div>
    <div class = "menu2">
        <div class = "lmenu2">
            <h1>DEVELOPER ACCOUNTS</h1>
        </div>
        <div class = "rmenu2">
            <ul>
                <li><a href = "#">GITHUB</a></li>
                <li><a href = "https://www.linkedin.com/in/hemant-chauhan-b55086190/">LINKED IN</li>
                <li><a href = "https://www.hackerrank.com/hemant_chauhan21">HACKERANK</a></li>
                <li><a href = "https://www.instagram.com/hemant17_/">INSTA</a></li>
                <li><a href = "#">FACEBOOK</a></li>
            </ul>
        </div>
        <div class = "socio">
            <ul>
              <li><a href = "#"><img src = "https://image.flaticon.com/icons/svg/25/25231.svg" height = "60" width = "60"></a></li>
              <li><a href = "https://www.linkedin.com/in/hemant-chauhan-b55086190/"><img src = "https://cdn.worldvectorlogo.com/logos/linkedin.svg" height = "80" width = "100"></a></li>
              <li><img src = "https://upload.wikimedia.org/wikipedia/commons/6/65/HackerRank_logo.png" height = "80" width = "100"></a></li>
              <li>&nbsp;&nbsp;&nbsp;<a href = "https://www.instagram.com/hemant17_/"><img src = "https://instagram-brand.com/wp-content/themes/ig-branding/assets/images/ig-logo-email.png" height = "80" width = "80"></a></li>
              <li><a href = "#"><img src = "https://cdn.worldvectorlogo.com/logos/facebook-2.svg" height = "70" width = "100"></a></li>        
            </ul>
        </div>
    <ul id = "ld">
      <li>HEMANT CHAUHAN (18BIT0032)</li>
      <li>AYUSHI UDASI</li>
      <li>HITARTHI DARSHAN VORA</li>
      <li>VIT VELLORE IT 2022</li>
      <li>JAVASCRIPT</li>
      <li>PHP</li>
      <li>HTML</li>
      <li>CSS</li>
      <li>MYSQL</li>
    </ul>
        
  </div>
  </div>


</body>
</html>