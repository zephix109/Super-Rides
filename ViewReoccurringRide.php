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
		<!--Naming the homepage "index.html" would ruin the naming convention for my other pages-->
		<title>Reoccurring ride details</title>
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
			
			<span id="regTitle">Ride details</span>
			<?php
				$rideID = $_POST['submit'];
			
				echo '<table id="profileTable">';
				$array = 	["1" => "Driver Name",
							 "2" => "Departure",
							 "3" => "Destination",
							 "4" => "Time of Departure",
							 "5" => "Seats",
							 "6" => "Frequency",
							 "7" => "Rating"];
			
				$query = "SELECT r.*, s.* FROM Ride r INNER JOIN Reoccurring_Ride s ON r.id = s.ride_id AND r.id = '$rideID'";
				$result = mysqli_query($link, $query);
				
				$row = mysqli_fetch_array($result);
				
				$memberId = $row['member_id'];
				$memberNameQuery = "SELECT firstname, lastname FROM Member WHERE id='$memberId'";
				$memberResult = mysqli_query($link, $memberNameQuery);
				$memRow = mysqli_fetch_row($memberResult);
				
				$countQuery = "SELECT COUNT(number_of_stars) FROM Rating WHERE member_id = '" . $memberId . "'";
				$countResult = mysqli_query($link, $countQuery);
				if ($countResult != FALSE) {
					$countRow = mysqli_fetch_row($countResult);
					$count = $countRow[0];
				
					$sumQuery = "SELECT SUM(number_of_stars) FROM Rating WHERE member_id = '" . $memberId . "'";
					$sumResult = mysqli_query($link, $sumQuery);
					$sumRow = mysqli_fetch_row($sumResult);
					$sum = $sumRow[0];
					
					if($count > 0){
						$ratingAvg = $sum / $count;
						$ratingAvg = number_format($ratingAvg, 2, '.', '');
					} else {
						$ratingAvg = 'N/A';
					}
				} else {
					$ratingAvg = 'N/A';
				}
				
				$depLoc = $row['departure_location'];
				$depLocQuery = "SELECT * FROM Location WHERE id = '$depLoc'";
				$depResult = mysqli_query($link, $depLocQuery);
				$depRow = mysqli_fetch_row($depResult);
				
				$destLoc = $row['destination_location'];
				$destLocQuery = "SELECT * FROM Location WHERE id = '$destLoc'";
				$destResult = mysqli_query($link, $destLocQuery);
				$destRow = mysqli_fetch_row($destResult);

				echo "<tr><th>" . $array[1] . ":</th><td>" . $memRow[0]." ".$memRow[1]. "</td></tr>";
				echo "<tr><th>" . $array[7] . ":</th><td>" . $ratingAvg . "</td></tr>";
				echo "<tr><th>" . $array[2] . ":</th><td>".$depRow[4]."<br>".$depRow[1]."<br>".$depRow[2]."<br>".$depRow[3]."</td></tr>";
				echo "<tr><th>" . $array[3] . ":</th><td>".$destRow[4]."<br>".$destRow[1]."<br>".$destRow[2]."<br>".$destRow[3]."</td></tr>";
				echo "<tr><th>" . $array[4] . ":</th><td>" . $row['time_of_departure'] . "</td></tr>";
				echo "<tr><th>" . $array[5] . ":</th><td>" . $row['seats_available'] . "</td></tr>";
				echo "<tr><th>" . $array[6] . ":</th><td>" . $row['frequency'] . "</td></tr>";
					
				echo '</table>';
				
				echo "<form name='joinRideForm' method='post' action='JoinRide_Action.php'><input type='hidden' name='rideid' value='".$rideID."'>".
						"<input type='submit' class='joinButton' value='Take Ride'></form>";
				
				mysqli_close($link);
			?>
				
			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>