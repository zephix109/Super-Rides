<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->

<html>
	<head>
		<title>Fill Tables</title>
		<meta name="id" content="27050925">
	</head>
	<body>
		<?php
			include ("/../DBInfo.php");
			
			//Check connection
			$link = mysqli_connect($dbServer, $dbUser, $dbPass, $database);
			if(mysqli_connect_errno()){
				printf("Connect failed: %s<br>", mysqli_connect_errno());
				exit();
			}
			echo "Connected successfully<br>";
			
			//Fill Tables
			//Member table
			$query = "INSERT INTO Member VALUES (NULL, 'admin', 'admin', 'admin', 'admin', 'P1234567890', 'zephix109@gmail.com', '19900905', '123 Longlane, Montreal, QC', 'both', 'active', DEFAULT, '46.78')";
			if(mysqli_query($link, $query)) {
				echo "<br>Member tuple 1 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Member VALUES (NULL, 'bhanson', 'Bill', 'Hanson', 'qwertyuiop1', 'P0372473924', 'b.hanson@hotmail.com', '19751222', '8263 Baltic Ave., Montreal, QC', 'driver', DEFAULT, DEFAULT, '23.64')";
			if(mysqli_query($link, $query)) {
				echo "<br>Member tuple 2 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Member VALUES (NULL, 'jjickson', 'Jane', 'Jickson', 'qwertyuiop2', 'V9842139874', 'j.jickson@hotmail.com', '19930407', '13987 Shortlane, Montreal, QC', 'rider', 'active', DEFAULT, '12.56')";
			if(mysqli_query($link, $query)) {
				echo "<br>Member tuple 3 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Member VALUES (NULL, 'mwither', 'Mary', 'Wither', 'qwertyuiop3', 'C12387692843', 'm.wither@gmail.com', '19870126', '8736 Mediumlane, Laval, QC', 'driver', 'active', DEFAULT, DEFAULT)";
			if(mysqli_query($link, $query)) {
				echo "<br>Member tuple 4 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Member VALUES (NULL, 'plimen', 'Patrick', 'Limen', 'qwertyuiop4', 'F1235847673213', 'p.limen@gmail.com', '19820729', '83726 Thestreet, Montreal, QC', 'both', DEFAULT, DEFAULT, DEFAULT)";
			if(mysqli_query($link, $query)) {
				echo "<br>Member tuple 5 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Member VALUES (NULL, 'kwart', 'Karen', 'Wart', 'qwertyuiop5', 'B986363844635', 'k.wart@gmail.com', '19690308', '12 Lakeshore road, Point-Claire, QC', 'rider', DEFAULT, DEFAULT, DEFAULT)";
			if(mysqli_query($link, $query)) {
				echo "<br>Member tuple 6 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Member VALUES (NULL, 'itanner', 'Ian', 'Tanner', 'qwertyuiop6', 'S4846257453626', 'i.tanner@gmail.com', '19921123', '499 Dazzle road, Beaconsfield, QC', 'both', DEFAULT, DEFAULT, DEFAULT)";
			if(mysqli_query($link, $query)) {
				echo "<br>Member tuple 7 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Member VALUES (NULL, 'wcienna', 'Wendy', 'Cienna', 'qwertyuiop7', 'J545678929836', 'w.cienna@hotmail.com', '19900415', '8835 rue Denver, Vaudreuil, QC', 'driver', 'active', DEFAULT, '33.46')";
			if(mysqli_query($link, $query)) {
				echo "<br>Member tuple 8 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}

			$query = "INSERT INTO Member VALUES (NULL, 'lmosho', 'Liamm', 'Mosho', 'qwertyuiop8', 'G13762014648', 'l.mosho@hotmail.com', '19940601', '5241 rue Lake, Quebec, QC', 'driver', 'active', DEFAULT, '08.23')";
			if(mysqli_query($link, $query)) {
				echo "<br>Member tuple 9 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Member VALUES (NULL, 'ghannash', 'Greg', 'Hannash', 'qwertyuiop9', 'A329836890287', 'g.hannash@gmail.com', '19871228', '44 Anthony Dr.', 'rider', 'active', DEFAULT, DEFAULT)";
			if(mysqli_query($link, $query)) {
				echo "<br>Member tuple 10 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			//Car table
			$query = "INSERT INTO Car VALUES (NULL, '1', '372SEK', '2009', 'sedan', '4', 'SKDHEU8373FJ')";
			if(mysqli_query($link, $query)) {
				echo "<br>Car tuple 1 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Car VALUES (NULL, '2', '922PWM', '2014', 'SUV', '6', '267TYH3289EU')";
			if(mysqli_query($link, $query)) {
				echo "<br>Car tuple 2 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Car VALUES (NULL, '4', '622AOY', '2002', 'sport', '1', 'EJ89E029WUE8E')";
			if(mysqli_query($link, $query)) {
				echo "<br>Car tuple 3 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Car VALUES (NULL, '7', '724BDW', '2012', 'sedan', '3', 'H279G938HD72')";
			if(mysqli_query($link, $query)) {
				echo "<br>Car tuple 4 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Car VALUES (NULL, '8', '322ZOI', '2007', 'SUV', '5', '7298DFH37209E9')";
			if(mysqli_query($link, $query)) {
				echo "<br>Car tuple 5 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Car VALUES (NULL, '9', '884HMT', '2015', 'sedan', '4', 'K173249891HUHD0')";
			if(mysqli_query($link, $query)) {
				echo "<br>Car tuple 6 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			//Ratings table
			$query = "INSERT INTO Rating VALUES (NULL, '1', '5', '')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 1 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '1', '4', '')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 2 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '2', '3', '')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 3 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '4', '1', 'Bad stuff')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 4 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '4', '2', 'Not great stuff')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 5 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '5', '5', '')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 6 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '5', '3', '')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 7 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '5', '5', '')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 7 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '7', '4', '')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 8 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '7', '3', 'Bumpy ride')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 9 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '7', '3', 'Drove too fast')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 10 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '8', '5', '')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 11 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '8', '4', '')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 12 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '8', '4', '')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 13 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '9', '2', 'Drove too fast')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 14 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Rating VALUES (NULL, '9', '3', '')";
			if(mysqli_query($link, $query)) {
				echo "<br>Rating tuple 15 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			//Location table
			$query = "INSERT INTO Location VALUES (NULL, 'Montreal', 'Quebec', 'H6F7U8', '123 Baltic Ave.')";
			if(mysqli_query($link, $query)) {
				echo "<br>Location tuple 1 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Location VALUES (NULL, 'Montreal', 'Quebec', 'J5S4V9', '167 Fairlawn crescent')";
			if(mysqli_query($link, $query)) {
				echo "<br>Location tuple 2 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Location VALUES (NULL, 'Laval', 'Quebec', 'L8F3D2', '884 rue de la Farcord')";
			if(mysqli_query($link, $query)) {
				echo "<br>Location tuple 3 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Location VALUES (NULL, 'Vaudreuil', 'Quebec', 'N5G7W2', '96 rue des Fleurs')";
			if(mysqli_query($link, $query)) {
				echo "<br>Location tuple 4 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Location VALUES (NULL, 'Laval', 'Quebec', 'L7N9G0', '66 Bonne Place ave')";
			if(mysqli_query($link, $query)) {
				echo "<br>Location tuple 5 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Location VALUES (NULL, 'Vaudreuil', 'Quebec', 'M2SQ2Q', '2853 rue des Noisettes')";
			if(mysqli_query($link, $query)) {
				echo "<br>Location tuple 6 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Location VALUES (NULL, 'Laval', 'Quebec', 'H3G2E2', '521 de la Savane')";
			if(mysqli_query($link, $query)) {
				echo "<br>Location tuple 7 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Location VALUES (NULL, 'Granby', 'Quebec', 'U1O8J6', '64 Laurent')";
			if(mysqli_query($link, $query)) {
				echo "<br>Location tuple 8 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Location VALUES (NULL, 'Sherbrooke', 'Quebec', 'B1F2J6', '881 rue Genevieve')";
			if(mysqli_query($link, $query)) {
				echo "<br>Location tuple 9 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Location VALUES (NULL, 'Quebec', 'Quebec', 'G6K2L1', '9 rue Principale')";
			if(mysqli_query($link, $query)) {
				echo "<br>Location tuple 10 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			//Rides table
			$query = "INSERT INTO Ride VALUES (NULL, '2', '1', '2', '12:45:00', '6')";
			if(mysqli_query($link, $query)) {
				echo "<br>Ride tuple 1 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Ride VALUES (NULL, '4', '3', '4', '11:00:00', '1')";
			if(mysqli_query($link, $query)) {
				echo "<br>Ride tuple 2 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Ride VALUES (NULL, '7', '5', '6', '05:00:00', '3')";
			if(mysqli_query($link, $query)) {
				echo "<br>Ride tuple 3 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Ride VALUES (NULL, '2', '6', '2', '01:00:00', '6')";
			if(mysqli_query($link, $query)) {
				echo "<br>Ride tuple 4 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Ride VALUES (NULL, '8', '3', '1', '09:30:00', '5')";
			if(mysqli_query($link, $query)) {
				echo "<br>Ride tuple 5 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Ride VALUES (NULL, '7', '4', '2', '07:15:00', '3')";
			if(mysqli_query($link, $query)) {
				echo "<br>Ride tuple 6 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Ride VALUES (NULL, '4', '6', '9', '05:50:00', '3')";
			if(mysqli_query($link, $query)) {
				echo "<br>Ride tuple 7 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Ride VALUES (NULL, '9', '10', '7', '01:20:00', '4')";
			if(mysqli_query($link, $query)) {
				echo "<br>Ride tuple 8 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Ride VALUES (NULL, '9', '3', '8', '07:00:00', '4')";
			if(mysqli_query($link, $query)) {
				echo "<br>Ride tuple 9 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Ride VALUES (NULL, '2', '1', '6', '03:15:00', '6')";
			if(mysqli_query($link, $query)) {
				echo "<br>Ride tuple 10 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Ride VALUES (NULL, '2', '5', '8', '6:35:00', '6')";
			if(mysqli_query($link, $query)) {
				echo "<br>Ride tuple 11 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Ride VALUES (NULL, NULL, '3', '9', '2:00:00', NULL)";
			if(mysqli_query($link, $query)) {
				echo "<br>Ride tuple 12 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Ride VALUES (NULL, NULL, '2', '6', '1:20:00', NULL)";
			if(mysqli_query($link, $query)) {
				echo "<br>Ride tuple 13 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			//Single-ride table
			$query = "INSERT INTO Single_ride VALUES ('1', '2016-12-05')";
			if(mysqli_query($link, $query)) {
				echo "<br>Single-ride tuple 1 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Single_ride VALUES ('4', '2016-12-22')";
			if(mysqli_query($link, $query)) {
				echo "<br>Single-ride tuple 2 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Single_ride VALUES ('9', '2017-01-31')";
			if(mysqli_query($link, $query)) {
				echo "<br>Single-ride tuple 3 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Single_ride VALUES ('8', '2016-11-30')";
			if(mysqli_query($link, $query)) {
				echo "<br>Single-ride tuple 4 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			//Reoccurring ride table
			$query = "INSERT INTO Reoccurring_ride VALUES ('2', 'Every Tuesday')";
			if(mysqli_query($link, $query)) {
				echo "<br>Reoccurring ride tuple 1 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Reoccurring_ride VALUES ('6', 'Every 4th and 7th of the month')";
			if(mysqli_query($link, $query)) {
				echo "<br>Reoccurring ride tuple 2 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Reoccurring_ride VALUES ('7', 'Wednesdays and Fridays')";
			if(mysqli_query($link, $query)) {
				echo "<br>Reoccurring ride tuple 3 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			$query = "INSERT INTO Reoccurring_ride VALUES ('10', 'On the 21st of the month')";
			if(mysqli_query($link, $query)) {
				echo "<br>Reoccurring ride tuple 4 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			//Special trip table
			$query = "INSERT INTO Special_trip VALUES ('3', 'Trip to a hospital in range, as needed after given time of day.','12Km')";
			if(mysqli_query($link, $query)) {
				echo "<br>Special trip tuple 1 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Special_trip VALUES ('5', 'Food delivery in within range, before given time of day.','15Km')";
			if(mysqli_query($link, $query)) {
				echo "<br>Special trip tuple 2 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Special_trip VALUES ('11', 'Grocery store trip for anyone with a disability','30Km')";
			if(mysqli_query($link, $query)) {
				echo "<br>Special trip tuple 3 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			//Riding in table
			$query = "INSERT INTO Riding_in VALUES (NULL, '2', '3')";
			if(mysqli_query($link, $query)) {
				echo "<br>Riding in tuple 1 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Riding_in VALUES (NULL, '4', '5')";
			if(mysqli_query($link, $query)) {
				echo "<br>Riding in tuple 2 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Riding_in VALUES (NULL, '5', '10')";
			if(mysqli_query($link, $query)) {
				echo "<br>Riding in tuple 3 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Riding_in VALUES (NULL, '7', '5')";
			if(mysqli_query($link, $query)) {
				echo "<br>Riding in tuple 4 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Riding_in VALUES (NULL, '4', '6')";
			if(mysqli_query($link, $query)) {
				echo "<br>Riding in tuple 5 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Riding_in VALUES (NULL, '9', '7')";
			if(mysqli_query($link, $query)) {
				echo "<br>Riding in tuple 6 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			//Request table
			$query = "INSERT INTO Request VALUES (NULL, '12', '3', 'No driver', '2016-09-22')";
			if(mysqli_query($link, $query)) {
				echo "<br>Request tuple 1 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
			
			$query = "INSERT INTO Request VALUES (NULL, '13', '6', 'No driver', '2016-11-12')";
			if(mysqli_query($link, $query)) {
				echo "<br>Request tuple 2 created successfully<br>";
			} else {
				echo "<br>Error creating tuple: " . mysqli_error($link) . "<br>";
			}
		?>
	</body>
</html>