<?php
    // Begin Vault (this is in a vault, not actually hard-coded)
    $host="192.168.20.13";
    $username="niph";
    $password="a0b310084c8ab413ace944be94008be5a0704d18";
    $dbname="mydb";
    $port="3306";
    // End Vault

    try {
        $dbh = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "I am connected.<br/>";

        // ... continue with your code

        // PDO closes connection at end of script
    } catch (PDOException $e) {
        echo 'PDO Exception: ' . $e->getMessage();
        exit();
    }
?>
