<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->

<?php
	session_start();
?>
<html>
	<head>
		<title>Add funds</title>
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
			
			<p class="errorText">Form below is for academic purposes only and is not intended for actual use!</p>
			<p id="regPage">
				<h2>Add Funds</h2>
				<form name="logForm" method="post" action="AddFunds_Action.php">
					<input type="text" name="amount" class="regData4" value="Amount" onfocus="clearAmount()"/><br>
					<input type="text" name="creditcard" class="regData1" value="Credit card number" onfocus="clearCredit()"/><br>
					<input type="text" name="expirydate" class="regData1" value="Expiry date" onfocus="clearExpiry()"/><br>
					<input type="text" name="creditcode" class="regData1" value="3-digit code" onfocus="clearCode()"/><br>
					<input type="submit" value="Add Funds" class="logButton"/>
					<input type="reset" value="Clear" class="logButton"/>
				</form>				
			</p>
				
			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>