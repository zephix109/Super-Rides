<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->

<html>
	<head>
		<title>Login</title>
		<meta name="author" content="Andrew Laramee">
		<meta name="id" content="27050925">
		<meta name="date" content="November, 2016">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/Super_Rides.css"/>
		<script type="text/javascript" src="Javascript/Super_Rides.js"></script>
	</head>
	<body>
		<div id="main">
			<!-- Header and Menu bar are identical on every page -->
			<p id="language"><a href="Login.php">Login</a></p>
			<h1><img id="headericon" src="Images/car_icon_med.png" alt="Car icon missing"/><span id="headtxt"><span id="Lar">Super</span>|Rides<br></span></h1>
			<form id="menuBar">
				<input type="button" class="homeButton" name="homeButton" value="Home" onclick="goHome()"/>
				<input type="button" class="homeButton" name="memberButton" value="Members" onclick="goMember()"/>
				<Input type="button" class="homeButton" name="contactButton" value="Contact Us" onclick="goContact()"/>
			</form>
			<!-- Page specific code starts here -->
			
			<p id="regPage">
				<h2>Login</h2>
				<form name="logForm" method="post" action="Login_Action.php">
					<input type="text" name="loginUser" class="regData1" value="Username" onfocus="clearLogUser()"/><br>
					<input type="password" name="loginPassword" class="regData1" value="Password" onfocus="clearLogPass()"/><br>
					<input type="submit" value="Login" class="logButton"/>
					<input type="reset" value="Clear" class="logButton"/>
				</form>				
			</p>
				
			<!-- Footer is identical on every page -->
			<footer>
	<table id="footerTable">
		<tr><th>Site Map</th><th>Contact Us</th><th>Find Us!</th></tr>
		<tr>
			<td><a href="HomePage.php">Home</a></td>
			<td>Super Rides Ltd.</td>
		</tr>
		<tr>
			<td><a href="Member.php">Members</a></td>
			<td>7141 Rue Sherbrooke O</td>
			<td rowspan=2><img src="Images/facebook.png" alt="Facebook" onclick="goFacebook()"/></td>
		</tr>
		<tr>
			<td></td>
			<td>Montreal, Quebec, H4B 1R6</td>
		</tr>
		<tr>
			<td><a href="Login.php">Login</a></td>
			<td>Office: (514)848-2424</td>
		</tr>
	</table>	
	<p id="copyright">Super Rides Copyright © 2016 by Andrew Laramee All rights reserved</p>
</footer>
		</div>
	</body>
</html>