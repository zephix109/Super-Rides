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
	echo "Connected successfully<br>";
	
	$curId = $_SESSION['id'];
	
	$val1 = $_POST['licenseplate'];
	$val2 = $_POST['year'];
	$val3 = $_POST['vehicletype'];
	$val4 = $_POST['numberofseats'];
	$val5 = $_POST['insurancepolicy'];
	
	$query = "INSERT INTO Car VALUES(NULL,'$curId','$val1','$val2','$val3','$val4','$val5')";
	if(mysqli_query($link,$query))
		header ("Location: MemberProfile.php");
	else
		echo "Error: ".$query."<br>".mysqli_error($link);
	
	mysqli_close($link);
?>