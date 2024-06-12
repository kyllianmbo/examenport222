document.addEventListener('DOMContentLoaded', function() {
    const orderSummaryContainer = document.getElementById('order-summary-container');
    const checkoutForm = document.getElementById('checkout-form');

    // Initialize EmailJS with your user ID
    emailjs.init('j1xSi-Jva5x3sPVKm');

    // Retrieve cart items from localStorage
    const cartItems = JSON.parse(localStorage.getItem('cart')) || []

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

    // Function to validate email format
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Function to validate phone number format
    function validatePhoneNumber(phone) {
        const phoneRegex = /^\d{10}$/; // Change regex as per your requirements
        return phoneRegex.test(phone);
    }

    // Function to validate credit card number format
    function validateCreditCard(cardNumber) {
        // Implement credit card validation logic here
        // You can use a library like https://github.com/braintree/card-validator for this
        return true; // Placeholder
    }

    // Function to display error messages
    function displayError(input, message) {
        const errorElement = document.createElement('div');
        errorElement.className = 'error-message';
        errorElement.textContent = message;
        input.parentNode.appendChild(errorElement);
    }

    // Event listener for checkout form submission
    checkoutForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const name = checkoutForm.name.value;
        const email = checkoutForm.email.value;
        const phone = checkoutForm.phone.value;
        const cardNumber = checkoutForm.cardNumber.value;

        // Clear previous error messages
        const errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(message => message.remove());

        // Validate form fields
        let isValid = true;
        if (name.trim() === '') {
            displayError(checkoutForm.name, 'Please enter your name');
            isValid = false;
        }
        if (!validateEmail(email)) {
            displayError(checkoutForm.email, 'Please enter a valid email address');
            isValid = false;
        }
        if (!validatePhoneNumber(phone)) {
            displayError(checkoutForm.phone, 'Please enter a valid phone number');
            isValid = false;
        }
        if (!validateCreditCard(cardNumber)) {
            displayError(checkoutForm.cardNumber, 'Please enter a valid credit card number');
            isValid = false;
        }

        // If form is valid, proceed with submission
        if (isValid) {
            // Implement order submission logic here (see next step)
            submitOrder();
        }
    });

    // Function to submit order and send confirmation email
    function submitOrder() {
        // Send order confirmation email using EmailJS
        emailjs.send('service_ny8d8s6', 'template_c3pn8te', {
            name: checkoutForm.name.value,
            email: checkoutForm.email.value,
            // Add other relevant data from the form as needed
        }).then(function(response) {
            console.log('Email sent successfully!', response);
            // Clear the cart after placing the order
            localStorage.removeItem('cart');
            // Redirect user to confirmation page or show success message
            window.location.href = 'confirmation.html';
        }, function(error) {
            console.error('Error sending email:', error);
            // Handle error case, show error message to user if needed
            // For example: alert('Error sending email. Please try again later.');
        });
    }
});
