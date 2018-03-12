<?php
		include 'include/DBconnect_3parm.php';
		
		
		/*
		$sql = "DROP DATABASE IF EXISTS DBa1";
		if ($conn->query($sql) === TRUE) {
    		echo "Database dropped successfully";
		} else {
    		echo "Error dropping database: " . $conn->error;
		}
		echo "<br>";
		*/
		// Create database
		$sql = "CREATE DATABASE IF NOT EXISTS DBa1";
		if ($conn->query($sql) === TRUE) {
    		echo "Database created successfully";
		} else {
    		echo "Error creating database: " . $conn->error;
		}
		echo "<br>";
		
		include 'include/DBclose.php';
