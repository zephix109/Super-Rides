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
		<title>Add Funds</title>
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
				$getQuery = "SELECT retainer FROM Member WHERE  id = '$curId'";
				$result = mysqli_query($link, $getQuery);
				$row = mysqli_fetch_row($result);
				$curAmount = $row[0];
				$amountToUpdate = $curAmount + $_POST['amount'];
				
				$query = "UPDATE Member SET retainer = '$amountToUpdate' WHERE id = '$curId'";
				if(mysqli_query($link,$query)){
					echo '<p class="privSelect">Funds have been added</p>';
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