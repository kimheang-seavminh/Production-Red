<?php
$servername = "192.168.20.13";
$username = "username";
$password = "password";
 $port="31476";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
