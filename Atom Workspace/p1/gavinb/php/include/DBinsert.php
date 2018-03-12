<?php
		$sql = "INSERT INTO MyGuests (firstname, lastname, email)
		VALUES ('John', 'Doe', 'john@example.com')";

		if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		echo "<br>";
		
		$sql = "INSERT INTO MyGuests (firstname, lastname, email)
		VALUES ('Jane', 'Doe', 'jane@example.com');";
		$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
		VALUES ('Mary', 'Moe', 'mary@example.com');";
		$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
		VALUES ('Julie', 'Dooley', 'julie@example.com')";

		if ($conn->multi_query($sql) === TRUE) {
    		echo "New records created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		echo "<br>";