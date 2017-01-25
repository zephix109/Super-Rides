<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->

<?php
	include ("DBInfo.php");
	
	//Check connection
	$link = mysqli_connect($dbServer, $dbUser, $dbPass, $database);
	if(mysqli_connect_errno()){
		printf("Connect failed: %s<br>", mysqli_connect_errno());
		exit();
	}
	echo "Connected successfully<br>";
	
	//start session if login is valid
	$logUser = $_POST['loginUser'];
	$logPass = $_POST['loginPassword'];
	$logUser = htmlspecialchars($logUser);
	$logPass = htmlspecialchars($logPass);
	
	$query = "SELECT * FROM Member WHERE username = '$logUser' AND password = '$logPass'";
	$result = mysqli_query($link, $query);
	$num_rows = mysqli_num_rows($result);

	if($num_rows > 0) {
		session_start();
		$rowData = mysqli_fetch_row($result);
		$id = $rowData[0];
		$memberType = $rowData[9];
		$memberStatus = $rowData[10];
		$_SESSION['login'] = "ok";	
		$_SESSION['id'] = $id;
		$_SESSION['memberType'] = $memberType;
		$_SESSION['memberStatus'] = $memberStatus;
		header ("Location: Homepage.php");
	} else {
		header ("Location: Login.php");
	}
	
	mysqli_close($link);
?>