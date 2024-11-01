<?php
$db_host = 'localhost';
$db_name = 'db_toko';
$db_user = 'root';
$db_pass = '';

try {
    $config = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $config->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
    die();
}
?>
