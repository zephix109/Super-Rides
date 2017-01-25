<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->

<?php
	session_start();
	/*
	//check if user is logged in, if not, send to login page
	if($_SESSION['login'] != "ok")
		header ("Location: Login.php");
	*/
	/* Remove if database connection is needed
	include ("DBInfo.php");
	//Check connection
	$link = mysqli_connect($dbServer, $dbUser, $dbPass, $database);
	if(mysqli_connect_errno()){
		printf("Connect failed: %s<br>", mysqli_connect_errno());
		exit();
	}
	echo "Connected successfully<br>";
	*/
?>
<html>
	<head>
		<!--Naming the homepage "index.html" would ruin the naming convention for my other pages-->
		<title>Home Page</title>
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
			<?php include 'Layout\Header.php'?>
			<!-- Page specific code starts here -->
			<table id="homeTable">
				<tr>
					<td>
						<p id="description">
							Welcome to Suber Rides!<br><br> 
							Whether you're looking for a weekly ride to work or a special trip to the hospital, Suber can help you find it.<br><br>
							If you are not yet a member, all you need is a reference from one of our current members and you can sign up today!<br><br><br><br>
							All public information about promotions and service updates will be posted here by administration.
						</p>
					</td>
				</tr>
			</table>
			
			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>