
<?php
$host = '192.168.20.12'; // or use the external IP if exposed via LoadBalancer
$port = '3306';
$username = 'kimheang'; // or your configured username
$password = 'Seavminh@2024'; // get from Kubernetes secret
$database = 'dms_db'; // or your specific database name

$conn = new mysqli($host, $username, $password, $database, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to MySQL!";
$conn->close();
?>
