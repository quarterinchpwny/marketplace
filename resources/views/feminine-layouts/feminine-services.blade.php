<html>

<head>

    <!-- Font Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <style>

		.intro_holder{
		background-color: #b5375b;
		height: 160px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		}

        .intro_text
        {
            text-align: center;
            color: #fff;
            text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
            font-size: 48px;
            line-height: 20px;
        }
            .services_content {
            width: 1934px;
            height: 1285px;
            background-image: url("https://media.istockphoto.com/photos/judge-gavel-with-justice-lawyers-business-woman-in-suit-or-lawyer-on-picture-id1130829509?k=20&m=1130829509&s=612x612&w=0&h=9VMWql4leRnpb53RSt9fW7-V999aUp9PnvVReSj1RBg=");
            background-blend-mode:overlay ;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            text-align: center;
            
            }
            .services_content {
            background-color: #d08197b7;
            }

        p {
            margin: 0px;
            padding: 0px;
        }

        .container 
        {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding-top: 60px;
            
        }

        .container .box 
        {
            position: relative;
            width: 460px;
            height: 830px;
            background: #ffedf2ee;
            box-shadow: 0 5px 15px rgba(0,0,0,.1);
            border-radius: 10px;
            margin: 0 auto;
            box-sizing: border-box;
            overflow: hidden;
            text-align: center;
        }

  

        .container .box .content
        {
            position: relative;
            z-index: 1;
	        padding: 30 0;
            transition: 0.5s;
            margin-top: 20px;

        }

        .container .box .content h3
        {
            font-size: 20px;
            margin: 0px 0px;
            padding: 0;
            justify-content: center;
        }

        .container .box .content p
        {
            margin: 0;
            padding: 0;
        }

        .container .box .content img
        {
           
            height: 225px;
		    padding: center;
            margin-top: 100px;
        }

        .captionholder
        {
            height: 120px;
        }

        #caption
        {
            font-family: Raleway;
            font-style: normal;
            font-weight: 600;
            font-size: 33px;
            line-height: 39px;
            display: flex;
            align-items: center;
            text-align: center;
            margin-top: 55px;

            color: #733657;
        }

        #button
        {
            display: inline-block;
		    width: 370px;
            height: 128px;
            background: #B5375B;
            border-radius: 10px;
            text-decoration: none;
            margin-top: 90px;
        }

        #button_text
        {
            text-decoration: none;
            color: #fff;
            font-family: Raleway;
            font-style: normal;
            font-weight: bold;
            font-size: 36px;
            line-height: 42.26px;
            text-align: center;
            margin-top: 20px;
        }
        .container .box:hover .content #button
        {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)
        }


        .last_holder
        {
            height: 70px;
            background-color: #B5375B;
            margin-top: 80px;

            background: #B5375B;
            box-shadow: 0px 5px 4px rgba(0, 0, 0, 0.25);
            transform: matrix(1, 0, 0, -1, 0, 0);
        }
    </style>

</head>

<body>

   

<div class = "services_content">
    <div class = "intro_holder">
        <div class = "intro_text">
            <h1>____</h1>
            <h1 class="intro_text">OUR SERVICES</h1>
        </div>
    </div>
    <br>
    <br>
    <div class = "container">
	<div class = "box">
		<div class = "icon"></div>
		<div class = "content">
			<h3> <img src="assist.png"> </h3>
            <div class = "captionholder">
                <h3 id="caption"> FREE Legal <br> Assessment</h3>
            </div>
            <a id=button href = "">
                <h1 id ="button_text">Ask <br> Lawyers</h1>
            </a>
		</div>     
	</div> 
	<div class = "box">
		<div class = "icon"></div>
		<div class = "content">
			<h3> <img src="consult.png"> </h3>
            <div class = "captionholder">
                <h3 id="caption"> Paid Legal <br> Consultation</h3>
            </div>
                <a id=button href = "">
                    <h1 id ="button_text">Submit Legal <br> Problems</h1>
                </a>
		</div>     
	</div> 
	<div class = "box">
		<div class = "icon"></div>
		<div class = "content">
			<h3> <img src="works.png"> </h3>
            <div class = "captionholder">
                <h3 id="caption"> FREE Legal Fee <br> Crowdsourcing and <br> Paid Legal Works <br> Escrow Delivery</h3>
            </div>
            <a id=button href = "">
                <h1 id = "button_text">Request<br>Proposal</h1>
            </a>
		</div>     
	</div> 
	<div class = "box">
		<div class = "icon"></div>
		<div class = "content">
			<h3> <img src="docs.png"> </h3>
            <div class = "captionholder">
                <h3 id="caption">Create Your Own Legal<br>Documents From<br>Hundreds of<br>Templates</h3>
            </div>
			<a id=button href = "">
                <h1 id ="button_text">Create Legal <br> Document</h1>
            </a>
		</div>     
	</div> 
</div>

    <br>
    <div class = "last_holder"></div>
</div>

</body>
</html>

