

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walker Supermarket - Shopping Cart</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            color: #333;
            line-height: 1.6;
        }

        /* Container Styles */
        .shopping-cart {
            max-width: 1000px;
            margin: 30px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Header Styles */
        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .cart-header h1 {
            color: #2c3e50;
            font-size: 24px;
        }

        /* Cart Item Styles */
        .cart-items {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #e0e0e0;
            padding: 15px;
            border-radius: 5px;
        }

        .item-details {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .item-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }

        .item-info {
            flex-grow: 1;
        }

        .item-info h3 {
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .item-info p {
            color: #7f8c8d;
        }

        /* Quantity Control */
        .quantity-control {
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: #f1f1f1;
            border-radius: 20px;
            padding: 5px 10px;
        }

        .quantity-control button {
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
            color: #2c3e50;
        }

        .quantity-control input {
            width: 40px;
            text-align: center;
            border: none;
            background: none;
        }

        /* Price and Remove */
        .item-price-remove {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .remove-item {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .remove-item:hover {
            background-color: #c0392b;
        }

        /* Cart Summary */
        .cart-summary {
            margin-top: 30px;
            border-top: 2px solid #e0e0e0;
            padding-top: 20px;
            text-align: right;
        }

        .cart-summary .total {
            font-size: 20px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        .checkout-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-continue {
            background-color: #3498db;
            color: white;
        }

        .btn-continue:hover {
            background-color: #2980b9;
        }

        .btn-checkout {
            background-color: #2ecc71;
            color: white;
        }

        .btn-checkout:hover {
            background-color: #27ae60;
        }

        /* Empty Cart Styles */
        .empty-cart {
            text-align: center;
            padding: 50px 0;
        }

        .empty-cart h2 {
            color: #7f8c8d;
            margin-bottom: 15px;
        }

        .empty-cart a {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }
    </style>
    <link rel="stylesheet" href="../CSS/Orders.css">
  <link rel="stylesheet" href="../CSS/Secondary.css">

</head>
<header>
        <div class="navbar">
          
            <span>
              <p>Walker Community Supermarket</p>
            </span>
          
          <nav>
            <ul>
                <li><a href="../index.php">Home</a></a></li>
                <li><a href="Information.html">Information</a></li>
                <li><a href="Contact.html">Contact</a></a></li>
                <li><div class="profile-container">
                    <div class="profile-icon">
                        <i class="fas fa-user-circle"> 
                        </i>
                    </div>
                    <div class="profile-dropdown">
                        <div class="profile-header">
                            <img src="../Img/download.png" alt="Avatar" class="profile-avatar">
                            <div class="profile-info">
                                <h3></h3>
                                <p></p>
                            </div>
                        </div>
                        <ul class="profile-menu">
                            <li class="profile-menu-divider"></li>
                            <li><a href="../HTML/logout.php">
                                <i class="fas fa-sign-out-alt"></i>
                                "Logout"
                            </a>
                        </li>
                        </ul>
                        
                    </div>
                </div>
                </li>
                <li><a href="../HTML/Settings.html" target="_blank">
                    <img src="../Img/download (5).jpg" alt="Image" style="width: 40px;height: auto;">
                </a>
            </li>
            <li>
                <div class="cart-container">
                    <a href="..Orders.php">
                        <div class="cart-icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                    </a>
                </div>
            </li>
                </div>
                
            </ul>
          </nav>
          
        </div>
        </div>
        <script>
            // Load the saved theme from localStorage on page load
            window.addEventListener('load', () => {
              const savedTheme = localStorage.getItem('websiteTheme');
              if (savedTheme) {
                document.body.style.backgroundColor = savedTheme;
          
                // Adjust text colors for visibility
                if (savedTheme === 'black' || savedTheme === 'gray') {
                  document.body.style.color = 'white';
                  document.querySelector('header').style.color = 'white';
                } else {
                  document.body.style.color = 'black';
                  document.querySelector('header').style.color = 'black';
                }
              }
            });
          </script>
          

        <div class="logo">
          <img src="../Img/large-removebg-preview.png" alt="Walker Community Supermarket Logo"> 
        
          <div class="search">
            <input type="text" id="search-input" placeholder="Search Product...">
            <button id="search-btn">Search</button>
        </div>
    
    </header>
<body>
    <div class="shopping-cart">
        <div class="cart-header">
            <h1>Your Shopping Cart</h1>
            <p>Total Items: <span id="total-items">0</span></p>
        </div>

        <div id="cart-items" class="cart-items">
            <!-- Cart items will be dynamically added here -->
            <div class="empty-cart">
                <h2>Your cart is empty</h2>
                <p>Looks like you haven't added any items yet.</p>
                <a href="../HTML/index.html">Continue Shopping</a>
            </div>
        </div>

        <div class="cart-summary">
            <div class="total">
                Total: $<span id="cart-total">0.00</span>
            </div>
            <div class="checkout-buttons">
                <button class="btn btn-continue">Continue Shopping</button>
                <button class="btn btn-checkout">Proceed to Checkout</button>
            </div>
        </div>
    </div>

    <script>
        // JavaScript for cart functionality will be added here
        // This is a placeholder script to demonstrate structure
        document.addEventListener('DOMContentLoaded', () => {
            const cartItemsContainer = document.getElementById('cart-items');
            const totalItemsSpan = document.getElementById('total-items');
            const cartTotalSpan = document.getElementById('cart-total');

            // Sample cart data (would typically come from local storage or backend)
            const cartItems = [
                
            ];

            function renderCart() {
                // Clear existing cart items
                cartItemsContainer.innerHTML = '';

                // If cart is empty, show empty cart message
                if (cartItems.length === 0) {
                    cartItemsContainer.innerHTML = `
                        <div class="empty-cart">
                            <h2>Your cart is empty</h2>
                            <p>Looks like you haven't added any items yet.</p>
                            <a href="../HTML/index.html">Continue Shopping</a>
                        </div>
                    `;
                    totalItemsSpan.textContent = '0';
                    cartTotalSpan.textContent = '0.00';
                    return;
                }

                // Render cart items
                cartItems.forEach(item => {
                    const cartItemElement = document.createElement('div');
                    cartItemElement.classList.add('cart-item');
                    cartItemElement.innerHTML = `
                        <div class="item-details">
                            <img src="${item.image}" alt="${item.name}" class="item-image">
                            <div class="item-info">
                                <h3>${item.name}</h3>
                                <p>$${item.price.toFixed(2)} each</p>
                            </div>
                        </div>
                        <div class="quantity-control">
                            <button onclick="decreaseQuantity(${item.id})">-</button>
                            <input type="text" value="${item.quantity}" readonly>
                            <button onclick="increaseQuantity(${item.id})">+</button>
                        </div>
                        <div class="item-price-remove">
                            <span>$${(item.price * item.quantity).toFixed(2)}</span>
                            <button class="remove-item" onclick="removeItem(${item.id})">Remove</button>
                        </div>
                    `;
                    cartItemsContainer.appendChild(cartItemElement);
                });

                // Update total items and cart total
                const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
                const cartTotal = cartItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);

                totalItemsSpan.textContent = totalItems;
                cartTotalSpan.textContent = cartTotal.toFixed(2);
            }

            // Placeholder functions for cart interactions
            window.increaseQuantity = (id) => {
                const item = cartItems.find(item => item.id === id);
                if (item) item.quantity++;
                renderCart();
            };

            window.decreaseQuantity = (id) => {
                const item = cartItems.find(item => item.id === id);
                if (item && item.quantity > 1) item.quantity--;
                renderCart();
            };

            window.removeItem = (id) => {
                const index = cartItems.findIndex(item => item.id === id);
                if (index !== -1) cartItems.splice(index, 1);
                renderCart();
            };

            // Initial render
            renderCart();

            // Continue shopping button
            document.querySelector('.btn-continue').addEventListener('click', () => {
                window.location.href = 'index.html';
            });

            // Checkout button
            document.querySelector('.btn-checkout').addEventListener('click', () => {
                alert('Proceeding to checkout...');
                // Implement checkout logic here
            });
        });
    </script>
    <script src="../js/Orders.js"></script>
    <script src="../js/cart.js"></script>
</body>
</html>