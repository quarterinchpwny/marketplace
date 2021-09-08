<html>

<head>

    <!-- Font Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <style>
        .intro_holder{
		height: 180px;
        line-height: 0;
		}

        .intro_text
        {
            text-align: center;
            color: #733657;
            font-size: 48px;
            line-height: 10px;
            font-family: 'Libre Baskerville', serif;
            padding-top: 25px;
        }

        .intro-line {
                border: 1.5px solid #733657;
                width: 300px;
            }


        .practices_content {
            width: 100%;
            height: 1350px;
            background: rgba(213, 64, 106, 0.12);
            }


        .container 
        {
            display: flex;
            flex-wrap: auto;
            justify-content: space-between;
            padding-top: 10px;

            
        }

        .container .box 
        {
            position: relative;
            margin: 0  auto;
            box-sizing: border-box;
            overflow: hidden;
            text-align: center;
            width: 300px;
            height: 450px;
            padding-top: 15px;
       
            
        }

        .container .box .content img
        {
           
            height: 200px;
		    padding: center;
            padding-top: 50px;
            padding-left: center;
           
        }

        .box #button
        {
            display: inline-block;
            width: 90%;
            height: 60%;
		    padding: center;
            background: #B8537B;
            border-radius: 50%;
            color: #fff;
            box-shadow: 0px 2px 4px 10px rgba(219, 203, 214, 0.74);  
        }

        
        .container .box:hover .content #button
        {
            background: #B5375B;    
        }


        #title 
        {
            text-align: center;
            color: #fff;
            font-size: 36px;
            text-align: center;
            font-family: 'Raleway', sans-serif;
            color: #733657;
            margin-top: 25px;
        }

        .button_holder
        {
            text-align: center;
            padding-top: 20px;
        }

        #see_button
        {
            display: inline-block;
            padding: 20px;
		    width: 200px;
            height: 50px;
            background: #B5375B;
            border-radius: 10px;
            text-decoration: none;
            padding-top: 10px;
        }


        #see_button:hover
        {
            background: #733657;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
        #button_text
        {
            color: #fff;
            font-size: 25px;
            font-weight: 500;
            padding-top: 0 30px;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            font-family: 'Raleway', sans-serif;
        }


    </style>

</head>

<body>

<div class = "practices_content">
 
    <div class = intro_holder>
        <div><br><br></div>
        <div class = "intro_text">
            <br><br>
            <hr class="intro-line border-1 mx-auto">
            <h1 class="intro_text">PRACTICE AREAS</h1>
        </div>
    </div>
    <br>
    <br>
    <div class = "container">
        <div class = "box">
            <div class = "content">
                    <a id=button href = ""><img src="images/serv1.png"></a>
            </div> 
            <br>  
            <a id = title>Personal & Family <br> Law</a>  
        </div> 
       
        <div class = "box">
            <div class = "content">
                    <a id=button href = ""><img src="images/serv2.png"></a>
            </div>   
            <br> 
            <a id = title>Labor Law</a>  
        </div> 	<div class = "box">
            <div class = "content">
                    <a id=button href = ""><img src="images/serv3.png"></a>
            </div><br>   
            <a id = title>Civil Law</a>
        </div> 	<div class = "box">
            <div class = "content">
                    <a id=button href = ""><img src="images/serv4.png"></a>
            </div> <br> 
            <a id = title>Immigration Law</a>    
        </div> 
    </div>
    <br>
    <br>
    <div class = "container">
        <div class = "box">
            <div class = "content">
                    <a id=button href = ""><img src="images/serv5.png"></a>
            </div>   <br> 
            <a id = title>Criminal Law</a>  
        </div> 
       
        <div class = "box">
            <div class = "content">
                    <a id=button href = ""><img src="images/serv6.png"></a>
            </div>   <br> 
            <a id = title>Commercial Law</a>  
        </div> 	<div class = "box">
            <div class = "content">
                    <a id=button href = ""><img src="images/serv7.png"></a>
            </div>  <br> 
            <a id = title>Taxation Law</a>
        </div> 	<div class = "box">
            <div class = "content">
                    <a id=button href = ""><img src= images/serv8.png></a>
            </div> <br> 
            <a id = title>Special Services</a>    
        </div> 
    </div>
    <div class="button_holder text-align: center">
        <a id="see_button"href = "">
        <h1 id = "button_text">SEE MORE</h1>
        </a> </div>
    <br>
    <br>
    <br>
</div>

</body>
</html>

