<!DOCTYPE html>
<html>
<head>
	<title>ecops</title><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		li a{
				text-decoration: none;
			}
			li{
				list-style-type: none;
			}
			.navbar {
  overflow: hidden;
  background-color:green;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:rgb(53,53,53) ;
}

.dropdown-content {
  display: none;
  color: white;
  position: absolute;
  background-color: green;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  border: 1px solid white;

  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: rgb(53,53,53);
}

.dropdown:hover .dropdown-content {
  display: block;
}


		#d1{
			width: 200px;
			height: 200px;
			transition-property: all;
			transition-timing-function:ease-in;;
			transition-duration: 2s;
			position: relative;
			top: 0px;
			left: 250px;
		}
		#d11{
			background-color: black;
			width:200px;
			height: 20px;
			color: white;
			position: relative;
			bottom: 40px
		}
		#d1:hover{
			opacity: 10;
		}
		#d1:hover #d11{
			width:129px;
			height:129px;
			transform:rotate(45deg);
			left: 28px;
			bottom: 180px;
			border:9px solid black;
			background-color:green;
			border-image-source: url("border.png");
			border-image-repeat: round;
			border-image-slice: 30%;
		}
		#p1{
			position: relative;text-decoration-style: none;
			text-align: center;
		}
		#d1:hover #p1{
			transform: rotate(315deg);
			right:2px;
			top:38px;
			font-size: 20px;
			
			color: white;


		}
		#d2{
			width: 200px;
			height: 200px;
			position: relative;
			
			bottom: 200px;
			left: 550px;
			
			padding-left: 20px;
			transition-delay: 2s;
			transition-property: all;
			transition-timing-function:ease-in;;
			transition-duration: 5s;
		}
		#d22{
			background-color: black;
			width:200px;
			height: 20px;
			color: white;
			position: relative;
			bottom: 40px
		}
		#d2:hover{
			opacity: 10;
		}
		#d2:hover #d22{
			width:129px;
			height:129px;
			transform:rotate(45deg);
			left: 28px;
			bottom: 180px;
			border:9px solid black;
			background-color:blue;
			border-image-source: url("border.png");
			border-image-repeat: round;
			border-image-slice: 30%;
		}
		#p2{
			position: relative;
			text-decoration-style: none;text-decoration-style: none;
			text-align: center;
		}
		#d2:hover #p2{
			transform: rotate(315deg);
			right:2px;
			top:38px;
			font-size: 20px;
			
			color: white;


		}
		#d3{
			width: 200px;
			height: 200px;
			position: relative;
			
			bottom: 400px;
			left:900px;
			
			padding-left: 20px;
			transition-property: all;
			transition-timing-function:ease-in;;
			transition-duration: 2s;
		}
		#d33{
			background-color: black;
			width:200px;
			height: 20px;
			color: white;
			position: relative;
			bottom: 40px
		}
		#d3:hover{
			opacity: 10;
		}
		#d3:hover #d33{
			width:129px;
			height:129px;
			transform:rotate(45deg);
			left: 28px;
			bottom: 180px;
			border:9px solid black;
			background-color:green;
			border-image-source: url("border.png");
			border-image-repeat: round;
			border-image-slice: 30%;
		}
		#p3{
			position: relative;
			text-decoration-style: none;text-decoration-style: none;
			text-align: center;
		}
		#d3:hover #p3{
			transform: rotate(315deg);
			right:2px;
			top:38px;
			font-size: 20px;
			
			color: white;


		}
		#d4{
			width: 200px;
			height: 200px;
			transition-property: all;
			transition-timing-function:ease-in;;
			transition-duration: 2s;
			position: relative;
			bottom: 350px;
			left:250px;
		}
		#d44{
			background-color: black;
			width:200px;
			height: 20px;
			color: white;
			position: relative;
			bottom: 40px
		}
		#d4:hover{
			opacity: 10;
		}
		#d4:hover #d44{
			width:129px;
			height:129px;
			transform:rotate(45deg);
			left: 28px;
			bottom: 180px;
			border:9px solid black;
			background-color:blue;
			border-image-source: url("border.png");
			border-image-repeat: round;
			border-image-slice: 30%;
		}
		#p4{
			position: relative;text-decoration-style: none;
			text-align: center;
		}
		#d4:hover #p4{
			transform: rotate(315deg);
			right:2px;
			top:38px;
			font-size: 20px;
			
			color: white;


		}
		body{
			background-color: rgb(91,98,27);
		}
		#d5{
			width: 200px;
			height: 200px;
			position: relative;
			
			bottom: 550px;
			left: 550px;
			
			padding-left: 20px;
			transition-property: all;
			transition-timing-function:ease-in;;
			transition-duration: 2s;
		}
		#d55{
			background-color: black;
			width:200px;
			height: 20px;
			color: white;
			position: relative;
			bottom: 40px
		}
		#d5:hover{
			opacity: 10;
		}
		#d5:hover #d55{
			width:129px;
			height:129px;
			transform:rotate(45deg);
			left: 28px;
			bottom: 180px;
			border:9px solid black;
			background-color:blue;
			border-image-source: url("border.png");
			border-image-repeat: round;
			border-image-slice: 30%;
		}
		#p5{
			position: relative;
			text-decoration-style: none;text-decoration-style: none;
			text-align: center;
		}
		#d5:hover #p5{
			transform: rotate(315deg);
			right:2px;
			top:38px;
			font-size: 20px;
			
			color: white;


		}
		#d6{
			width: 200px;
			height: 200px;
			position: relative;
			
			bottom:750px;
			left: 900px;
			
			padding-left: 20px;
			transition-property: all;
			transition-timing-function:ease-in;;
			transition-duration: 2s;
		}
		#d66{
			background-color: black;
			width:200px;
			height: 20px;
			color: white;
			position: relative;
			bottom: 40px
		}
		#d6:hover{
			opacity: 10;
		}
		#d6:hover #d66{
			width:129px;
			height:129px;
			transform:rotate(45deg);
			left: 28px;
			bottom: 180px;
			border:9px solid black;
			background-color:green;
			border-image-source: url("border.png");
			border-image-repeat: round;
			border-image-slice: 30%;
		}
		#p6{
			position: relative;
			text-decoration-style: none;text-decoration-style: none;
			text-align: center;
		}
		#d6:hover #p6{
			transform: rotate(315deg);
			right:2px;
			top:38px;
			font-size: 20px;
			
			color: white;


		}footer{
				background: #000000;
				color: white;
				position: relative;
				bottom: 600px;

			}
			#qq li{
				padding-bottom: 3px;
			}
			#wee li{
				padding-bottom: 3px;
			}
			#wee1{
				padding-bottom: 3px;
			}li a{
			text-decoration: none;
			color: white;
		}
		li{
			list-style-type: none;}
		body{
			height: 800px;
			width: auto;
		}

		
		
	</style>
</head>
<body oncontextmenu="return false;">
	<div id="menu">
		<div id="pic" style="background-color: rgb(53,53,53);" ><center><img src="logo.jpeg" style="width:200px;height:100px;"></center><a href="login.php" style="text-decoration: none;position: relative;left:95%;bottom:100px;color:white;" >login</a></div>
		<div class="navbar">
  <a href="home.php">Home</a>
  <a href="about.php">About</a>
  <div class="dropdown">
    <button class="dropbtn"onclick="window.location.href = 'our organisation.php';">Our Organisation
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="missionandvission.php">Mission and Vision</a>
      <a href="organisation.php">Organisation Structure</a>
      <a href="policeranks.php">Police Ranks</a>
      <a href="medals.php">Medals</a>
      <a href="emregency.php">Link 2</a>
      <a href="dosanddonts.php">Do's and Don'ts</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn" onclick="window.location.href = 'citizenservices.php';">Citizen Services 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="compliant form.php">File a Complaint</a>
      <a href="passport.php">Passport Status</a>
      <a href="echalanstatus.php">E-Chalan Status</a>
      <a href="citizencharter.php">Citizen Charter</a>
      <a href="criminals.php">Most Wanted Criminals</a>
      
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn " onclick="window.location.href = 'applicationform.php';">Application Forms 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="armed.php">Armed License</a>
      <a href="pass.php">Passport License</a>
      <a href="driving.php">Driving License</a>
      
      
    </div>
  </div>
  <a href="faqs.php">FAQ'S</a>
  <div class="dropdown">
    <button class="dropbtn "onclick="window.location.href = 'links.php';">External Links 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://www.interpol.int/en">Interpol</a>
      <a href="https://wcd.nic.in/">Ministry of Women and Child</a>
      <a href="http://www.cbi.gov.in">CBI</a>
      <a href="https://mha.gov.in/">Ministry of Human Affairs</a>
      <a href="https://www.digitalindia.gov.in">Digital India</a>
      <a href="https://rti.gov.in/">RTI</a>
     
    </div>
  </div> <a href="suggessions.php">SUGGESSIONS</a>
  
	</div>
	<p style="font-size: 20px;font-family: sans-serif;background-color: lightgreen;"><u><b>CITIZEN SERVICES</b></u></p>
	<div id="d1"><a href="compliant form.php"><img src="complaint.jpeg" width="200px" height="200px"><div id="d11" style=""><center><p id="p1" >File a Complaint</p></center></div></a></div>
	<div id="d2"><a href="passport.php"><img src="passport.jpg" width="200px" height="200px"><div id="d22" style=""><center><p id="p2">Passport Status</p></center></div></a></div>
	<div id="d3"><a href="echalanstatus.php"><img src="echalan.png" width="200px" height="200px"><div id="d33" style=""><center><p id="p3">Echalan Status</p></center></div></a></div>
	<div id="d4"><a href="citizencharter.php"><img src="citizencharter.jpg" width="200px" height="200px"><div id="d44" style=""><center><p id="p4">Citizen Charter</p></center></div></a></div>
	<div id="d5"><a href="mostwantedcitizens.php"><img src="mostwanted.jpeg" width="200px" height="200px"><div id="d55" style=""><center><p id="p5">Most WantedCriminals</p></center></div></a></div>
	<div id="d6"><a href="home.php"><img src="dosdonts.jpeg" width="200px" height="200px"><div id="d66" style=""><center><p id="p6">Do's and Don'ts</p></center></div></a></div>
	
	
</body>
<footer>
	<div id="qq" style="text-align: left;display: inline-block;">
		<h5 style="padding-left: 40px;padding-top: 10px;border-bottom: 1px solid white"><ul>Site Links</ul></h5>
		<ul style="text-decoration: none;list-style-type: none;padding-left: 60px;">
			<li><a href="about.php">About Us</a></li>
			<li><a href="our organisation.php">our organisation</a></li>
			<li><a href="citizenservices.php">citizen services</a></li>
			<li><a href="faqs.php" >FAQ's</a></li>
			<li><a href="links.php">External Links</a></li>
			<li><a href="applicationform.php">Application Forms</a></li>
		</ul>
	</div>
	<div id="wee"  style="text-align: left;display: inline-block;position: relative;left: 100px;bottom: 60px;">
		<h5 style="border-bottom: 1px solid white"><uL>Follow Us On</uL></h5>
		<ul style="text-decoration: none;list-style-type: none; padding-left: 40px;">
			<li><a href="https://www.facebook.com">Facebook</a></li>
			<li><a href="https://twitter.com/?lang=en">Twitter</a></li>
			<li><a href="https://www.instagram.com/?hl=en">Instagram</a></li>
			
		</ul>
	</div>
	<div id="wee1"  style="text-align: left;display: inline-block;position: relative;left: 200px;bottom: 90px;">
		<h5 style="border-bottom: 1px solid white;padding-bottom: 10px;"><center>Legal</center></h5>
		<ul style="text-decoration: none;list-style-type: none; padding-left: 30px;">
			<li><a href="">Privacy</a></li>
			<li><a href="">Terms</a></li>
			
			
		</ul>
	</div>
	<div id="wee2"  style="text-align: left;display: inline-block;position: relative;left: 800px;bottom: 0px;">
		<h5 style="border-bottom: 1px solid white" ><center><ul>Contact Us</ul></center></h5>
		<p><center>Ecops<br>Patna, Bihar (800005), India<br>
Phone: +91-0612-237 1715 / 237 2715<br>
FAX : +91-0612-2670631 , 0612-2660480</center></p>
<center><img src="home.jpeg" width="100px" height="50px"></center>
	</div><marquee direction="right"><a href="help.php" style="color: white;text-decoration: none;">Issues In Website?Click here</a></marquee >
	<p><center>CopyRight© 2019 India<br>All Rights Reserved</center></p>
	
</footer>
</html>
