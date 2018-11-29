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
$sql = "SELECT COUNT(ssn_voter) as total FROM vote WHERE ssn_candidate = (SELECT ssn_candidate FROM candidate WHERE ssn_candidate = '$ssn')";
$result = $conn->query($sql);

$data=mysqli_fetch_assoc($result);

echo "<table border='1'>
<tr>
<th>Number of Votes</th>
</tr>";

echo "<td>".$data['total']."</td>";



?>