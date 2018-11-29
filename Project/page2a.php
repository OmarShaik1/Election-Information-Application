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
$party_name = $_POST['partyname'];
$sql = "SELECT COUNT(V.ssn_voter) as total FROM vote AS V LEFT JOIN candidate AS C ON V.ssn_candidate=C.ssn_candidate WHERE C.party_id='$party_name'";
$result = $conn->query($sql);

$data=mysqli_fetch_assoc($result);

echo "<table border='1'>
<tr>
<th>Number of Votes</th>
</tr>";

echo "<td>".$data['total']."</td>";



?>