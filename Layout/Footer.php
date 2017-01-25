<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->

<footer>
	<table id="footerTable">
		<tr><th>Site Map</th><th>Contact Us</th><th>Find Us!</th></tr>
		<tr>
			<td><a href="HomePage.php">Home</a></td>
			<td>Suber Rides Ltd.</td>
		</tr>
		<tr>
			<td><a href="Member.php">Members</a></td>
			<td>7141 Rue Sherbrooke O</td>
			<td rowspan=2><img src="Images/facebook.png" alt="Facebook" onclick="goFacebook()"/></td>
		</tr>
		<tr>
			<?php
				if($_SESSION != null && $_SESSION['login'] == 'ok'){
					echo '<td><a href="RideHome.php">Rides</a></td>';
				} else {
					echo '<td></td>';
				}
			?>
			<td>Montreal, Quebec, H4B 1R6</td>
		</tr>
		<tr>
			<td><a href="SignUp.php">Sign Up</a></td>
			<td>Office: (514)848-2424</td>
		</tr>
	</table>	
	<p id="copyright">Suber Rides Copyright © 2016 by Andrew Laramee All rights reserved</p>
</footer>