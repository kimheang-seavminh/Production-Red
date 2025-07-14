<?php
    // Begin Vault (this is in a vault, not actually hard-coded)
    $host="192.168.20.13";
    $username="root";
    $password="382096a3207028829496cb77202a76d1e76549e0";
    $dbname="mydb";
    $port="31476";
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
