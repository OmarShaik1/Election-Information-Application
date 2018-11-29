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
$sql = "SELECT DISTINCT C.ssn_candidate, C.candidate_name FROM candidate AS C RIGHT JOIN elector AS E ON E.ssn=C.ssn_candidate RIGHT JOIN vote AS V ON V.ssn_voter=E.ssn WHERE(C.ssn_candidate IS NOT NULL AND C.candidate_name IS NOT NULL)";
$result = $conn->query($sql);

echo "<fieldset style=margin:50;>";
echo "<h2>Candidates who Voted in Election</h2>";
echo "<table border='1'>
<tr>
<th>Candidate SSN</th>
<th>Candidate Name</th>
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