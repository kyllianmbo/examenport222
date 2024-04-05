// checkout.js

document.addEventListener('DOMContentLoaded', function() {
    const orderSummaryContainer = document.getElementById('order-summary-container');
    const checkoutForm = document.getElementById('checkout-form');

    // Retrieve cart items from localStorage
    const cartItems = JSON.parse(localStorage.getItem('cart')) || [];

    // Function to display order summary
    function displayOrderSummary() {
        let total = 0;
        orderSummaryContainer.innerHTML = '';
        if (cartItems.length === 0) {
            orderSummaryContainer.innerHTML = '<p>Your cart is empty.</p>';
        } else {
            cartItems.forEach(item => {
                const itemElement = document.createElement('div');
                itemElement.textContent = `${item.name} - €${item.price.toFixed(2)}`;
                orderSummaryContainer.appendChild(itemElement);
                total += item.price;
            });
            const totalElement = document.createElement('div');
            totalElement.textContent = `Total: €${total.toFixed(2)}`;
            orderSummaryContainer.appendChild(totalElement);
        }
    }

    // Display order summary when the page loads
    displayOrderSummary();

    // Event listener for checkout form submission
    checkoutForm.addEventListener('submit', function(event) {
        event.preventDefault();
        // Implement checkout process here (e.g., submit order to backend)
        alert('Your order has been placed!');
        // Clear the cart after placing the order
        localStorage.removeItem('cart');
        // Redirect user to confirmation page or homepage
        window.location.href = 'confirmation.html';
    });
});
