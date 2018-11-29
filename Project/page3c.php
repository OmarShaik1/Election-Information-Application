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

//Static Query
$year = $_POST['year'];
$sql = "SELECT COUNT(DISTINCT V.ssn_voter) as total, COUNT(DISTINCT E.ssn) as total2 FROM vote AS V, elector AS E WHERE V.year='$year'";
$result = $conn->query($sql);

echo "<fieldset style=margin:50;>";
echo "<h2>Vote Cast Information</h2>";
echo "<table border='1'>
<tr>
<th>Number of People who Voted</th>
<th>Number of People who can Vote</th>
</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<tr>";
		echo "<td>" . $row["total"]."</td>";
		echo "<td>" . $row["total2"]."</td>";
		echo "</tr>";
		
		
    }
} else {
    echo "0 results";
}
echo "</table>";

echo "</fieldset>";

?>