<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->

<?php
	session_start();
	
	include ("DBInfo.php");
	//Check connection
	$link = mysqli_connect($dbServer, $dbUser, $dbPass, $database);
	if(mysqli_connect_errno()){
		printf("Connect failed: %s<br>", mysqli_connect_errno());
		exit();
	}
	//echo "Connected successfully<br>";
?>	
<html>
	<head>
		<title>Post a special trip</title>
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
			<?php			
				//Departure location insert
				$depStreetNum = $_POST['depStreetNum'];
				$depCity = $_POST['depCity'];
				$depProvince = $_POST['depProvince'];
				$depPostalCode = $_POST['depPostalCode'];
				
				$depLocQuery = "INSERT INTO Location VALUES(NULL,'$depCity','$depProvince','$depPostalCode','$depStreetNum')";
				if(mysqli_query($link,$depLocQuery)){
					$getDepLocIdQuery = "SELECT id FROM Location WHERE street_number = '$depStreetNum' AND postal_code = '$depPostalCode'";
					$depIdResult = mysqli_query($link, $getDepLocIdQuery);
					$rowDataDep = mysqli_fetch_row($depIdResult);
					$depId = $rowDataDep[0];
				} else {
					echo "Error: ".$depLocQuery."<br>".mysqli_error($link);
				}
				
				//Destination location insert
				$destStreetNum = $_POST['destStreetNum'];
				$destCity = $_POST['destCity'];
				$destProvince = $_POST['destProvince'];
				$destPostalCode = $_POST['destPostalCode'];
				
				$destLocQuery = "INSERT INTO Location VALUES(NULL,'$destCity','$destProvince','$destPostalCode','$destStreetNum')";
				if(mysqli_query($link,$destLocQuery)){
					$getDestLocIdQuery = "SELECT id FROM Location WHERE street_number = '$destStreetNum' AND postal_code = '$destPostalCode'";
					$destIdResult = mysqli_query($link, $getDestLocIdQuery);
					$rowDataDest = mysqli_fetch_row($destIdResult);
					$destId = $rowDataDest[0];
				} else {
					echo "Error: ".$destLocQuery."<br>".mysqli_error($link);
				}
				
				$memberId = $_SESSION['id'];
				$timeOfDep = $_POST['timeOfDep'];
				$maxDistance = $_POST['maxDistance'];
				$tripDescription = $_POST['tripDescription'];
				
				//Get number of seats from member's vehicle information
				$carIdQuery = "SELECT number_of_seats FROM Car WHERE member_id = '$memberId'";
				$carIdResult = mysqli_query($link,$carIdQuery);
				$rowDataCar = mysqli_fetch_row($carIdResult);
				$numberOfSeats = $rowDataCar[0];
				
				$rideQuery = "INSERT INTO Ride VALUES(NULL,'$memberId','$depId','$destId','$timeOfDep','$numberOfSeats')";
				if(mysqli_query($link,$rideQuery)){
					$getRideIdQuery = "SELECT id FROM Ride WHERE departure_location = '$depId' AND destination_location = '$destId'";
					$rideIdResult = mysqli_query($link, $getRideIdQuery);
					$rowDataRide = mysqli_fetch_row($rideIdResult);
					$rideId = $rowDataRide[0];
					$SpecialTripQuery = "INSERT INTO Special_Trip VALUES('$rideId','$tripDescription','$maxDistance')";
					if(mysqli_query($link,$SpecialTripQuery)){
						echo "<br><div class='privSelect'>Special trip added successfully</div><br>";
					} else {
						echo "Error: ".$SpecialTripQuery."<br>".mysqli_error($link);
					}
				} else {
					echo "Error: ".$rideQuery."<br>".mysqli_error($link);					
				}

				mysqli_close($link);
			?>
			<br><a href="RideHome.php">Return to Rides page</a>

			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>