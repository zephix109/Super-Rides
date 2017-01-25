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
		<title>Profile</title>
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
				if($_SESSION['memberStatus'] == 'inactive'){
					echo '<p class="errorText">Members must pay the initial membership fee before posting or participating in rides. <a href="PayFee.php">Pay fee</a></p>';
				}
			?>
			
			<span id="regTitle">Profile</span>
			<?php
				$curId = $_SESSION['id'];
				echo '<table id="profileTable">';
				$array = 	["1" => "Username",
							 "2" => "First Name",
							 "3" => "Last Name",
							 "5" => "License Number",
							 "6" => "Email",
							 "7" => "Date of Birth",
							 "8" => "Address",
							 "9" => "Member Type",
							 "10" => "Status",
							 "12" => "Retainer"];
							 
				$query = "SELECT * FROM Member WHERE id = '" . $curId . "'";
				$result = mysqli_query($link, $query);
				$row = mysqli_fetch_row($result);
				for($count = 1 ; $count<13 ; $count++){
					if($count == 4 || $count == 11) {
						continue;
					}
					if($count == 12){
						echo "<tr><th>" . $array[$count] . ":</th><td>" . $row[$count]." <span class='addFund'><a href='AddFunds.php'>+ add funds</a></span>" . "</td></tr>";
					} else {
						echo "<tr><th>" . $array[$count] . ":</th><td>" . $row[$count] . "</td></tr>";
					}
				}	
				echo '</table>';
				echo '<div class="privacyDiv">';
				echo '<form name="privForm" method="post" action="ChangePrivacy_Action.php">';
				echo '<div class="privSelect">Privacy Settings';
				if(strtolower($row[11]) == 'open') {
					echo "<select name='privacySet' class='regData2'><option value='open' selected>Open</option><option value='partial'>Partial</option><option value='full'>Full</option></select></div>";
					echo "<p class='privDescription'>All of your profile details are currently visible to the public</p>";
				} else if(strtolower($row[11]) == 'partial') {
					echo "<select name='privacySet' class='regData2'><option value='open'>Open</option><option value='partial' selected>Partial</option><option value='full'>Full</option></select></div>";
					echo "<p class='privDescription'>Only your username, first name, last name, email, member type and rating are currently visible to the public</p>";
				} else {
					echo "<select name='privacySet' class='regData2'><option value='open'>Open</option><option value='partial'>Partial</option><option value='full' selected>Full</option></select></div>";
					echo "<p class='privDescription'>Only your username, member type and rating are currently visible to the public</p>";
				}
				echo '<input type="submit" value="Update Privacy Settings" class="privButton"/>';
				echo '</form></div>';
				
				if($row[9] == 'driver' || $row[9] == 'both'){
					$carQuery = "SELECT * FROM Car WHERE member_id = '" . $curId . "'";
					$result = mysqli_query($link, $carQuery);
					$num_rows = mysqli_num_rows($result);
					if($num_rows == 0){
						echo "<button class='privButton' id='addVButton' type='button' onclick='addVehicle()'>Add Vehicle</button>";
					} else {
						echo '<div id="carDetails"><h2>Car Details</h2>';
						echo '<table id="carDetailTable">';
						$carArray =["2" => "License Plate",
									"3" => "Year",
									"4" => "Type",
									"5" => "Number of Seats",
									"6" => "Insurance Policy"];
						$carRow = mysqli_fetch_row($result);
						for($carCount = 2 ; $carCount<7 ; $carCount++){
							echo "<tr><th>" . $carArray[$carCount] . ":</th><td>" . $carRow[$carCount] . "</td></tr>";
						}
						echo '</table></div>';
					}
				}
				
				mysqli_close($link);
			?>
				
			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>