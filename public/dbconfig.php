<?php
// Database configuratiegegevens
$host = 'localhost';
$db_name = 'autowebshop';
$username = 'root';
$password = '';


// Verbinding maken met de database met PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    // Stel de PDO error mode in op exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Verbindingsfout: " . $e->getMessage());
}
