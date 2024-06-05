<?php
$servername = 'br-asc-web815.main-hosting.eu';
$username = 'u455152201_cdevent';
$password = 'Vg14072904';
$database = 'u455152201_cdevent';

// $servername = 'mysql.hostinger.com.br';
// $username = 'u455152201_nossosite';
// $password = 'fNS2VXU6CF:1';
// $database = 'u455152201_nossosite';

try {
    $connect = new PDO("mysql:host=$servername; dbname=$database", $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // echo "database connect";
} catch (PDOException $erro) {
    echo "connection failed: " . $erro->getMessage();
}
?>
