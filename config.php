<?php
// Database configuration with ENV variables. Set default values as well 
$db_host = '34.154.92.33';
$db_name = 'image_catalog';
$db_user = 'appmod-phpapp-user';
$db_pass = 'pippo1234';
// Note getenv() is PHP 5.3 compatible
try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore di connessione: " . $e->getMessage());
}

session_start();
?>cloud