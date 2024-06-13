<?php include_once 'dbconfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AutoWarella - De beste autowebshop van Nederland!</title>
   <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="css/footer.css">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

   <!-- Optioneel: Bootstrap-icons CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="img/logo2.jpg" class="brand-logo" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="auto.php">Auto's</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="elektrisch.php">Elektrische auto's</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hybrid.php">Hybride auto's</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="accessories.php">Accessoires</a>
            </li>
          
          </ul>
          <ul class="navbar-nav">
            <!-- Check if the user is logged in -->
            <?php
            session_start();
            if(isset($_SESSION['username'])) {
                // Convert username to uppercase
                $uppercaseUsername = strtoupper($_SESSION['username']);
                echo '<li class="nav-item">
                        <span class="nav-link" id="nav-username">WELKOM ' . $uppercaseUsername . '</span>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="logout.php">Uitloggen</a>
                      </li>';
            } else {
                // If user is not logged in, show login and register links
                echo '<li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="register.html">Account maken</a>
                      </li>';
            }
            ?>
            
          </ul>
        </div>
      </div>
    </nav>
    
   <header class="hero-section5">
   </header>
   
   <div class="container mt-5">
      <h1>Vragen over deze auto?</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <div class="form-group">
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>
         </div>
         <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
         </div>
         <div class="form-group">
            <label for="subject">Onderwerp:</label>
            <input type="text" id="subject" name="subject" required>
         </div>
         <div class="form-group">
            <label for="message">Bericht:</label>
            <textarea id="message" name="message" required></textarea>
         </div>
         <button type="submit" class="btn btn-primary">Verzenden</button>
      </form>

      <?php
      // Controleer of het formulier is ingediend
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Inclusief databaseverbinding
          include_once 'dbconfig.php';

          // Ontvang en beveilig de ingediende gegevens
          $name = htmlspecialchars($_POST['name']);
          $email = htmlspecialchars($_POST['email']);
          $subject = htmlspecialchars($_POST['subject']);
          $message = htmlspecialchars($_POST['message']);

          // Voorbereid SQL-statement om gegevens in te voegen in de tabel contact_messages
          $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)";

          // Voorbereid de SQL-query
          $stmt = $pdo->prepare($sql);

          // Voer de query uit en voeg de gegevens in
          if ($stmt->execute([$name, $email, $subject, $message])) {
              // Succesvol ingevoegd
              echo "<p>Bericht succesvol verzonden. We zullen zo spoedig mogelijk contact met u opnemen!</p>";
          } else {
              // Fout bij invoegen
              echo "<p>Er is een probleem opgetreden bij het verzenden van uw bericht. Probeer het later opnieuw.</p>";
          }
      }
      ?>
   </div>

   <!-- Voeg hier de JavaScript- en Bootstrap JavaScript-links toe indien nodig -->

</body>
</html>
