<?php
$servername = "192.168.20.12";
$port = "32364";
$username = "kimheang";
$password = "Seavminh@2024";
$database = "dms_db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=dms_db", $username, $password, $username, $database, $port);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
