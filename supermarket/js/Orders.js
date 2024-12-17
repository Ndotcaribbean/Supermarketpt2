let cart = [];

function loadCart() {
    cart = JSON.parse(localStorage.getItem('cart') || '[]');
    updateCartDisplay();
}

function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartDisplay();
}

function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    const sizeSelect = document.getElementById(`size-${productId}`);
    const selectedSize = sizeSelect ? sizeSelect.value : null;

    if (!selectedSize) {
        alert('Please select a size');
        return;
    }

    const existingItem = cart.find(item => 
        item.id === productId && item.size === selectedSize
    );

    if (existingItem) {
        existingItem.quantity++;
    } else {
        cart.push({
            ...product,
            size: selectedSize,
            quantity: 1
        });
    }

    saveCart();
}

function removeFromCart(productId, size) {
    cart = cart.filter(item => 
        !(item.id === productId && item.size === size)
    );
    saveCart();
}

function updateCartDisplay() {
    const cartDropdown = document.getElementById('cart-items');
    const cartTotalNavbar = document.getElementById('cart-total');

    if (!cartDropdown || !cartTotalNavbar) return;

    cartDropdown.innerHTML = '';
    let total = 0;

    if (cart.length === 0) {
        cartDropdown.innerHTML = '<p>Your cart is empty!</p>';
    } else {
        cart.forEach(item => {
            const cartItemEl = document.createElement('div');
            cartItemEl.classList.add('cart-item');
            cartItemEl.innerHTML = `
                <img src="${item.image}" alt="${item.name}">
                <span>${item.name} (Size: ${item.size}) x ${item.quantity}</span>
                <span>$${(item.price * item.quantity).toFixed(2)}</span>
                <button onclick="removeFromCart(${item.id}, '${item.size}')">Remove</button>
            `;
            cartDropdown.appendChild(cartItemEl);
            total += item.price * item.quantity;
        });
    }

    cartTotalNavbar.textContent = `Total: $${total.toFixed(2)}`;
}

function checkout() {
    alert('Proceeding to checkout!');
    cart = [];
    saveCart();
}

// Load cart when page loads
document.addEventListener('DOMContentLoaded', () => {
    loadCart();
    
    const checkoutBtn = document.getElementById('checkout-btn');
    if (checkoutBtn) {
        checkoutBtn.addEventListener('click', checkout);
    }
});

// Sync cart across tabs
window.addEventListener('storage', (event) => {
    if (event.key === 'cart') {
        loadCart();
    }
});