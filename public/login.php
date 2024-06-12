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
    $password = $_POST['password'];

    // Bereid de SQL-instructie voor om de gebruiker op te halen
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);

    // Voer de instructie uit
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            echo "Inloggen succesvol!";
            // Hier kun je de gebruiker doorverwijzen naar een andere pagina na succesvol inloggen
        } else {
            echo "Ongeldige gebruikersnaam of wachtwoord.";
        }
    } else {
        echo "Ongeldige gebruikersnaam of wachtwoord.";
    }

    // Sluit de instructie en de verbinding
    $stmt->close();
    $conn->close();
}
?>