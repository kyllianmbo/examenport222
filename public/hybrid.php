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
  
   <header class="hero-section4">
      <div class="content">
        
          <p class="sub-heading">Alle  hybrid auto's!</p> 
      </div>
   </header>

   



            <!-- kaart hybrid -->
 <section class="product">
   <h2 class="product-category">Alle Hybrid auto's</h2>
   <div class="product-container">
      <div class="product-card">
         <div class="product-image">
            <!-- <span class="discount-tag">10% off</span> -->
            <a href="product.php?product=Toyota Prius" class="product-link">
            <img src="img/toyota1.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">Toyota</h2>
            <p class="product-short-des">Toyota Prius: Hybride hatchback</p>
            <span class="price">€15.000 </span>


         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <!-- <span class="discount-tag">10% off</span> -->
            <a href="product.php?product=Lexus UX 250h" class="product-link">
            <img src="img/lexus1.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">Lexus</h2>
            <p class="product-short-des">Lexus UX 250h: Hybride compacte SUV.</p>
            <span class="price">€30.000 </span>


         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <!-- <span class="discount-tag">10% off</span> -->
            <a href="product.php?product=Honda Accord Hybrid" class="product-link">
            <img src="img/honda1.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">Honda</h2>
            <p class="product-short-des">Honda Accord Hybrid: Hybride sedan met luxe kenmerken</p>
            <span class="price">€25.000 </span>

<!-- 
         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <span class="discount-tag">10% off</span>
            <img src="img/kaart1.png" class="product-thumb" alt="">
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">brand</h2>
            <p class="product-short-des">Tesla Model 3: Elektrisch, krachtig, geavanceerd, stijlvol.</p>
            <span class="price">€45.000 </span><span class="actual-price">€50.000</span>


         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <span class="discount-tag">10% off</span>
            <img src="img/kaart1.png" class="product-thumb" alt="">
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">brand</h2>
            <p class="product-short-des">Tesla Model 3: Elektrisch, krachtig, geavanceerd, stijlvol.</p>
            <span class="price">€45.000 </span><span class="actual-price">€50.000</span>


         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <span class="discount-tag">10% off</span>
            <img src="img/kaart1.png" class="product-thumb" alt="">
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">brand</h2>
            <p class="product-short-des">Tesla Model 3: Elektrisch, krachtig, geavanceerd, stijlvol.</p>
            <span class="price">€45.000 </span><span class="actual-price">€50.000</span>


         </div> -->


         






<br><br>
         


         
      </div>




         </div>
      </div>
      
   </div>
 </section>
 <footer>
   
        <div class="footer-ul-container">
            
        </div>
    </div>
    <p class="footer-title">over bedrijf</p>
    <p class="info">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat tempore ad suscipit, eos eius quisquam sed optio nisi quaerat fugiat ratione et vero maxime praesentium, architecto minima reiciendis iste quo deserunt assumenda alias ducimus. Ullam odit maxime id voluptates rerum tenetur corporis laboriosam! Cum error ipsum laborum tempore in rerum necessitatibus nostrum nobis modi! Debitis adipisci illum nemo aperiam sed, et accusamus ut officiis. Laborum illo exercitationem quo culpa reprehenderit excepturi distinctio tempore cupiditate praesentium nisi ut iusto, assumenda perferendis facilis voluptas autem fuga sunt ab debitis voluptatum harum eum. Asperiores, natus! Est deserunt incidunt quasi placeat omnis, itaque harum?</p>
    <p class="info">support emails - help@AutoWarella,com, customersupport@autowarella.com</p>
    <p class="info">telefoonnummer - 0612345678</p>
    <div class="footer-social-container">
        <div>
            <a href="#" class="social-link">terms & services</a>
            <a href="#" class="social-link">privacy page</a>
        </div>
        <div>
            <a href="#" class="social-link">instagram</a>
            <a href="#" class="social-link">facebook</a>
            <a href="#" class="social-link">twitter</a>
        </div>
    </div>
    <!-- <p class="footer-credit">Bestel vandaag voor 17.00 en ontvang je de volgende middag!</p>
   -->
  </footer>




</body>
</html>


