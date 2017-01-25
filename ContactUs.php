<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->
<?php
	session_start();
?>
<html>
	<head>
		<title>Contact Us</title>
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
			
			<table id="contTable">
				<tr>
					<th id="cont">Contact Us!</th>
					<td rowspan=2><div id="building"><img src="Images/building.jpeg" alt="Cool skyscraper"></div></td>
				</tr>
				<tr>
					<td><p id="contactPage">
						Andrew Laramee<br>
						Suber Rides Ltd.<br><br>
						Office: (514) 848-2424<br><br>
						7141 Rue Sherbrooke O, Montreal<br>
						Quebec, Canada<br>
						H4B 1R6<br><br><br>
						Or email us at:<br><a href="mailto:zephix109@gmail.com" style="color: black;">zephix109@gmail.com</a>
					</p></td>
				</tr>
			</table>	

			<!-- Footer is identical on every page -->
			<?php include 'Layout\Footer.php'?>
		</div>
	</body>
</html>