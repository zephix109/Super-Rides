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
		<title>Find ride</title>
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
			
			<span id="regTitle">Posted Rides</span><br><br><br>
			<span class="smallTitle">One-time rides</span>
			<table id="memberTable">
				<thead>
					<tr>
						<th>Id</th><th>Departure</th><th>Destination</th><th>Time</th><th>Seats</th><th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$curId = $_SESSION['id'];
						$query = "SELECT r.*, s.* FROM Ride r INNER JOIN Single_Ride s ON r.id = s.ride_id";
						$result = mysqli_query($link, $query);
						
						while($row = mysqli_fetch_array($result)){
							$depLoc = $row['departure_location'];
							$depLocQuery = "SELECT * FROM Location WHERE id = '$depLoc'";
							$depResult = mysqli_query($link, $depLocQuery);
							$depRow = mysqli_fetch_row($depResult);
							
							$destLoc = $row['destination_location'];
							$destLocQuery = "SELECT * FROM Location WHERE id = '$destLoc'";
							$destResult = mysqli_query($link, $destLocQuery);
							$destRow = mysqli_fetch_row($destResult);
						
							echo "<tr><td><form name='viewRideForm' method='post' action='ViewSingleRide.php'><input type='submit' name='submit' value='".$row['id']."'></form></td>".
								 "<td>".$depRow[4]."<br>".$depRow[1]."<br>".$depRow[2]."<br>".$depRow[3]."</td>".
								 "<td>".$destRow[4]."<br>".$destRow[1]."<br>".$destRow[2]."<br>".$destRow[3]."</td>".
								 "<td>".$row['time_of_departure']."</td><td>".$row['seats_available']."</td><td>".$row['date_of_departure']."</td></tr>";
						}
					?>
				</tbody>
			</table><br><br>
			<span class="smallTitle">Reoccurring rides</span>
			<table id="memberTable">
				<thead>
					<tr>
						<th>Id</th><th>Departure</th><th>Destination</th><th>Time</th><th>Seats</th><th>Frequency</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$reocQuery = "SELECT r.*, s.* FROM Ride r INNER JOIN Reoccurring_ride s ON r.id = s.ride_id";
						$reocResult = mysqli_query($link, $reocQuery);
						
						while($row = mysqli_fetch_array($reocResult)){
							$depLoc = $row['departure_location'];
							$depLocQuery = "SELECT * FROM Location WHERE id = '$depLoc'";
							$depResult = mysqli_query($link, $depLocQuery);
							$depRow = mysqli_fetch_row($depResult);
							
							$destLoc = $row['destination_location'];
							$destLocQuery = "SELECT * FROM Location WHERE id = '$destLoc'";
							$destResult = mysqli_query($link, $destLocQuery);
							$destRow = mysqli_fetch_row($destResult);
						
							echo "<tr><td><form name='viewRideForm' method='post' action='ViewReoccurringRide.php'><input type='submit' name='submit' value='".$row['id']."'></form></td>".
								 "<td>".$depRow[4]."<br>".$depRow[1]."<br>".$depRow[2]."<br>".$depRow[3]."</td>".
								 "<td>".$destRow[4]."<br>".$destRow[1]."<br>".$destRow[2]."<br>".$destRow[3]."</td>".
								 "<td>".$row['time_of_departure']."</td><td>".$row['seats_available']."</td><td>".$row['frequency']."</td></tr>";
						}
					?>
				</tbody>
			</table><br><br>
			<span class="smallTitle">Special trips</span>
			<table id="memberTable">
				<thead>
					<tr>
						<th>Id</th><th>Departure</th><th>Destination</th><th>Time</th><th>Seats</th><th>Max Dist.</th><th>Description</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$specQuery = "SELECT r.*, s.* FROM Ride r INNER JOIN Special_trip s ON r.id = s.ride_id";
						$specResult = mysqli_query($link, $specQuery);
						
						while($row = mysqli_fetch_array($specResult)){
							$depLoc = $row['departure_location'];
							$depLocQuery = "SELECT * FROM Location WHERE id = '$depLoc'";
							$depResult = mysqli_query($link, $depLocQuery);
							$depRow = mysqli_fetch_row($depResult);
							
							$destLoc = $row['destination_location'];
							$destLocQuery = "SELECT * FROM Location WHERE id = '$destLoc'";
							$destResult = mysqli_query($link, $destLocQuery);
							$destRow = mysqli_fetch_row($destResult);
						
							echo "<tr><td><form name='viewRideForm' method='post' action='ViewSpecialRide.php'><input type='submit' name='submit' value='".$row['id']."'></form></td>".
								 "<td>".$depRow[4]."<br>".$depRow[1]."<br>".$depRow[2]."<br>".$depRow[3]."</td>".
								 "<td>".$destRow[4]."<br>".$destRow[1]."<br>".$destRow[2]."<br>".$destRow[3]."</td>".
								 "<td>".$row['time_of_departure']."</td><td>".$row['seats_available']."</td><td>".$row['max_distance']."</td><td>".$row['description']."</td></tr>";
						}
					?>
				</tbody>
			</table>
			
			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>