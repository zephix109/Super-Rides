<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->

<?php
	session_start();
	
	//check if user is logged in, if not, send to login page
	if($_SESSION['login'] != "ok")
		header ("Location: Login.php");
	
	include ("DBInfo.php");
	//Check connection
	$link = mysqli_connect($dbServer, $dbUser, $dbPass, $database);
	if(mysqli_connect_errno()){
		printf("Connect failed: %s<br>", mysqli_connect_errno());
		exit();
	}
	
	$curId = $_SESSION['id'];
	$carQuery = "SELECT * FROM Car WHERE member_id = '" . $curId . "'";
	$result = mysqli_query($link, $carQuery);
	$num_rows = mysqli_num_rows($result);
	if($num_rows == 0){
		$hasVehicle = false;
	} else {
		$hasVehicle = true;
	}
?>
<html>
	<head>
		<title>Post a Ride</title>
		<meta name="author" content="Andrew Laramee">
		<meta name="id" content="27050925">
		<meta name="date" content="November, 2016">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/Super_Rides.css"/>
		<script type="text/javascript" src="Javascript/Super_Rides.js"></script>
		<style>
		<?php
			if($hasVehicle == false){
				echo ".postLink{pointer-events: none; cursor: default;}";
			}
		?>
		</style>
	</head>
	<body>
		<div id="main">
			<!-- Header and Menu bar are identical on every page -->
			<?php include 'Layout\Header.php'?>
			<!-- Page specific code starts here -->
			
			<span id="regTitle">Post a ride</span>
			<?php
				if($hasVehicle == false){
					echo '<p class="errorText">Members must have a vehicle registered to the system in order to post a ride! <a href="MemberProfile.php">Add a vehicle</a></p>';
				}
			?>
			<div id="postRideDiv">
				<div class="postBlock"><a class="postLink" href="PostOneTimeRide.php">One Time Ride</a></div><p class="postParagraph">Post a ride with a set date that will occur only once.</p><br>
				<div class="postBlock"><a class="postLink" href="PostReoccurringRide.php">Reoccurring Ride</a></div><p class="postParagraph">Post a ride with a given frequency that will happen on a regular basis</p><br>
				<div class="postBlock"><a class="postLink" href="PostSpecialTrip.php">Special Trip</a></div><p class="postParagraph">Post and define a special trip, such as a trip to the hospital/clinic. Provide a maximum distance for the trip.</p>
			</div>
			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>