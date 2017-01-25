<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->

<?php
	session_start();
	//check if user is logged in, if not, send to login page
	if($_SESSION['login'] == null || $_SESSION['login'] != "ok")
		header ("Location: SignUpWithReferral.php");
?>
<html>
	<head>
		<title>Sign Up A Friend</title>
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
			
			<p id="regPage">
				<span id="regTitle">Sign up a friend</span>
				<form name="regForm" id="registration" method="post" onsubmit="return validateReg()" action="SignUp_Action.php">
					<input type="text" name="firstname" class="regData1" value="First name" onfocus="clearFName()"/>
					<input type="text" name="lastname" class="regData1" value="Last name" onfocus="clearLName()"/><br>
					<input type="text" name="licensenumber" class="regData1" value="License number" onfocus="clearLicense()"/>
					<select id="drivride" name="drivride" class="regData2">
						<option value="" selected>Select one</option>
						<option value="driver">Driver</option>
						<option value="rider">Rider</option>
						<option value="both">Driver and Rider</option>
					</select><br>
					<label class="passText">Date of birth:</label><input type="date" name="dateofbirth" class="regData1" /><br>
					<input type="text" name="address" class="regData3" value="Address" onfocus="clearAddress()"/><br>
					<input type="text" name="emailaddress" class="regData3" value="Email address" onfocus="clearEmail()"/><br><br><br>
					<input type="text" name="username" class="regData3" value="Username" onfocus="clearUser()"/><br>
					<span class="regInfo">(must be at least 6 characters)</span><br>
					<label class="passText">Password</label>
					<input type="password" name="userpassword" class="regData4" value="Password" onfocus="clearPassword()"/>
					<label class="passText">Confirm</label>
					<input type="password" name="confirmpassword" class="regData4" value="Password" onfocus="clearConfirm()"/><br>
					<span class="regInfo">(must be at least 6 characters with at least one letter and one number)</span><br>
					
					<input type="submit" value="Sign Them Up" class="regButton"/>
					<input type="reset" value="Clear form" class="regButton"/>
				</form>		
			</h2>

			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>