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
$sql = "SELECT COUNT(V.ssn_voter) as total, P.party_name, C.candidate_name FROM party AS P, vote AS V LEFT JOIN candidate AS C ON V.ssn_candidate=C.ssn_candidate WHERE V.position_id=1 AND P.party_id = C.party_id";
$result = $conn->query($sql);

echo "<fieldset style=margin:50;>";
echo "<h2>Prime Minister Race</h2>";
echo "<table border='1'>
<tr>
<th>Number of Votes</th>
<th>Party Name</th>
<th>Candidate Name</th>
</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<tr>";
		echo "<td>" . $row["total"]."</td>";
		echo "<td>" . $row["party_name"]."</td>";
		echo "<td>" . $row["candidate_name"]."</td>";
		echo "</tr>";
		
		
    }
} else {
    echo "0 results";
}
echo "</table>";

echo "</fieldset>";

?>