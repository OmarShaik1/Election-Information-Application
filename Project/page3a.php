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
$sql = "SELECT candidate.ssn_candidate, candidate.candidate_name FROM candidate, vote WHERE vote.ssn_voter = vote.ssn_candidate AND vote.ssn_voter = candidate.ssn_candidate";
$result = $conn->query($sql);

echo "<fieldset style=margin:50;>";
echo "<h2>Candidates Who Voted for Themselves</h2>";
echo "<table border='1'>
<tr>
<th>SSN</th>
<th>Name</th>
</tr>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		echo "<tr>";
		echo "<td>" . $row["ssn_candidate"]."</td>";
		echo "<td>" . $row["candidate_name"]."</td>";
		echo "</tr>";
		
		
    }
} else {
    echo "0 results";
}
echo "</table>";

echo "</fieldset>";

?>