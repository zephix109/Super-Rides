<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->

<?php
	session_start();
?>
<html>
	<head>
		<title>Post Reoccurring Ride</title>
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
			
			<p id="regPage">
				<span id="regTitle">Post a reoccurring ride</span>
				<form name="postRideForm" id="registration" method="post" action="PostReoccurringRide_Action.php">
					<label class="passText">Departure location</label><br>
					<input type="text" name="depStreetNum" class="regData1" value="Street number" onfocus="clearDepStreetNum()"/>
					<input type="text" name="depCity" class="regData1" value="City" onfocus="clearDepCity()"/><br>
					<input type="text" name="depProvince" class="regData1" value="Province" onfocus="clearDepProvince()"/>
					<input type="text" name="depPostalCode" class="regData1" value="Postal code" onfocus="clearDepPostalCode()"/><br><br>
					<label class="passText">Destination location</label><br>
					<input type="text" name="destStreetNum" class="regData1" value="Street number" onfocus="clearDestStreetNum()"/>
					<input type="text" name="destCity" class="regData1" value="City" onfocus="clearDestCity()"/><br>
					<input type="text" name="destProvince" class="regData1" value="Province" onfocus="clearDestProvince()"/>
					<input type="text" name="destPostalCode" class="regData1" value="Postal code" onfocus="clearDestPostalCode()"/><br><br><br>
					<label class="passText">Time of departure</label>
					<input type="time" name="timeOfDep" class="regData1"/><br><br>
					<input type="text" name="freqOfTrip" class="regData3" value="Frequency of trip" onfocus="clearFrequencyOfTrip()"/><br>
					
					<input type="submit" value="Post Ride" class="regButton"/>
					<input type="reset" value="Clear form" class="regButton"/>
				</form>		
			</h2>

			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>