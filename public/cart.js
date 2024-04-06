// cart.js

document.addEventListener('DOMContentLoaded', function() {
    const cartItemsContainer = document.getElementById('cart-items-container');
    const checkoutBtn = document.getElementById('checkout-btn');

    // Retrieve cart items from localStorage
    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];

    // Function to display cart items
    function displayCartItems() {
        cartItemsContainer.innerHTML = '';
        if (cartItems.length === 0) {
            cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
        } else {
            cartItems.forEach(item => {
                const itemElement = document.createElement('div');
                itemElement.textContent = `${item.name} - €${item.price.toFixed(2)}`;
                cartItemsContainer.appendChild(itemElement);
            });
        }
    }

    // Display cart items when the page loads
    displayCartItems();

    // Event listener for checkout button
    checkoutBtn.addEventListener('click', function() {
        // Redirect to checkout page
        window.location.href = 'checkout.html';
    });
});
