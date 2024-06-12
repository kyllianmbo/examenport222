<?php
// Database configuratie
$servername = "localhost";
$username = "root"; // Verander dit als je een andere gebruikersnaam hebt
$password = ""; // Verander dit als je een wachtwoord hebt ingesteld
$dbname = "autowebshop";

// Verbinding maken met de database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verkrijg de waarden uit het formulier
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Controleer of wachtwoorden overeenkomen
    if ($password != $confirm_password) {
        die("Wachtwoorden komen niet overeen.");
    }

    // Hash het wachtwoord
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Bereid de SQL-instructie voor om de gebruiker in te voegen
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    // Voer de instructie uit
    if ($stmt->execute()) {
        echo "Registratie succesvol!";
    } else {
        echo "Fout: " . $sql . "<br>" . $conn->error;
    }

    // Sluit de instructie en de verbinding
    $stmt->close();
    $conn->close();
}
?>
