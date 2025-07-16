<?php
    // Begin Vault (this is in a vault, not actually hard-coded)
    $db_server="192.168.20.12";
    $db_user="kimheang";
    $db_pass="Seavminh@2024";
    $db_name="dms_db";
    //$port="31476";
    $conn = "";
    // End Vault
try{ 
    $conn = mysql_connect($db_server,
                        $db_user,
                        $db_pass,
                        $db_name,
                        $port); }
    catch(mysql_sql_excption){
        echo"Not Connect!";
    }
    if($conn){
        echo"Connected!";
}
    ?>

   // try {
   //     $dbh = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
   //     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //     echo "I am connected.<br/>";

        // ... continue with your code

        // PDO closes connection at end of script
  //  } catch (PDOException $e) {
   //     echo 'PDO Exception: ' . $e->getMessage();
  //      exit();
  //  }
