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
		<title>Join Ride</title>
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
				$curId = $_SESSION['id'];
				$rideId = $_POST['rideid'];
				
				$query = "INSERT INTO Riding_in VALUES (NULL, '$rideId', '$curId')";
				if(mysqli_query($link,$query)){
					echo '<p class="privSelect">Ride has been joined</p>';
				} else {
					echo "Error: ".$query."<br>".mysqli_error($link);
				}
			?>
			
			<br><a href="RideHome.php">Return to rides page</a>

			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>