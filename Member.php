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
		<title>Members</title>
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
			
			<span id="regTitle">Members</span>
			<table id="memberTable">
				<thead>
					<tr>
						<th>First Name</th><th>Last Name</th><th>Rating</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$query = "SELECT id, firstname, lastname FROM Member WHERE driver_or_rider = 'driver' OR driver_or_rider = 'both'";
						$result = mysqli_query($link, $query);

						while($row = mysqli_fetch_array($result)){
							$curId = $row['id'];
							if($curId == '1')
								continue;
							$countQuery = "SELECT COUNT(number_of_stars) FROM Rating WHERE member_id = '" . $curId . "'";
							$countResult = mysqli_query($link, $countQuery);
							if ($countResult != FALSE) {
								$countRow = mysqli_fetch_row($countResult);
								$count = $countRow[0];
							
								$sumQuery = "SELECT SUM(number_of_stars) FROM Rating WHERE member_id = '" . $curId . "'";
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
							echo "<tr><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $ratingAvg . "</td></tr>";
						}
						
						mysqli_close($link);
					?>
				</tbody>
			</table>
				
			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>