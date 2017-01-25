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
		<title>Sign Up With Referral</title>
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
				$checkMemEmail = $_POST['refemailaddress'];
				$checkMemFName = $_POST['reffirstname'];
				$checkMemBirth = $_POST['refdateofbirth'];
				
				$checkQuery = "SELECT * FROM Member WHERE firstname = '$checkMemFName' AND email = '$checkMemEmail' AND date_of_birth = '$checkMemBirth'";
				$checkResult = mysqli_query($link, $checkQuery);
				$num_rows = mysqli_num_rows($checkResult);
				
				if($num_rows >0){
					$val1 = $_POST['firstname'];
					$val2 = $_POST['lastname'];
					$val3 = $_POST['licensenumber'];
					$val4 = $_POST['emailaddress'];
					$val5 = $_POST['username'];
					$val6 = $_POST['userpassword'];
					$val7 = $_POST['drivride'];
					$val8 = $_POST['address'];
					$val9 = $_POST['dateofbirth'];
					
					$query = "INSERT INTO Member VALUES(NULL,'$val5','$val1','$val2','$val6','$val3','$val4','$val9', '$val8', '$val7', DEFAULT, DEFAULT, DEFAULT)";
					if(mysqli_query($link,$query)){
						echo "<br><div class='privSelect'>Thank you, $val1 has been registered!</div><br>";
						echo '<br><a href="Login.php">Log in</a>';
					} else {
						echo "Error: ".$query."<br>".mysqli_error($link);
					}
				} else {
					echo "<br><div class='privSelect'>Referring member's details are incorrect.</div><br>";
					echo '<br><a href="SignUpWithReferral.php">Return to Sign Up Page</a>';
				}
				mysqli_close($link);
			?>

			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>