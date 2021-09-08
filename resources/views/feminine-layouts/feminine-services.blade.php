<html>

<head>

    <!-- Font Style -->
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <style>

		.services_intro_holder{
		background-color: #b5375b;
		height: 160px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
		}

        .services_intro-line 
        {
                border: 1.5px solid #fff;
                width: 300px;
        }
        .services_intro_text
        {
            text-align: center;
            color: #fff;
            text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.25);
            font-size: 48px;
            font-family: 'Libre Baskerville', serif;
        }

       

        .services_content 
        {
        width: 100%;
        height: 1150px;
        background-image: url("https://media.istockphoto.com/photos/judge-gavel-with-justice-lawyers-business-woman-in-suit-or-lawyer-on-picture-id1130829509?k=20&m=1130829509&s=612x612&w=0&h=9VMWql4leRnpb53RSt9fW7-V999aUp9PnvVReSj1RBg=");
        background-blend-mode:overlay ;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        text-align: center;
            
        }
            .services_content {
            background-color: #d08197b7;
            }

        .services_container 
        {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding-top: 60px;
            
        }

        .services_container .serv_box 
        {
            position: relative;
            width: 23%;
            height: 800px;
            background: #ffedf2ee;
            box-shadow: 0 5px 15px rgba(0,0,0,.1);
            border-radius: 10px;
            margin: 0 auto;
            box-sizing: border-box;
            overflow: hidden;
            text-align: center;
        }

  

        .services_container .serv_box .serv_content
        {
            position: relative;
            z-index: 1;
	        padding: 30 0;
            transition: 0.5s;
            margin-top: 20px;

        }

        .services_container .serv_box .serv_content h3
        {
            font-size: 20px;
            margin: 0px 0px;
            padding: 0;
            justify-content: center;
        }
        
        .services_container .serv_box .serv_content img
        {
           
            height: 225px;
		    padding: center;
            margin-top: 100px;
        }

        .serv_captionholder
        {
            height: 120px;
        }

        #serv_caption
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

        #serv_button
        {
            display: inline-block;
		    width: 90%;
            height: 128px;
            background: #B5375B;
            border-radius: 10px;
            text-decoration: none;
            margin-top: 90px;
        }

        #serv_button_text
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
        .services_container .serv_box:hover .serv_content #serv_button
        {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25)
        }


        .last_holder
        {
            height: 70px;
            background-color: #B5375B;
            margin-bottom; 0px;

            background: #B5375B;
            box-shadow: 0px 5px 4px rgba(0, 0, 0, 0.25);
            transform: matrix(1, 0, 0, -1, 0, 0);
        }
    </style>

</head>

<body>

   

<div class = "services_content">
    <div class = "services_intro_holder">
        <br>
        <div class = "services_intro_text">
        <hr class="services_intro-line border-1 mx-auto">
            <h1 class="services_intro_text">OUR SERVICES</h1>
        </div>
    </div>
    <br>
    <br>
    <div class = "services_container">
	<div class = "serv_box">
		<div class = "icon"></div>
		<div class = "serv_content">
			<h3> <img src="images/assist.png"> </h3>
            <div class = "serv_captionholder">
                <h3 id="serv_caption"> FREE Legal <br> Assessment</h3>
            </div>
            <a id=serv_button href = "">
                <h1 id ="serv_button_text">Ask <br> Lawyers</h1>
            </a>
		</div>     
	</div> 
	<div class = "serv_box">
		<div class = "icon"></div>
		<div class = "serv_content">
			<h3> <img src="images/consult.png"> </h3>
            <div class = "serv_captionholder">
                <h3 id="serv_caption"> Paid Legal <br> Consultation</h3>
            </div>
                <a id=serv_button href = "">
                    <h1 id ="serv_button_text">Submit Legal <br> Problems</h1>
                </a>
		</div>     
	</div> 
	<div class = "serv_box">
		<div class = "icon"></div>
		<div class = "serv_content">
			<h3> <img src="images/works.png"> </h3>
            <div class = "serv_captionholder">
                <h3 id="serv_caption"> FREE Legal Fee <br> Crowdsourcing and <br> Paid Legal Works <br> Escrow Delivery</h3>
            </div>
            <a id="serv_button" href = "">
                <h1 id = "serv_button_text">Request<br>Proposal</h1>
            </a>
		</div>     
	</div> 
	<div class = "serv_box">
		<div class = "icon"></div>
		<div class = "serv_content">
			<h3> <img src="images/docs.png"> </h3>
            <div class = "serv_captionholder">
                <h3 id="serv_caption">Create Your Own Legal<br>Documents From<br>Hundreds of<br>Templates</h3>
            </div>
			<a id="serv_button" href = "">
                <h1 id ="serv_button_text">Create Legal <br> Document</h1>
            </a>
		</div>     
	</div> 
</div>

    <br>
    <div class = "last_holder"></div>
</div>

</body>
</html>

