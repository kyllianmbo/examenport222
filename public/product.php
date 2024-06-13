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
   <style>
      .product-card {
         margin-bottom: 30px; /* Ruimte tussen de kaarten */
         display: flex;
         flex-direction: column;
         align-items: center;
         border: 1px solid #ddd; /* Voeg een rand toe aan de kaarten */
         border-radius: 10px;
         overflow: hidden;
         box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Voeg een schaduw toe */
      }
      .product-image {
         position: relative;
         width: 100%;
         height: 100px; /* Zorg ervoor dat alle afbeeldingen dezelfde hoogte hebben */
         overflow-y: scroll; /* Maak het scrollbaar */
         display: flex;
         justify-content: center;
         align-items: center;
      }
      .product-image img {
         width: 100%;
         height: auto; /* Zorg ervoor dat de hoogte automatisch wordt aangepast */
         object-fit: contain; /* Zorg ervoor dat de afbeelding volledig zichtbaar is binnen de container */
      }
      .product-info {
         padding: 15px;
         text-align: center;
         flex: 1;
      }
      .card-btn {
         margin-top: 10px;
         padding: 10px 20px;
         background-color: #007bff;
         color: white;
         border: none;
         border-radius: 5px;
         cursor: pointer;
         transition: background-color 0.3s ease;
      }
      .card-btn:hover {
         background-color: #0056b3;
      }
   </style>
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
            <li class="nav-item">
              <a class="nav-link" href="cart.php">Cart</a>
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

   <div class="container mt-5">
      <div id="product-container" class="row">
         <!-- Producten zullen hier worden ingeladen -->
         <div class="col-md-4">
            <div class="product-card">
               <div class="product-image">
                  <img src="img/product1.jpg" alt="Product 1" class="card-img-top">
               </div>
               <div class="product-info">
                  <h5 class="product-title">Product 1</h5>
                  <p class="product-description">Beschrijving van product 1.</p>
                  <button class="card-btn">Koop nu</button>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="product-card">
               <div class="product-image">
                  <img src="img/product2.jpg" alt="Product 2" class="card-img-top">
               </div>
               <div class="product-info">
                  <h5 class="product-title">Product 2</h5>
                  <p class="product-description">Beschrijving van product 2.</p>
                  <button class="card-btn">Koop nu</button>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="product-card">
               <div class="product-image">
                  <img src="img/product3.jpg" alt="Product 3" class="card-img-top">
               </div>
               <div class="product-info">
                  <h5 class="product-title">Product 3</h5>
                  <p class="product-description">Beschrijving van product 3.</p>
                  <button class="card-btn">Koop nu</button>
               </div>
            </div>
         </div>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="product.js"></script>
</body>
</html>
