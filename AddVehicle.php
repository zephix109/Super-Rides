<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->

<?php
	session_start();
?>
<html>
	<head>
		<title>Add New Vehicle</title>
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
				<span id="regTitle">Add a new vehicle</span>
				<form name="vehicleForm" id="registration" method="post" onsubmit="return validateVehicle()" action="AddVehicle_Action.php">
					<input type="text" name="vehicletype" class="regData1" value="Vehicle Type" onfocus="clearVehicleType()"/>
					<input type="text" name="licenseplate" class="regData1" value="License Plate" onfocus="clearLicensePlate()"/><br><br>
					<label class="passText">Year Manufactured:</label>
					<input type="number" name="year" min="1960" max="2020" class="regData1"/><br><br>
					<label class="passText">Number of Seats: &nbsp &nbsp </label>
					<input type="number" name="numberofseats" min="1" max="7" class="regData1"/><br><br>
					<input type="text" name="insurancepolicy" class="regData3" value="Insurance Policy" onfocus="clearInsurance()"/><br><br>
					
					<input type="submit" value="Add Vehicle" class="regButton"/>
					<input type="reset" value="Clear form" class="regButton"/>
				</form>		
			</h2>

			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>