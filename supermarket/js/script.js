let cart = [];
let cartCount = 0;
let cartTotal = 0.00;

// Toggle cart dropdown visibility
function toggleCart() {
    const cartDropdown = document.getElementById('cart-dropdown');
    cartDropdown.style.display = (cartDropdown.style.display === 'block') ? 'none' : 'block';
}

// Add item to cart
const addToCartButtons = document.querySelectorAll('.addToCartBtn');
addToCartButtons.forEach(button => {
    button.addEventListener('click', function() {
        const itemName = this.previousElementSibling.textContent; // Product name
        const itemPrice = parseFloat(this.getAttribute('data-price')); // Item price
        
        // Add item to cart array
        cart.push({ name: itemName, price: itemPrice });

        // Update the cart UI
        updateCartUI();
    });
});

// Update the cart count, items, and total price
function updateCartUI() {
    const cartCountSpan = document.getElementById('cart-count');
    const cartItemsDiv = document.getElementById('cart-items');
    const cartTotalAmount = document.getElementById('cart-total-amount');

    // Clear the current cart items
    cartItemsDiv.innerHTML = '';

    // Add each item to the cart
    cart.forEach(item => {
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        cartItem.textContent = `${item.name} - $${item.price.toFixed(2)}`;
        cartItemsDiv.appendChild(cartItem);
    });

    // Update cart count and total
    cartCount = cart.length;
    cartTotal = cart.reduce((total, item) => total + item.price, 0).toFixed(2);
    cartCountSpan.textContent = cartCount;
    cartTotalAmount.textContent = cartTotal;
}

// Checkout function (optional implementation)
function checkout() {
    alert(`Checking out with total: $${cartTotal}`);
    // You can implement actual checkout logic here
}
