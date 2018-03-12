<?php
		
		include 'include/DBconnect_4parm.php';
		
		// sql to create table
		$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
		id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		reg_date TIMESTAMP
		)";

		if ($conn->query($sql) === TRUE) {
    		echo "Table MyGuests created successfully";
		} else {
    		echo "Error creating table: " . $conn->error;
		}
		echo "<br>";
		
		//include 'include/DBinsert.php';
		
		include 'include/DBclose.php';
