<?php
$servername = "192.168.20.12";
$port = "32364";
$username = "kimheang";
$password = "Seavminh@2024";
$database = "dms_db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password, $username, $database, $port);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>



<?php
$host = '192.168.20.12'; // your DB host
$db   = 'dms_db';      // your DB name
$user = 'kimheang';    // your DB username
$pass = 'Seavminh@2024'; // your DB password
$port = '32364';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

try {
    $pdo = new PDO($dsn, $user, $pass, $port);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
