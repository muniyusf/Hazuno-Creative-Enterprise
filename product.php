<?php
// product.php

// Sample data for demonstration
$products = [
  16 => [
    'title' => 'Thank You Card',
    'image' => './image/items/item_3.png',
    'rating' => 4.5,
    'rating_count' => 88,
    'description' => 'Express your gratitude with these beautiful Thank You cards. Available in various designs.',
  ],
  // Add more products if needed
];

// Retrieve the product ID from the URL
$product_id = $_GET['product_id'] ?? null;
$product = $products[$product_id] ?? null;

// Check if product exists
if (!$product) {
  echo "<h1>Product not found</h1>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Page - <?= htmlspecialchars($product['title']) ?></title>
  <link rel="stylesheet" href="./css/product.css">
  <link rel="stylesheet" href="./css/styles.css" />
  <script src="./script.js" defer></script>
</head>

<body>

  <!-- Navigation Bar -->

  <nav class="nav">
    <div class="container nav_container">
      <a href="home.php" class="nav_logo">HAZUNO CREATIVE</a>
      <ul class="nav_list">
        <li class="nav_item"><a href="home.php" class="nav_link">Home</a></li>
        <li class="nav_item"><a href="about.php" class="nav_link">About</a></li>
        <li class="nav_item"><a href="contact.php" class="nav_link">Contact</a></li>
        <li class="nav_item"><a href="register.php" class="nav_link">Sign Up</a></li>
        <li class="nav_item"><a href="login.php" class="nav_link">Login</a></li>
        <li class="nav_item"><a href="profile.php" class="nav_link">Profile</a></li>
      </ul>
      <div class="nav_items">
        <form action="#" class="nav_form">
          <input type="text" class="nav_input" placeholder="search here....">
          <img src="./image/search.png" alt="" class="nav_search">
        </form>
        <img src="./image/heart.png" alt="" class="nav_heart">
        <a href="check-out.php">
          <img src="./image/cart.png" alt="" class="nav_cart">
        </a>
      </div>
      <span class="hamburger">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </span>
    </div>
  </nav>

  <div class="product-details">
    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['title']) ?>" class="product-image">

    <div class="product-info">
      <h1 class="product-title"><?= htmlspecialchars($product['title']) ?></h1>

      <div class="product-rating">
        <?php for ($i = 0; $i < 5; $i++): ?>
          <span class="star <?= $i < $product['rating'] ? 'filled' : '' ?>">★</span>
        <?php endfor; ?>
        <span>(<?= htmlspecialchars($product['rating_count']) ?> reviews)</span>
      </div>

      <p class="product-description"><?= htmlspecialchars($product['description']) ?></p>


      <div class="product-table-container">
        <table class="product-table">
          <tr>
            <th>Glossy Card</th>
            <th>Matte Card</th>
            <th>Uncoated Card</th>
          </tr>

          <!-- Product Row 1 -->
          <tr>
            <td>
              <img src="./image/gallery/glossy_card.png" alt="Thank You Card" class="table-image">
            </td>
            <td>
              <img src="./image/gallery/matte_card.png" alt="100 PCS Price" class="table-image">
            </td>
            <td>
              <img src="./image/gallery/uncoated_card.png" alt="300 PCS Price" class="table-image">
            </td>
          </tr>
        </table>
      </div>

      <div class="product-options">
        <label for="quantity">Quantity (in box, 1 box = 100pcs):</label>
        <select id="quantity" onchange="updateTotalPrice()">
          <option value="">Select Quantity</option>
          <option value="100">100 PCS - RM30</option>
          <option value="300">300 PCS - RM75</option>
          <option value="500">500 PCS - RM84</option>
        </select>

        <label for="format">Format:</label>
        <select id="format">
          <option value="0">Select Format</option>
          <option value="1">90mm x 55mm (Standard Size)</option>
          <option value="2">90mm x 50mm (Slim Size)</option>
        </select>

        <label for="material">Material:</label>
        <select id="material">
          <option value="0">Select Material</option>
          <option value="glossy">Glossy Card</option>
          <option value="matte">Matte Card</option>
          <option value="uncoated">Uncoated Card</option>
        </select>

        <label for="format">Delivery:</label>
        <select id="format">
          <option value="0">Select Delivery</option>
          <option value="1">Standard Delivery (RM 5)</option>
          <option value="2">Flash Delivery (RM 8)</option>
        </select>

        <p>Printing Side</p>
        <label><input type="radio" name="format" value="front-back">1 Sided Full Colour Print</label>
        <label><input type="radio" name="format" value="front-only">2 Sided Full Colour Print</label>

        <p>Upload Your Design Here</p>
        <!--css file-->


        <div class="center">
          <div class="form-input">
            <!--Preview box-->
            <div class="preview">
              <img src="" alt="" id="file-ip-1-preview">
            </div>
            <!--input box-->
            <label for="file-ip-1">Upload Here</label>
            <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">

          </div>
        </div>

        <!--javascript-->

        <script type="text/javascript">
          function showPreview(event) {
            if (event.target.files.length > 0) {
              var src = URL.createObjectURL(event.target.files[0]);
              var preview = document.getElementById("file-ip-1-preview")
              preview.src = src;
              preview.style.display = "block";
            }
          }
        </script>

        <!-- Total Price Display -->
        <div id="total-price-container">
          <p>Total Price: <span id="total-price">RM0</span></p>
        </div>
        <button class="add-to-cart-btn">Add to Cart</button>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <footer class="footer">
    <div class="container footer_container">
      <div class="footer_item">
        <a href="#" class="footer_logo">Exclusive</a>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
      </div>
      <div class="footer_item">
        <h3>Support</h3>
        <ul>
          <li>Stockholm, Sweden</li>
          <li>email@gmail.com</li>
          <li>+46 123 456 78</li>
        </ul>
      </div>
      <div class="footer_item">
        <h3>Links</h3>
        <ul>
          <li><a href="account.php">Account</a></li>
          <li><a href="cart.php">Cart</a></li>
          <li><a href="shop.php">Shop</a></li>
        </ul>
      </div>
    </div>
    <div class="footer_bottom">
      <p>&copy; 2023 Hazuno Creative. All rights reserved.</p>
    </div>
  </footer>

</body>

</html>