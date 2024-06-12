<?php
// dashboard.php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

echo "Welkom, " . $_SESSION['username'] . "! Dit is je dashboard.";
?>

<a href="logout.php">Uitloggen</a>
