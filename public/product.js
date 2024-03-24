jQuery(document).ready(function($) {
   $.getJSON("product.json", function(products) {
      var productContainer = $("#product-container");

      // Loop door elk product en voeg de HTML-inhoud toe aan de container
      $.each(products, function(index, product) {
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
                  <button class="add-to-cart">Toevoegen aan winkelwagen</button>
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
         productContainer.append(productHTML);
      });
   });
});
