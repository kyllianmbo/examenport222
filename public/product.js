$(document).ready(function() {
   // Haal de productnaam op uit de URL-parameter
   var urlParams = new URLSearchParams(window.location.search);
   var productName = urlParams.get('product');

   // Laad de juiste productgegevens op basis van de productnaam
   $.getJSON("product.json", function(products) {
      var product = products.find(p => p.name === productName);

      if (product) {
         // Bouw de HTML voor het product
         var productHTML = `
            <div class="product">
               <div class="product-images">
                  <img src="${product.image}" alt="${product.name}">
               </div>
               <div class="product-details">
                  <h2 class="product-name">${product.name}</h2>
                  <p class="product-description">${product.description}</p>
                  <div class="product-price">
                     <span class="price">${product.price}</span>
                  </div>
                  <button class="add-to-cart">Contact opnemen met verkoper</button>
                  <div class="product-description-extended">
                     <h3>Uitgebreide Beschrijving:</h3>
                     <p>${product.extended_description}</p>
                  </div>
                  <div class="product-specs">
                     <h3>Specificaties:</h3>
                     <ul>
                        <!-- Loop door elke specificatie en voeg deze toe aan de lijst -->
                        ${Object.entries(product.specs).map(([key, value]) => `<li><strong>${key}:</strong> ${value}</li>`).join('')}
                     </ul>
                  </div>
               </div>
            </div>
         `;

         // Voeg het productHTML toe aan de productContainer
         $("#product-container").append(productHTML);
      } else {
         // Toon een foutmelding als het product niet gevonden is
         $("#product-container").html("<p>Product niet gevonden</p>");
      }
   });
});
