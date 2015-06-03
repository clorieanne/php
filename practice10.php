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

			// limit
			$sql = "SELECT * FROM MyGuests LIMIT 10 OFFSET 7";

			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
			    }
			} else {
			    echo "0 results";
			}
			$conn->close();
		?>
	</body>
</html>