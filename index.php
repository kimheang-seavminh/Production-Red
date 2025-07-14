<?php
    // Begin Vault (this is in a vault, not actually hard-coded)
    $host="";
    $username="";
    $password="";
    $dbname="mydb";
    $port="";
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
