<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->

<html>
	<head>
		<title>Create Tables</title>
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
			
			//Create tables
			$query = "CREATE TABLE Member(".
						"id INT AUTO_INCREMENT,".
						"username VARCHAR(20) NOT NULL,".
						"firstname VARCHAR(20) NOT NULL,".
						"lastname VARCHAR(25) NOT NULL,".
						"password VARCHAR(20) NOT NULL,".
						"license_number VARCHAR(20),".
						"email VARCHAR(30) NOT NULL,".
						"date_of_birth DATE,".
						"address VARCHAR(40),".
						"driver_or_rider VARCHAR(10),".
						"member_status VARCHAR(10) DEFAULT 'inactive',".
						"privacy_setting VARCHAR(15) DEFAULT 'Open',".
						"retainer DECIMAL(4,2) DEFAULT '00.00',".
						"UNIQUE(license_number, email),".
						"PRIMARY KEY (id))";
			if(mysqli_query($link, $query)) {
				echo "<br>Table Member created successfully<br>";
			} else {
				echo "<br>Error creating table: " . mysqli_error($link) . "<br>";
			}
			
			$query = 'CREATE TABLE Car('.
						'id INT AUTO_INCREMENT,'.
						'member_id INT,'.
						'license_plate VARCHAR(10) NOT NULL,'.
						'year YEAR,'.
						'type VARCHAR(15),'.
						'number_of_seats SMALLINT NOT NULL,'.
						'insurance_policy VARCHAR(20),'.
						'UNIQUE(license_plate, insurance_policy),'.
						'PRIMARY KEY (id),'.
						'FOREIGN KEY (member_id) REFERENCES Member(id))';
			if(mysqli_query($link, $query)) {
				echo "<br>Table Car created successfully<br>";
			} else {
				echo "<br>Error creating table: " . mysqli_error($link) . "<br>";
			}
			
			$query = 'CREATE TABLE Location('.
						'id INT AUTO_INCREMENT,'.
						'city VARCHAR(20) NOT NULL,'.
						'province VARCHAR(20) NOT NULL,'.
						'postal_code VARCHAR(15) NOT NULL,'.
						'street_number VARCHAR(40),'.
						'PRIMARY KEY (id))';
			if(mysqli_query($link, $query)) {
				echo "<br>Table Location created successfully<br>";
			} else {
				echo "<br>Error creating table: " . mysqli_error($link) . "<br>";
			}
			
			$query = 'CREATE TABLE Ride('.
						'id INT AUTO_INCREMENT,'.
						'member_id INT,'.
						'departure_location INT,'.
						'destination_location INT,'.
						'time_of_departure TIME,'.
						'seats_available SMALLINT,'.
						'PRIMARY KEY (id),'.
						'FOREIGN KEY (member_id) REFERENCES Member(id),'.
						'FOREIGN KEY (departure_location) REFERENCES Location(id),'.
						'FOREIGN KEY (destination_location) REFERENCES Location(id))';
			if(mysqli_query($link, $query)) {
				echo "<br>Table Ride created successfully<br>";
			} else {
				echo "<br>Error creating table: " . mysqli_error($link) . "<br>";
			}
			
			$query = 'CREATE TABLE Single_ride('.
						'ride_id INT,'.
						'date_of_departure DATE,'.
						'PRIMARY KEY (ride_id),'.
						'FOREIGN KEY (ride_id) REFERENCES Ride(id))';
			if(mysqli_query($link, $query)) {
				echo "<br>Table Single_ride created successfully<br>";
			} else {
				echo "<br>Error creating table: " . mysqli_error($link) . "<br>";
			}
			
			$query = 'CREATE TABLE Reoccurring_ride('.
						'ride_id INT,'.
						'frequency VARCHAR(30),'.
						'PRIMARY KEY (ride_id),'.
						'FOREIGN KEY (ride_id) REFERENCES Ride(id))';
			if(mysqli_query($link, $query)) {
				echo "<br>Table Reoccurring_ride created successfully<br>";
			} else {
				echo "<br>Error creating table: " . mysqli_error($link) . "<br>";
			}
			
			$query = 'CREATE TABLE Special_trip('.
						'ride_id INT,'.
						'description VARCHAR(100),'.
						'max_distance VARCHAR(15),'.
						'PRIMARY KEY (ride_id),'.
						'FOREIGN KEY (ride_id) REFERENCES Ride(id))';
			if(mysqli_query($link, $query)) {
				echo "<br>Table Special_trip created successfully<br>";
			} else {
				echo "<br>Error creating table: " . mysqli_error($link) . "<br>";
			}
			
			$query = 'CREATE TABLE Rating('.
						'id INT AUTO_INCREMENT,'.
						'member_id INT,'.
						'number_of_stars SMALLINT CHECK(number_of_stars IN (1,2,3,4,5)),'.
						'complaint VARCHAR(100),'.
						'PRIMARY KEY (id),'.
						'FOREIGN KEY (member_id) REFERENCES Member(id))';
			if(mysqli_query($link, $query)) {
				echo "<br>Table Rating created successfully<br>";
			} else {
				echo "<br>Error creating table: " . mysqli_error($link) . "<br>";
			}
			
			$query = 'CREATE TABLE Request('.
						'id INT AUTO_INCREMENT,'.
						'ride_id INT,'.
						'requester_id INT,'.
						'request_status VARCHAR(20),'.
						'date_of_request DATE,'.
						'PRIMARY KEY (id),'.
						'FOREIGN KEY (ride_id) REFERENCES Ride(id),'.
						'FOREIGN KEY (requester_id) REFERENCES Member(id))';
			if(mysqli_query($link, $query)) {
				echo "<br>Table Request created successfully<br>";
			} else {
				echo "<br>Error creating table: " . mysqli_error($link) . "<br>";
			}
			
			$query = 'CREATE TABLE Riding_in('.
						'id INT AUTO_INCREMENT,'.
						'ride_id INT,'.
						'member_id INT,'.
						'PRIMARY KEY (id),'.
						'FOREIGN KEY (ride_id) REFERENCES Ride(id),'.
						'FOREIGN KEY (member_id) REFERENCES Member(id))';
			if(mysqli_query($link, $query)) {
				echo "<br>Table Request created successfully<br>";
			} else {
				echo "<br>Error creating table: " . mysqli_error($link) . "<br>";
			}
			
			mysqli_close($link);
		?>
	</body>
</html>
