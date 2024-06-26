<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AutoWarella - De beste autowebshop van Nederland!</title>
   <link rel="stylesheet" href="css/home.css">
   <link rel="stylesheet" href="css/footer.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Optioneel: Bootstrap-icons CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<!-- Bootstrap JavaScript (optioneel, als je JavaScript-functionaliteit van Bootstrap wilt gebruiken) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
            <li class="nav-item">
              <a class="nav-link" href="login.html">login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.html">Account maken</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   <!-- Header sectie -->
   <header class="hero-section10">
      <div class="content">
        <p class="sub-heading">Alle accessories!</p>
      </div>
   </header>

   <section class="product">
      <h2 class="product-category">Alle accessories auto's</h2>
      <div class="product-container">
         <div class="product-card">
            <div class="product-image">
               <a href="#" class="product-link">
                  <img src="img/Vantrue.png" class="product-thumb" alt="">
               </a>
               <!-- "Add to Cart" button -->
               <button class="card-btn add-to-cart-btn" data-name="Vantrue N2 Pro" data-price="40">Toevoegen aan winkelwagen</button>
            </div>
            <div class="product-info">
               <h2 class="product-brand">Vantrue</h2>
               <p class="product-short-des">Vantrue N2 Pros: Auto dashcam</p>
               <span class="price">€40 </span>
            </div>
         </div>
         <div class="product-card">
            <div class="product-image">
               <a href="#" class="product-link">
                  <img src="img/Nextbase 522GW.jpg" class="product-thumb" alt="">
               </a>
               <!-- "Add to Cart" button -->
               <button class="card-btn add-to-cart-btn" data-name="Nextbase 522GW" data-price="30">Toevoegen aan winkelwagen</button>
            </div>
            <div class="product-info">
               <h2 class="product-brand">Nextbase</h2>
               <p class="product-short-des">Nextbase 522GW:: Auto dashcam</p>
               <span class="price">€30</span>
            </div>
         </div>
      </div>
   </section>

   <script src="script.js"></script>
</body>
</html>
