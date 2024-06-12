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
   <!-- Header sectie -->
   <header class="hero-section">
      <div class="content">
         <img src="img/light-logo2.jpg" class="logo" alt="">
         <p class="sub-heading">De beste autowebshop van heel Nederland!</p>
      </div>
   </header>

   

<!-- kaart beschikbaar -->
<section class="product">
   <h2 class="product-category">Alle auto's</h2>
   <div class="product-container">
      <div class="product-card">
         <div class="product-image">
            <span class="discount-tag">10% off</span>
            <a href="product.php?product=Audi Rs7" class="product-link">
               <img src="img/audi rs7.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">Audi</h2>
            <p class="product-short-des">Audi Rs7: Krachtige en luxe sportback.</p>
            <span class="price">€45.000 </span><span class="actual-price">€50.000</span>
         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <span class="discount-tag">10% off</span>
            <a href="product.php?product=Mercedes G Wagon" class="product-link">
               <img src="img/mercedes1.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">Mercedes</h2>
            <p class="product-short-des">Mercedes G Wagon - Robuuste en luxueuze terreinwagen</p>
            <span class="price">90.000 </span><span class="actual-price">€100.000</span>
         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <span class="discount-tag">10% off</span>
            <a href="product.php?product=Nissan GTR 2017" class="product-link">
               <img src="img/nissan1.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">Nissan</h2>
            <p class="product-short-des">Nissan Gtr 2017-Sportieve coupé met krachtige prestaties</p>
            <span class="price">€110.000 </span><span class="actual-price">€100.000</span>
         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <a href="product.php?product=Ferrari F40" class="product-link">
               <img src="img/ferrari1.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">Ferrari</h2>
            <p class="product-short-des">Ferrari F40- Legendarische supersportwagen</p>
            <span class="price">€800.000</span>
         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <a href="product.php?product=Lamborghini Urus" class="product-link">
               <img src="img/lambo1.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">Lamborghini Urus</h2>
            <p class="product-short-des">Lamborghini Urus - Luxe SUV met supercar-prestaties</p>
            <span class="price">€250.000</span>
         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <a href="product.php?product=Nissan Skyline R34 GTR" class="product-link">
               <img src="img/nissan22.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">Nissan</h2>
            <p class="product-short-des">Skyline R34 GTR - Iconische sportauto uit Japan</p>
            <span class="price">€120.000</span>
         </div>
      </div>
   </div>
</section>

<!-- kaart elektrisch -->
<section class="product">
   <h2 class="product-category">Alle elektrische auto's</h2>
   <div class="product-container">
      <div class="product-card">
         <div class="product-image">
            <a href="product.php?product=Tesla Model S" class="product-link">
               <img src="img/tesla1.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">Tesla</h2>
            <p class="product-short-des">Tesla Model S: Elektrisch, krachtig, geavanceerd, stijlvol.</p>
            <span class="price">€90.000 </span>
         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <a href="product.php?product=Porsche Taycan" class="product-link">
               <img src="img/porsche1.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">Porsche</h2>
            <p class="product-short-des">Porsche Taycan: Elektrisch, krachtig, geavanceerd, stijlvol.</p>
            <span class="price">€105.000 </span>
         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <a href="product.php?product=BMW i3" class="product-link">
               <img src="img/bmw1.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">BMW</h2>
            <p class="product-short-des">BMW i3: Elektrische stadsauto.</p>
            <span class="price">€40.000 </span>
         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <a href="product.php?product=Tesla Model X" class="product-link">
               <img src="img/teslax.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">Tesla</h2>
            <p class="product-short-des">Tesla Model X- Elektrische luxe sedan</p>
            <span class="price">€80.000</span>
         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <a href="product.php?product=Tesla Cybertruck" class="product-link">
               <img src="img/tesla2.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">Tesla</h2>
            <p class="product-short-des">Tesla Cybertruck - Futuristische elektrische pick-uptruck</p>
            <span class="price">€150.000</span>
         </div>
      </div>
      <div class="product-card">
         <div class="product-image">
            <a href="product.php?product=Tesla Model 3" class="product-link">
               <img src="img/teslamodel3.jpg" class="product-thumb" alt="">
            </a>
            <button class="card-btn">toevoegen aan whislist</button>
         </div>
         <div class="product-info">
            <h2 class="product-brand">Tesla</h2>
            <p class="product-short-des">Tesla Model 3 - Elektrische luxe sedan</p>
            <span class="price">€70.000</span>
         </div>
      </div>
   </div>
</section>


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

<br><br>
         


         
      </div>




         </div>
      </div>

      <!-- <section class="product">
         <h2 class="product-category">Alle accessories auto's</h2>
         <div class="product-container">
            <div class="product-card">
               <div class="product-image">
                  <!-- <span class="discount-tag">10% off</span> -->
                  <!-- <a href="product.html?product=Vantrue N2 Pro" class="product-link">
                  <img src="img/Vantrue.png" class="product-thumb" alt="">
                  </a>
                  <button class="card-btn">toevoegen aan whislist</button>
               </div>
               <div class="product-info">
                  <h2 class="product-brand">Vantrue</h2>
                  <p class="product-short-des">Vantrue N2 Pros: Auto dashcam</p>
                  <span class="price">€40 </span>
      
      
               </div>
            </div>
            <div class="product-card"> -->
               <!-- <div class="product-image"> -->
                  <!-- <span class="discount-tag">10% off</span> -->
                  <!-- <a href="product.html?product=Nextbase 522GW" class="product-link">
                  <img src="img/Nextbase 522GW.jpg" class="product-thumb" alt="">
                  </a>
                  <button class="card-btn">toevoegen aan whislist</button>
               </div>
               <div class="product-info">
                  <h2 class="product-brand">Nextbase</h2>
                  <p class="product-short-des">Nextbase 522GW:: Auto dashcam</p>
                  <span class="price">€30</span>
      
      
               </div>
            -->
 -->

      
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
    <!-- <p class="footer-credit">Bestel vandaag voor 17.00 en ontvang je de volgende middag!</p> -->
  
  </footer>




</body>
</html>


