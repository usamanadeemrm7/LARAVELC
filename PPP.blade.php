<!DOCTYPE html>
<head>
	<H1>
		Hello!
	</H1>
<<?php  
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lara12";
$DB_CONNECTION="mysql";
$DB_HOST= "127.0.0.1";

$conn = new mysql($servername, $username, $password, $dbname,$DB_HOST,$DB_CONNECTION);

$sql = "SELECT Name FROM castvote where CNIC=?";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Dear " . $row["Name"]. "Your Vote has been casted!";
    }
} 
?>>

</html>