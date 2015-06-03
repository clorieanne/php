<!DOCTYPE html>
<html>
	<body>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "mysql";
			$dbname = "myDB";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 

			// update record
			$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

			if ($conn->query($sql) === TRUE) {
			    echo "Record updated successfully";
			} else {
			    echo "Error updating record: " . $conn->error;
			}
		?>
	</body>
</html>