$(document).ready(function() {
   // Haal de productnaam op uit de URL-parameter
   var urlParams = new URLSearchParams(window.location.search);
   var productName = urlParams.get('product');

   // Laad de juiste productgegevens op basis van de productnaam
   $.getJSON("product.json", function(products) {
      // Zoek het product in de lijst met producten die overeenkomt met de opgegeven productnaam
      var product = products.find(p => p.name === productName);

      if (product) {
         // Bouw de HTML voor het product
         var productHTML = `
            <div class="col-md-8 offset-md-2">
               <div class="card mb-4 shadow-sm border-primary">
                  <img src="${product.image}" class="card-img-top" alt="${product.name}">
                  <div class="card-body bg-light">
                     <h5 class="card-title text-primary">${product.name}</h5>
                     <p class="card-text">${product.description}</p>
                     <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                           <span class="text-primary fw-bold">${product.price}</span>
                           <span class="text-muted text-decoration-line-through">${product.actualPrice}</span>
                        </div>
                        <span class="badge bg-danger">${product.discount}</span>
                     </div>
                     <a href="contactform.php" class="btn btn-success w-100">Contact opnemen met verkoper</a>
                     <div class="product-description-extended mt-4">
                        <h3 class="text-secondary">Uitgebreide Beschrijving:</h3>
                        <p>${product.extended_description}</p>
                     </div>
                     <div class="product-specs mt-3">
                        <h3 class="text-secondary">Specificaties:</h3>
                        <ul class="list-group list-group-flush">
                           ${Object.entries(product.specs).map(([key, value]) => `<li class="list-group-item"><strong>${key}:</strong> ${value}</li>`).join('')}
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         `;

         // Voeg het productHTML toe aan de productContainer in de HTML
         $("#product-container").append(productHTML);
      } else {
         // Toon een foutmelding als het product niet gevonden is
         $("#product-container").html("<p>Product niet gevonden</p>");
      }
   });
});
