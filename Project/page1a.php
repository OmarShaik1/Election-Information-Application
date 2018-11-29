<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="voting";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Pull selected items form previous page
$ssn = $_POST['ssn'];
$sql = "SELECT federal_id, provincial_id, municipal_id FROM elector WHERE ssn='$ssn'";
$result = $conn->query($sql);

echo "<fieldset style=margin:50;>";
echo "<h2>My Region's ID's</h2>";
echo "<table border='1'>
<tr>
<th>Government Level</th>
<th>ID Number</th>
</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<tr>";
		echo "<td>Federal</td>";
		echo "<td>" . $row["federal_id"]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Provincial</td>";
		echo "<td>" . $row["provincial_id"]."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Municipal</td>";
		echo "<td>" . $row["municipal_id"]."</td>";
		echo "</tr>";
		
    }
} else {
    echo "0 results";
}
echo "</table>";

echo "</fieldset>";

?>
<html>
	<body>
		<div>
			<div>
				<br><br>
				<fieldset style="margin:50;">

				<h2>View Candidates in My Region</h2>

				<form action="page1b.php" method="POST">
					<p>Region Number:</p>
					<input type = "text" name="region">
					<input type="submit" value="Submit" />
					</fieldset>
				</form>
			</div>
		</div>
	</body>
</html>