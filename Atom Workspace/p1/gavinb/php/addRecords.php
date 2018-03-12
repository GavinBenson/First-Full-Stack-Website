<?php
		include 'include/DBconnect_4parm.php';
		
		echo "<br><hr><br>";
		
		$fname = $_POST["firstname"];
		echo "First name: " . "$fname" . "<br>";
		
		$lname = $_POST["lastname"];
		echo "Last name: " . "$lname" . "<br>";
		
		$email = $_POST["email"];
		echo "Email: " . "$email" . "<br>";
		
		echo "<br><hr><br>";
		
		$sql = "INSERT INTO MyGuests (firstname, lastname, email)
		VALUES ('$fname', '$lname', '$email')";
		
		if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		echo "<br>";
		
		echo "<a href='../index.php'>Return</a>";
		
		include 'include/DBclose.php';
