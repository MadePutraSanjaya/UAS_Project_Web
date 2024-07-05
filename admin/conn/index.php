<?php

$host = 'localhost';
$dbname = 'uas'; 
$username = 'root';
$password = 'root'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // var_dump($pdo);
die();

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>
