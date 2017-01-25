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
	
	//Update users privacy settings
	$curId = $_SESSION['id'];
	$privSetting = $_POST['privacySet'];
	
	$query = "UPDATE Member SET privacy_setting='" . $privSetting . "' WHERE id='" . $curId . "'";
	if(mysqli_query($link,$query))
		header ("Location: MemberProfile.php");
	else
		echo "Error: ".$query."<br>".mysqli_error($link);
	
	mysqli_close($link);
?>