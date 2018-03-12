<!DOCTYPE html>
<html>
	<head>
		<meta charset ="UTF-8" />
		
		<!-- CSS -->
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" type="text/css" href="css/form.css"/>
		
		<!-- JQ -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/forms.js"></script>
		
		<!-- Google Fonts -->
		
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
		
		<title>Gavin Benson</title>
		
	</head>
	<body>
		
		<!-- Sidebar -->
		<div class="w3-sidebar w3-bar-block w3-border-right w3-green " style="display:none" id="mySidebar">
  			<button onclick="w3_close()" class="w3-bar-item w3-large w3-green w3-hover-blue">Close &times;</button>
  			
  			
  			<a href="#" class="w3-bar-item w3-button w3-red w3-hover-blue">Operational Links</a>

			<!--<a href="http://www.westada.net/a1/gavinb" class="w3-bar-item w3-button w3-green w3-hover-blue">Me</a>-->
			<a href="http://www.westada.net/a1/jpm" class="w3-bar-item w3-button w3-hover-blue">Me</a>
			<a href="http://www.westada.net/a1/zacharys" class="w3-bar-item w3-button w3-green w3-hover-blue">Zachary S</a>

			<a href="http://www.westada.net/a1/bryanh" class="w3-bar-item w3-button w3-hover-blue">Bryan H</a>
			<a href="http://www.westada.net/a1/josephm" class="w3-bar-item w3-button w3-green w3-hover-blue">Joseph M</a>
			<a href="http://www.westada.net/a1/kenisons" class="w3-bar-item w3-button w3-hover-blue">Kenison S</a>
	
			<a href="http://www.westada.net/a1/chases" class="w3-bar-item w3-button w3-green w3-hover-blue">Chase S</a>
			<a href="http://www.westada.net/a1/davidb" class="w3-bar-item w3-button w3-hover-blue">David B</a>
			<a href="http://www.westada.net/a1/connorc" class="w3-bar-item w3-button w3-green w3-hover-blue">Connor C</a>

			<a href="http://www.westada.net/a1/peterc" class="w3-bar-item w3-button w3-hover-blue">Peter C</a>
			<a href="http://www.westada.net/a1/andrewh" class="w3-bar-item w3-button w3-green w3-hover-blue">Andrew H</a>

			<a href="http://www.westada.net/a1/jamesr" class="w3-bar-item w3-button w3-hover-blue">James R</a>
			<a href="http://www.westada.net/a1/alysec" class="w3-bar-item w3-button w3-green w3-hover-blue">Alyse C</a>
			<a href="http://www.westada.net/a1/hunterf" class="w3-bar-item w3-button w3-hover-blue">Hunter F</a>
			<a href="http://www.westada.net/a1/michaelc" class="w3-bar-item w3-button w3-green w3-hover-blue">Michael C</a>
		
			<a href="http://www.westada.net/a1/heathers" class="w3-bar-item w3-button w3-hover-blue">Heather S</a>
			<a href="http://www.westada.net/a1/briellel" class="w3-bar-item w3-button w3-green w3-hover-blue">Brielle L</a>
			<a href="http://www.westada.net/a1/tannerh" class="w3-bar-item w3-button w3-hover-blue">Tanner H</a>
			<a href="http://www.westada.net/a1/richardm" class="w3-bar-item w3-button w3-green w3-hover-blue">Richard M</a>
  			
  			
  			<a href="#" class="w3-bar-item w3-button w3-red w3-hover-blue">Development Links</a>
  			
  			<!--<a href="http://192.168.1.102/a1gavinb" class="w3-bar-item w3-button w3-green w3-hover-blue">Me</a>-->
  			<a href="http://192.168.1.103/a1jpm" class="w3-bar-item w3-button w3-hover-blue">JP</a>
  			<a href="http://192.168.1.104/a1zacharys" class="w3-bar-item w3-button w3-green w3-hover-blue">Zachary S</a>
  			
  			<a href="http://192.168.1.105/a1bryanh" class="w3-bar-item w3-button w3-hover-blue">Bryan H</a>
  			<a href="http://192.168.1.106/a1josephm" class="w3-bar-item w3-button w3-green w3-hover-blue">Joseph M</a>
  			<a href="http://192.168.1.107/a1kenisons" class="w3-bar-item w3-button w3-hover-blue">Kenison S</a>
  			
  			<a href="http://192.168.1.109/a1chases" class="w3-bar-item w3-button w3-green w3-hover-blue">Chase S</a>
  			<a href="http://192.168.1.110/a1davidb" class="w3-bar-item w3-button w3-hover-blue">David B</a>
  			<a href="http://192.168.1.111/a1connorc" class="w3-bar-item w3-button w3-green w3-hover-blue">Connor C</a>
  			
  			<a href="http://192.168.1.114/a1peterc" class="w3-bar-item w3-button w3-hover-blue">Peter C</a>
  			<a href="http://192.168.1.115/a1andrewh" class="w3-bar-item w3-button w3-green w3-hover-blue">Andrew H</a>
  			
  			<a href="http://192.168.1.117/a1jamesr" class="w3-bar-item w3-button w3-hover-blue">James R</a>
  			<a href="http://192.168.1.118/a1alysec" class="w3-bar-item w3-button w3-green w3-hover-blue">Alyse C</a>
  			<a href="http://192.168.1.119/a1hunterf" class="w3-bar-item w3-button w3-hover-blue">Hunter F</a>
  			<a href="http://192.168.1.120/a1michaelc" class="w3-bar-item w3-button w3-green w3-hover-blue">Michael C</a>
  			
  			<a href="http://192.168.1.121/a1heathers" class="w3-bar-item w3-button w3-hover-blue">Heather S</a>
  			<a href="http://192.168.1.122/a1briellel" class="w3-bar-item w3-button w3-green w3-hover-blue">Brielle L</a>
  			<a href="http://192.168.1.123/a1tannerh" class="w3-bar-item w3-button w3-hover-blue">Tanner H</a>
  			<a href="http://192.168.1.124/a1richardm" class="w3-bar-item w3-button w3-green w3-hover-blue">Richard M</a>
		</div>

		<!-- Page Content -->
		<div id="gay2" class="w3-red">
  			<button id="gay" class="w3-button w3-hover-red w3-xlarge" onclick="w3_open()">Џ</button>
  			<div class="w3-container">
    			<h1>MySql-PHP First Fullstack website</h1>
				<h2>Created by Gavin B. / November 17 2017</h2>
  			</div>
		</div>
		
		
		
		<br>
		<!--<img id="hiddenPic" src="images/bepis.jpg" alt="bepis" />-->

		
		<!-- Below Dev only, must deactivate for Ops!! -->
		<!--
		<?php
			include 'php/DBcreateDatabase.php';
			include 'php/DBmakeTable.php';
		?>
		-->
		<!-- Above Dev only, must deactivate for Ops!! -->
		<hr />
		<h1>- Form Creation -</h1>
		<form id="NameEmailForm" action="php/addRecords.php" method="post">
			First Name:
			<input type="text" name="firstname">
			<br >
			Last Name:
			<input type="text" name="lastname">
			<br>
			E-mail:
			<input type="text" name="email">
			<br>
			<input type="submit">
			<input type="button" onclick="clearForm()" value="Clear Form"
		</form>
		
		<hr>
		
		<h1>- Retrieve Data From DB -</h1>
		
		
		
		<?php
		include 'php/DBechoshow.php';
		?>
		
		<hr>
		
		<h1>- View Records -</h1>

		<p>
			<b>View All</b> | <a href="internView/view-paginated.php">View Paginated</a>
		</p>

		<?php
		// connect to the database
		include ('internView/connect-db.php');

		// get the records from the database
		if ($result = $mysqli -> query("SELECT * FROM MyGuests ORDER BY id")) {
			// display records if there are records to display
			if ($result -> num_rows > 0) {
				// display records in a table
				echo "<table border='1' cellpadding='10'>";

				// set table headers
				echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>E-mail</th><th></th><th></th></tr>";

				while ($row = $result -> fetch_object()) {
					// set up a row for each record
					echo "<tr>";
					echo "<td>" . $row -> id . "</td>";
					echo "<td>" . $row -> firstname . "</td>";
					echo "<td>" . $row -> lastname . "</td>";
					echo "<td>" . $row -> email . "</td>";
					echo "<td><a href='internView/records.php?id=" . $row -> id . "'>Edit</a></td>";
					echo "<td><a href='internView/delete.php?id=" . $row -> id . "'>Delete</a></td>";
					echo "</tr>";
				}

				echo "</table>";
			}
			// if there are no records in the database, display an alert message
			else {
				echo "No results to display!";
			}
		}
		// show an error if there is an issue with the database query
		else {
			echo "Error: " . $mysqli -> error;
		}

		// close database connection
		$mysqli -> close();
		?>

		<a href="internView/records.php">Add New Record</a>
		
		
		<hr>
		
		<script>
			function clearForm() {
				document.getElementById("NameEmailForm").reset();
			}
		</script>
		
		<script>
			function w3_open() {
    			document.getElementById("mySidebar").style.display = "block";
			}
			function w3_close() {
    			document.getElementById("mySidebar").style.display = "none";
			}
		</script>
		
	</body>
</html>