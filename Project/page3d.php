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
$positions = $_POST['positions'];
$sql = "SELECT C.candidate_name, P.party_name, H.position_title FROM candidate AS C, party AS P, position AS H WHERE H.position_id=C.position_id AND P.party_id=C.party_id AND C.position_id='$positions'";
$result = $conn->query($sql);

echo "<fieldset style=margin:50;>";
echo "<h2>Candidate Positions</h2>";
echo "<table border='1'>
<tr>
<th>Candidate Name</th>
<th>Party Name</th>
<th>Position</th>
</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<tr>";
		echo "<td>" . $row["candidate_name"]."</td>";
		echo "<td>" . $row["party_name"]."</td>";
		echo "<td>" . $row["position_title"]."</td>";
		echo "</tr>";
		
		
    }
} else {
    echo "0 results";
}
echo "</table>";

echo "</fieldset>";

?>