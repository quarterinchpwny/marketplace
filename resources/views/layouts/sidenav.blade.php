<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navigation Bar</title>
  </head>
  <body>
	
		<div class="side-bar">
			<div class="forLogo"> 
				<img src="{{ URL::to('/') }}/cms-graphics/logo1.png" alt="Rizal Law Office">
				<img src="{{ URL::to('/') }}/cms-graphics/Line.png" alt="Line">
			</div>
			<div class="sections">
				<ul>
					<li> <a href="#">Home</a></li>
					<li> <a href="#">Services</a></li>
					<li> <a href="#">Registration Section</a></li>
					<li> <a href="#">Lawyer's Blog Section</a></li>
					<li> <a href="#">Law Update Section</a></li>
					<li> <a href="#">Everyday Law</a></li>
					<li> <a href="#">Lawyer's Profile</a></li>
					<li> <a href="#">Law Firm Practice</a></li>
					<li> <a href="#">Contact Us Page</a></li>
					<li> <a href="#">Privacy Policy</a></li>
					<li> <a href="#">Domain Settings</a></li>
				</ul>
			</div>
			<div class="foot">
				<img src="{{ URL::to('/') }}/cms-graphics/Powered.png" alt="Powered by LexMeet">
			</div>
		</div>
		<section>
		HELLO
		</section>
		
		
		
	

	<style>
		*{
			margin:0;
			padding:0;
			list-style:none;
			text-decoration:none;
		}
		.foot img{
			width:200px;
			display: block;
			margin-left:auto;
			margin-right:auto;
			padding-top:25px;
			
		}
		.side-bar{
			position: fixed;
			left:0;
			width:280px;
			height:100%;
			background:#F5F5F5;
		}
		.forLogo{
			width:280px;
			height:80px;

		}
		.forLogo img{
			width:200px;
			display: block;
			margin-left:auto;
			margin-right:auto;
			padding-top:20px;
		}

		.side-bar ul a{
			display:block;
			width:100%;
			line-height: 45px;
			font-size:20px;
			padding-left:30px;
			box-sizing: border-box;
			border-bottom:1px solid #FF7F4D;
			transition: .4s;
			background: #F5F5F5;
			color: black;
		}
		.side-bar ul :hover{
			background-color:#FF7F4D;
			padding-left:10px;
			color:white;
		}
		section{
			background:#FF7F4D;
			height:657px;
		}
	</style>   
  </body>
</html>