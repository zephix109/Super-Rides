<!--Andrew Laramee, ID:27050925 -->
<!--Comp 353, Section F, Professor Bipin C Desai -->
<html>
	<head>
		<title>Create Database</title>
		<meta name="id" content="27050925">
	</head>
	<body>
		<?php
			include ("/../DBInfo.php");
			
			//Check connection
			$link = mysqli_connect($dbServer, $dbUser, $dbPass);
			if(mysqli_connect_errno()){
				printf("Connect failed: %s<br>", mysqli_connect_errno());
				exit();
			}
			echo "Connected successfully<br>";
			
			//Create database
			$query = 'CREATE DATABASE superdb';
			if(mysqli_query($link, $query)){
				echo "Database superdb created successfully<br>";
			} else {
				echo "Error creating database: " . mysqli_error($link);
			}
			
			mysqli_close($link);
		?>
	</body>
</html>