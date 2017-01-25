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
		<title>Pay fee</title>
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
				$_SESSION['memberStatus'] = 'active';
				$query = "UPDATE Member SET member_status = 'active' WHERE id = '$curId'";
				if(mysqli_query($link,$query)){
					echo '<p class="privSelect">Fee has been paid</p>';
				} else {
					echo "Error: ".$query."<br>".mysqli_error($link);
				}
			?>
			
			<br><a href="MemberProfile.php">Return to profile page</a>

			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>