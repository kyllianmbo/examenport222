// script.js

// Function to handle adding items to the shopping cart
function addToCart(name, price) {
    // Example: Store the item in localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push({ name: name, price: price });
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Event listener for "Toevoegen aan winkelwagen" buttons
document.querySelectorAll('.add-to-cart-btn').forEach(button => {
    button.addEventListener('click', () => {
        const name = button.dataset.name;
        const price = parseFloat(button.dataset.price);
        addToCart(name, price);
        alert(`Product "${name}" is toegevoegd aan je winkelwagen!`);
    });
});