<?php

session_start();

if(!isset($_SESSION['user_id'])){
    header('location: ..login-form.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Walker Community Supermarket</title>
  <link rel="stylesheet" href="../CSS/Supermarket.css">
  <link rel="stylesheet" href="../CSS/Secondary.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="../js/Supermarket.js" defer></script>
</head>
<body data-new-gr-c-s-check-loaded="14.1213.0" data-gr-ext-installed>
    
    <header>
        <div class="navbar">
          
            <span>
              <p>Walker Community Supermarket</p>
            </span>
          
          <nav>
            <ul>
                <li><a href="#">Home</a></a></li>
                <li><a href="../HTML/Information.html">Information</a></li>
                <li><a href="../HTML/Contact.html">Contact</a></a></li>
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
                    <a href="Orders.php">
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

    <main>
        <section>
            <h2 id="vegetables">Vegetables</h2>
            <div class="category">
                <div class="product">
                    <div class="image-placeholder image-placeholder1">
                        <img src="../Img/Peppers.jpg" alt="Peppers">
                    </div>
                    <h3>Peppers</h3>
                    <p class="price">$1.53/1kg</p>
                    <div class="qyt">
                        <label for="quantity_vegetable1">Quantity:</label>
                        <input type="number" id="quantity_vegetable1" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="product">
                    <div class="image-placeholder image-placeholder1">
                        <img src="../Img/onion.webp" alt="Peppers">
                    </div>
                    <h3>Onions</h3>
                    <p class="price">$3.35/1kg</p>
                    <div class="qyt">
                        <label for="quantity_vegetable1">Quantity:</label>
                        <input type="number" id="quantity_vegetable1" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="product">
                    <div class="image-placeholder image-placeholder1">
                        <img src="../Img/download.webp" alt="Peppers">
                    </div>
                    <h3>Tomatos</h3>
                    <p class="price">$5.92/1kg</p>
                    <div class="qyt">
                        <label for="quantity_vegetable1">Quantity:</label>
                        <input type="number" id="quantity_vegetable1" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="product">
                    <div class="image-placeholder image-placeholder1">
                        <img src="../Img/download (1).webp" alt="Peppers">
                    </div>
                    <h3>Cucumbers</h3>
                    <p class="price">$4.25/1kg</p>
                    <div class="qyt">
                        <label for="quantity_vegetable1">Quantity:</label>
                        <input type="number" id="quantity_vegetable1" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
            

                <div class="product">
                    <div class="image-placeholder image-placeholder3">
                        <img src="../Img/sweet.jpg" alt="Sweet Potatoes">
                    </div>
                    <h3>Sweet Potatoes</h3>
                    <p class="price">$5.91/1kg</p>
                    <div class="qyt">
                        <label for="quantity_vegetable3">Quantity:</label>
                        <input type="number" id="quantity_vegetable3" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product">
                    <div class="image-placeholder image-placeholder1">
                        <img src="../Img/Carrot.jpg" alt="Carrots">
                    </div>
                    <h3>Carrots</h3>
                    <p class="price">$2.35/1kg</p>
                    <div class="qyt">
                        <label for="quantity_vegetable4">Quantity:</label>
                        <input type="number" id="quantity_vegetable4" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
            </div>
        </section>
            <section>
                <h2 id="Drinks">Fresh Fruits</h2>
            <div class="category">
                <div class="product">

                    <div class="image-placeholder image-placeholder1">
                        <img src="../Img/download.jpg" alt="Carrots">
                    </div>
                    <h3>Apples</h3>
                    <p class="price">$3.75/1kg</p>
                    <div class="qyt">
                        <label for="quantity_vegetable4">Quantity:</label>
                        <input type="number" id="quantity_vegetable4" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                    </div>
                    <div class="product">
                    <div class="image-placeholder image-placeholder2">
                        <img src="../Img/Bananas.jpg" alt="Bananas">
                    </div>
                    <h3>Bananas</h3>
                    <p class="price">$6.71/1kg</p>
                    <div class="qyt">
                        <label for="quantity_vegetable2">Quantity:</label>
                        <input type="number" id="quantity_vegetable2" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
                
                <div class="product">
                    <div class="image-placeholder image-placeholder2">
                        <img src="../Img/download (3).webp" alt="Bananas">
                    </div>
                    <h3>Melons</h3>
                    <p class="price">$8.85/1kg</p>
                    <div class="qyt">
                        <label for="quantity_vegetable2">Quantity:</label>
                        <input type="number" id="quantity_vegetable2" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
                   <div class="product">
                    <div class="image-placeholder image-placeholder2">
                        <img src="../Img/download (1).jpg" alt="Bananas">
                    </div>
                    <h3>Oranges</h3>
                    <p class="price">$2.55/1kg</p>
                    <div class="qyt">
                        <label for="quantity_vegetable2">Quantity:</label>
                        <input type="number" id="quantity_vegetable2" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="product">
                    <div class="image-placeholder image-placeholder2">
                        <img src="../Img/download (2).jpg" alt="Bananas">
                    </div>
                    <h3>Pears</h3>
                    <p class="price">$5.35/1kg</p>
                    <div class="qyt">
                        <label for="quantity_vegetable2">Quantity:</label>
                        <input type="number" id="quantity_vegetable2" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="product">
                    <div class="image-placeholder image-placeholder2">
                        <img src="../Img/download (3).jpg" alt="Bananas">
                    </div>
                    <h3>Plums</h3>
                    <p class="price">$6.75/1kg</p>
                    <div class="qyt">
                        <label for="quantity_vegetable2">Quantity:</label>
                        <input type="number" id="quantity_vegetable2" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="product">
                    <div class="image-placeholder image-placeholder2">
                        <img src="../Img/download (4).jpg" alt="Bananas">
                    </div>
                    <h3>Grapes</h3>
                    <p class="price">$7.95/1kg</p>
                    <div class="qyt">
                        <label for="quantity_vegetable2">Quantity:</label>
                        <input type="number" id="quantity_vegetable2" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>



            </div>
            </section>
            

        <section>
            <h2 id="Drinks">Drinks</h2>
            <div class="category">
                <div class="product">
                    <div class="image-placeholder image-placeholder5">
                        <img src="../Img/water-14.webp" alt="Glenelg Water">
                    </div>
                    <h3>Glenelg Water</h3>
                    <p class="price">$3.46/lb</p>
                    <div class="qyt">
                        <label for="quantity_Drink1">Quantity:</label>
                        <input type="number" id="quantity_Drink1" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product">
                    <div class="image-placeholder image-placeholder6">
                        <img src="../Img/coke.jpg" alt="Coca Cola">
                    </div>
                    <h3>Coca Cola</h3>
                    <p class="price">$4.50/lb</p>
                    <div class="qyt">
                        <label for="quantity_Drink2">Quantity:</label>
                        <input type="number" id="quantity_Drink2" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product">
                    <div class="image-placeholder image-placeholder7">
                        <img src="../Img/rica.jpg" alt="Classic Rica">
                    </div>
                    <h3>Classic Rica</h3>
                    <p class="price">$3.50/lb</p>
                    <div class="qyt">
                        <label for="quantity_Drink3">Quantity:</label>
                        <input type="number" id="quantity_Drink3" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="product">
                    <div class="image-placeholder image-placeholder7">
                        <img src="../Img/monster-energy.webp" alt="Classic Rica">
                    </div>
                    <h3>Classic Monster</h3>
                    <p class="price">$7.50/lb</p>
                    <div class="qyt">
                        <label for="quantity_Drink3">Quantity:</label>
                        <input type="number" id="quantity_Drink3" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

                <div class="product">
                    <div class="image-placeholder image-placeholder7">
                        <img src="../Img/faygo.webp" alt="Classic Rica">
                    </div>
                    <h3>Faygo</h3>
                    <p class="price">$5.00/lb</p>
                    <div class="qyt">
                        <label for="quantity_Drink3">Quantity:</label>
                        <input type="number" id="quantity_Drink3" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="product">
                    <div class="image-placeholder image-placeholder7">
                        <img src="../Img/diet-pepsi.jpg" alt="Classic Rica">
                    </div>
                    <h3>Pepsi Diet</h3>
                    <p class="price">$7.50/lb</p>
                    <div class="qyt">
                        <label for="quantity_Drink3">Quantity:</label>
                        <input type="number" id="quantity_Drink3" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>
                <div class="product">
                    <div class="image-placeholder image-placeholder7">
                        <img src="../Img/caffeine-free-mountain-dew.webp" alt="Classic Rica">
                    </div>
                    <h3>Mountain Dew</h3>
                    <p class="price">$7.50/lb</p>
                    <div class="qyt">
                        <label for="quantity_Drink3">Quantity:</label>
                        <input type="number" id="quantity_Drink3" value="1">
                    </div>
                    <div class="Productbtns">
                        <button>Add to Cart</button>
                        <button>Buy Now</button>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="index.php">Products</a></a></li>
                    <li><a href="#">Delivery Areas</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>Customer Service</h4>
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Returns & Refunds</a></li>
                    <li><a href="#">Order Tracking</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>My Account</h4>
                <ul>
                    <li><a href="../auth/login-form.php">Login</a></li>
                    <li><a href="../auth/register-form.php">Register</a></li>
                    <li><a href="../HTML/Orders.php">Order History</a></li>
                    <li><a href="../HTML/Settings.html">Settings</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>Community</h4>
                <ul>
                    <li><a href="../HTML/Information.html">Blog</a></li>
                    <li><a href="#">Recipes</a></li>
                    <li><a href="#">Sustainability</a></li>
                    <li><a href="#">Local Producers</a></li>
                </ul>
            </div>
            
            <div class="footer-section contact-info">
                <h4>Contact Information</h4>
                <p>📞 Customer Support: 1-473-WALKER</p>
                <p>✉️ Email: support@walkersupermarket.com</p>
                <p>🏢 Address: La Digue Road, St.Andrews, Grenada</p>
            </div>
            
            <div class="footer-section newsletter">
                <h4>Stay Connected</h4>
                <form>
                    <input type="email" placeholder="Enter your email">
                    <button type="submit">Subscribe</button>
                </form>
                <div class="social-media">
                    <a href="#" class="social-icon">Facebook</a>
                    <a href="#" class="social-icon">Instagram</a>
                    <a href="#" class="social-icon">Twitter</a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy;2024 Walker Community Supermarket. All rights reserved.</p>
            <div class="payment-methods">
                <span>We Accept:</span>
                <img src="../Img/visa-icon.png" alt="Visa">
                <img src="../Img/mastercard-icon-removebg-preview.png" alt="Mastercard">
                <img src="../Img/paypal-icon.png" alt="PayPal">
            </div>
            <div class="legal-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Cookie Settings</a>
            </div>
        </div>
    </footer>
</body>
<script src="js/cart.js"></script>

</html>