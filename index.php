<?php
$servername = "192.168.20.13";
$username = "niph";
$password = "a0b310084c8ab413ace944be94008be5a0704d18";
 $port="3306";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
