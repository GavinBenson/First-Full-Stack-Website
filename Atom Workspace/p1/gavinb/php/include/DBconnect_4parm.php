<?php
		/*Dev Version*/		
		$servername = "localhost";
		$username = "root";
		$password = "toor";
		$dbname = "DBa1";
		
		/*Ops Version*/
		
		/*
		 *$servername = "DBa1root.db.9259277.49b.hostedresource.net";
		 *$username = "DBa1root";
		 *$password = "DBa1@toor";
		 *$dbname = "DBa1root";
		 * 
		 */
		

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		echo "<br>";
		if ($conn->connect_error) {
		    die("Connection failed(4 parm): " . $conn->connect_error);
		}
		echo "<br>";