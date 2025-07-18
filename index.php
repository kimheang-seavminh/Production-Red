
<?php
$host = '192.168.20.12';
$db   = 'dms_db';
$user = 'kimheang';
$pass = 'Seavminh@2024';
$port = '32364';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
 you'd like help testing queries or setting up PHPUnit for database testing!
