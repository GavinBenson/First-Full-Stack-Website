<?php

		/*Dev Version*/
		$servername = "localhost";
		$username = "root";
		$password = "toor";
		
		
		/*Ops Version*/
		/*
		 *$servername = "DBa1root.db.9259277.49b.hostedresource.net";
		 *$username = "DBa1root";
		 *$password = "DBa1@toor";
		 *$dbname = "DBa1root";
		 * 
		 */

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		echo "<br>";
		if ($conn->connect_error) {
		    die("Connection failed(3 parm): " . $conn->connect_error);
		} 
		echo "Connected successfully using 3 parm method<br>";