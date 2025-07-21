<?php
$servername = getenv('192.168.20.12');
$username = getenv('mydb');
$password = getenv('Seavminh@2024');
$dbname = getenv('kimheang');
$portname = getenv('32364');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $portname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to MySQL successfully from PHP app!";

// Example: Display data from a table (if you created one in Lab 5.3)
// $sql = "SELECT id, name FROM my_table";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

$conn->close();
?>
