<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->

<?php
	session_start();
?>
<html>
	<head>
		<title>Rides</title>
		<meta name="author" content="Andrew Laramee">
		<meta name="id" content="27050925">
		<meta name="date" content="November, 2016">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="CSS/Super_Rides.css"/>
		<script type="text/javascript" src="Javascript/Super_Rides.js"></script>
		<style>
		<?php
			if($_SESSION['memberStatus'] == 'inactive'){
				echo "#findRide, #postRide, #myRide{pointer-events: none; cursor: default;}";
			} elseif($_SESSION['memberType'] == 'driver'){
				echo "#findRide{pointer-events: none; cursor: default;}";
			} else if($_SESSION['memberType'] == 'rider'){
				echo "#postRide{pointer-events: none; cursor: default;}";
			}
		?>
		</style>
	</head>
	<body>
		<div id="main">
			<!-- Header and Menu bar are identical on every page -->
			<?php include 'Layout\Header.php'?>
			<!-- Page specific code starts here -->
			
			<?php
				if($_SESSION['memberStatus'] == 'inactive'){
					echo '<p class="errorText">Members must pay the initial membership fee before posting or participating in rides. <a href="PayFee.php">Pay fee</a></p>';
				}
			?>
			
			<span id="regTitle">Rides</span>
			<div id="ridePageDiv">
				<div class="inlineBlock"><a id="myRide" href="MyRides.php">View My Rides</a><p class="insideBlock">View all of the rides you are participating in and all of the rides that you have offered.<br><br></p></div>
				<div class="inlineBlock"><a id="findRide" href="FindRide.php">Find A Ride</a><p class="insideBlock">Search for a ride by choosing certain criteria to suit your needs.<br><br>Riders only.</p></div>
				<div class="inlineBlock"><a id="postRide" href="PostRide.php">Post A Ride</a><p class="insideBlock">Post your own rides along with all pertinent details.<br><br>Drivers only.</p></div>
			</div>
			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>