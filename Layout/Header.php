<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->

<?php
	if($_SESSION != null && $_SESSION['login'] == 'ok'){
		echo '<p id="language"><a href="MemberProfile.php">Profile</a> | <a href="Logout_Action.php">Logout</a></p>';
	} else {
		echo '<p id="language"><a href="Login.php">Login</a></p>';
	}
?>
<h1><img id="headericon" src="Images/car_icon_med.png" alt="Car icon missing"/><span id="headtxt"><span id="Lar">Suber</span>|Rides<br></span></h1>
<form id="menuBar">
	<input type="button" class="homeButton" name="homeButton" value="Home" onclick="goHome()"/>
	<input type="button" class="homeButton" name="memberButton" value="Members" onclick="goMember()"/>
	<input type="button" class="homeButton" name="regButton" value="Sign Up" onclick="goRegister()"/>
	<?php
		if($_SESSION != null && $_SESSION['login'] == 'ok'){
			echo '<input type="button" class="homeButton" name="ridesButton" value="Rides" onclick="goRide()"/>';
		}
	?>
	<Input type="button" class="homeButton" name="contactButton" value="Contact Us" onclick="goContact()"/>
</form>