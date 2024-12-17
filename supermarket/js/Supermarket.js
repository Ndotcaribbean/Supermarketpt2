
document.addEventListener('DOMContentLoaded', () => {
    const products = document.querySelectorAll('.product');

    products.forEach(product => {
        const quantityInput = product.querySelector('input[type="number"]');
        const priceElement = product.querySelector('.price');
        
        // Extract the base price and unit
        const priceText = priceElement.textContent;
        const [basePrice, unit] = priceText.split('/');
        const numericPrice = parseFloat(basePrice.replace('$', ''));

        // Add event listener to quantity input
        quantityInput.addEventListener('input', () => {
            const quantity = parseInt(quantityInput.value) || 1;
            const totalPrice = (numericPrice * quantity).toFixed(2);
            priceElement.textContent = `$${totalPrice}/${unit}`;
        });
    });
});
document.getElementById('search-input').addEventListener('input', function() {
    const searchQuery = this.value.toLowerCase();
    const products = document.querySelectorAll('.product');
    
    products.forEach(product => {
        const productName = product.querySelector('h3').textContent.toLowerCase();
        
        if (productName.includes(searchQuery)) {
            product.style.display = '';
        } else {
            product.style.display = 'none';
        }
    });
});

// JavaScript to toggle visibility of Login and Logout options

// Simulate user login status using localStorage
const isLoggedInKey = "isLoggedIn";

// Elements for login and logout buttons
const loginButton = document.getElementById("loginButton");
const logoutButton = document.getElementById("logoutButton");

// Check login status on page load
window.onload = () => {
    const isLoggedIn = localStorage.getItem(isLoggedInKey) === "true";
    updateUI(isLoggedIn);
};

// Function to update UI based on login status
function updateUI(isLoggedIn) {
    if (isLoggedIn) {
        loginButton.style.display = "none";
        logoutButton.style.display = "block";
    } else {
        loginButton.style.display = "block";
        logoutButton.style.display = "none";
    }
}

// Event listener for login button
loginButton.addEventListener("click", () => {
    localStorage.setItem(isLoggedInKey, "true");
    updateUI(true);
});

// Event listener for logout button
logoutButton.addEventListener("click", () => {
    localStorage.setItem(isLoggedInKey, "false");
    updateUI(false);
});
// JavaScript to handle cart functionality
let cart = [];

function toggleCart() {
  const cartDropdown = document.getElementById('cart-dropdown');
  cartDropdown.style.display = cartDropdown.style.display === 'block' ? 'none' : 'block';
}

function addToCart(productName, productPrice, productId) {
  const quantity = document.getElementById('quantity_' + productId).value;
  
  // Check if the quantity is a valid number
  if (quantity <= 0 || isNaN(quantity)) {
    alert("Please enter a valid quantity.");
    return;
  }

  const totalPrice = productPrice * quantity;

  // Add item to cart array
  const existingProductIndex = cart.findIndex(item => item.name === productName);
  if (existingProductIndex !== -1) {
    // Update quantity and total price if item already exists in cart
    cart[existingProductIndex].quantity += parseInt(quantity);
    cart[existingProductIndex].totalPrice += totalPrice;
  } else {
    // Add new product to cart
    cart.push({
      name: productName,
      price: productPrice,
      quantity: parseInt(quantity),
      totalPrice: totalPrice
    });
  }

  updateCartDisplay();
}

function updateCartDisplay() {
  // Update cart item display
  const cartItemsContainer = document.getElementById('cart-items');
  const cartCount = document.getElementById('cart-count');
  const cartTotalAmount = document.getElementById('cart-total-amount');

  // Clear current cart content
  cartItemsContainer.innerHTML = '';

  // Add new items to the cart dropdown
  let total = 0;
  cart.forEach(item => {
    const itemElement = document.createElement('div');
    itemElement.classList.add('cart-item');
    itemElement.innerHTML = `${item.name} x ${item.quantity} - $${item.totalPrice.toFixed(2)}`;
    cartItemsContainer.appendChild(itemElement);

    total += item.totalPrice;
  });

  // Update total price and item count
  cartCount.textContent = cart.length;
  cartTotalAmount.textContent = total.toFixed(2);
}

function checkout() {
  if (cart.length === 0) {
    alert('Your cart is empty. Please add items to the cart.');
  } else {
    alert('Proceeding to checkout...');
  }
}

