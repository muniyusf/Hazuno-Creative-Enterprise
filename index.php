<?php
@include 'configs.php';

if (isset($_POST['add_to_cart'])) {

  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_image = $_POST['product_image'];
  $product_quantity = 1;

  $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

  if (mysqli_num_rows($select_cart) > 0) {
    $message[] = 'product already added to cart';
  } else {
    $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
    $message[] = 'product added to cart succesfully';
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/scrollreveal"></script>
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="./css/review.css">
  <link rel="stylesheet" href="./css/view.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <title>Home - Hazuno Creative Website</title>
</head>

<body>
  <div class="top_nav">
    <div class="container top_nav_container">
      <div class="top_nav_wrapper">
        <p class="tap_nav_p">
          Year-End Sale on All Printing Services And Free Express Delivery! - OFF 50%!
        </p>
        <a class="top_nav_link">SHOP NOW</a>
      </div>
    </div>
  </div>
  <nav class="nav">
    <div class="container nav_container">
      <a href="home.php" class="nav_logo">HAZUNO CREATIVE</a>
      <ul class="nav_list">
        <li class="nav_item"><a href="home.php" class="nav_link">Home</a></li>
        <li class="nav_item"><a href="about.php" class="nav_link">About</a></li>
        <li class="nav_item"><a href="contact.php" class="nav_link">Contact</a></li>
        <li class="nav_item"><a href="register.php" class="nav_link">Sign up</a></li>
        <li class="nav_item"><a href="login.php" class="nav_link">Login</a></li>
        <li class="nav_item"><a href="profile.php" class="nav_link">Profile</a></li>
      </ul>
      <div class="nav_items">
        <form action="#" class="nav_form">
          <input
            type="text"
            class="nav_input"
            placeholder="search here...." />
          <img src="./image/search.png" alt="" class="nav_search" />
        </form>
        <a href="cart.php">
          <img src="./image/cart.png" alt="" class="nav_cart" />
        </a>

      </div>
      <span class="hamburger">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </span>
    </div>
  </nav>
  <nav class="mobile_nav mobile_nav_hide">
    <ul class="mobile_nav_list">
      <li class="mobile_nav_item">
        <a href="home.php" class="mobile_nav_link">Home</a>
      </li>
      <li class="mobile_nav_item">
        <a href="about.php" class="mobile_nav_link">About</a>
      </li>
      <li class="mobile_nav_item">
        <a href="contact.php" class="mobile_nav_link">Contact</a>
      </li>
      <li class="mobile_nav_item">
        <a href="register.php" class="mobile_nav_link">Sign Up</a>
      </li>
      <li class="mobile_nav_item">
        <a href="check-out.php" class="mobile_nav_link">Cart</a>
      </li>
      <li class="mobile_nav_item">
        <a href="profile.php" class="mobile_nav_link">Profile</a>
      </li>
    </ul>
    <?php

  $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
  $row_count = mysqli_num_rows($select_rows);

  ?>


  <!-- Display the cart count -->
  <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

  <div id="menu-btn" class="fas fa-bars"></div>

  </nav>


  <header class="header">
    <div class="container header_container">
      <div class="header_filter"></div>
      <img src="./image/header-2.png" alt="" class="treanding_img" />
    </div>
  </header>

  <section class="section">
    <div class="container">
      <div class="section_category">
        <p class="section_category_p">Our Products</p>
      </div>
      <div class="section_header">
        <h3 class="section_title">Explore Our Products</h3>
      </div>

      <?php

      if (isset($message)) {
        foreach ($message as $message) {
          echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
        };
      };

      ?>

      <div class="container">
        <section class="products">
          <div class="box-container">

            <?php

            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if (mysqli_num_rows($select_products) > 0) {
              while ($fetch_product = mysqli_fetch_assoc($select_products)) {
            ?>

                <form action="" method="post">
                  <div class="box">
                    <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
                    <h3><?php echo $fetch_product['name']; ?></h3>
                    <div class="price">RM<?php echo $fetch_product['price']; ?></div>
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                    <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                  </div>
                </form>

            <?php
              };
            };
            ?>

        </section>
      </div>

      <section class="section">
        <div class="container">
          <div class="trending">
            <div class="trending_content">
              <p class="trending_p">Printing Solutions</p>
              <h2 class="trending_title">Bring Your Ideas to Life with High-Quality Printing</h2>
              <p class="trending_description">
                From business cards to custom merchandise, we offer premium printing services to help you stand out. Get vibrant colors, durable materials, and fast delivery — all at unbeatable prices.
              </p>
              <a class="trending_btn">Hazuno Creative</a>
            </div>
            <img src="./image/image2.jpg" alt="Printing Services" class="trending_img" />
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">

          <section id="testimonials">
            <div class="testimonial-heading">
              <h1>Review customer</h1>
            </div>

            <!--testimonials-box-container-->
            <div class="testimonial-box-container">

              <!--box 1-->
              <div class="testimonial-box">
                <div class="box-top">
                  <div class="profile"></div>
                  <div class="profile-img">
                    <img src="./image/service/review.jpg" />
                  </div>
                  <div class="name-user">
                    <strong>Taufiq Ijaz</strong>
                    <span>@taufiq</span>
                  </div>
                  <div class="reviews">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>

                <div class="client-comment">
                  <p>I’m extremely impressed with Hazuno Creative! The print quality was outstanding, and their team was very professional and responsive. Highly recommend for everyone!</p>
                </div>
              </div>

              <!--box 1-->
              <div class="testimonial-box">
                <div class="box-top">
                  <div class="profile"></div>
                  <div class="profile-img">
                    <img src="./image/service/review.jpg" />
                  </div>
                  <div class="name-user">
                    <strong>Khadijah</strong>
                    <span>@khad_here</span>
                  </div>
                  <div class="reviews">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>

                <div class="client-comment">
                  <p>Hazuno Creative delivered my bulk order ahead of schedule without compromising on quality. Their attention to detail and commitment to customer satisfaction really stand out.</p>
                </div>
              </div>

              <!--box 1-->
              <div class="testimonial-box">
                <div class="box-top">
                  <div class="profile"></div>
                  <div class="profile-img">
                    <img src="./image/service/review.jpg" />
                  </div>
                  <div class="name-user">
                    <strong>Aisyah Zamri</strong>
                    <span>@syahzamri</span>
                  </div>
                  <div class="reviews">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>

                <div class="client-comment">
                  <p>The online ordering process was smooth and easy to navigate. I appreciated the live preview feature, which gave me confidence in the final product. Fantastic experience overall!</p>
                </div>
              </div>

              <!--box 1-->
              <div class="testimonial-box">
                <div class="box-top">
                  <div class="profile"></div>
                  <div class="profile-img">
                    <img src="./image/service/review.jpg" />
                  </div>
                  <div class="name-user">
                    <strong>Syazwani</strong>
                    <span>@syazwani</span>
                  </div>
                  <div class="reviews">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                </div>

                <div class="client-comment">
                  <p>Hazuno Creative Enterprise exceeded my expectations with their personalized designs and top-notch customer support. Their team truly understands what the client needs. Will definitely order again!</p>
                </div>
              </div>

            </div>
          </section>

          <section class="section">
            <div class="container services_container">
              <div class="service">
                <img src="./image/service/service-1.png" alt="" class="service_img" />
                <h3 class="service_title">FAST AND FREE DELIVERY</h3>
                <p class="service_p">Get your orders delivered quickly and at no extra cost, right to your doorstep.</p>
              </div>
              <div class="service">
                <img src="./image/service/service-2.png" alt="" class="service_img" />
                <h3 class="service_title">24/7 SUPPORT</h3>
                <p class="service_p">Our customer support is available around the clock to assist you with any inquiries.</p>
              </div>
              <div class="service">
                <img src="./image/service/service-3.png" alt="" class="service_img" />
                <h3 class="service_title">MONEY BACK GUARANTEE</h3>
                <p class="service_p">Shop with confidence knowing we offer a full refund if you're not satisfied.</p>
              </div>
            </div>
          </section>

          <footer class="footer">
            <div class="container footer_container">
              <div class="footer_item">
                <a href="#" class="footer_logo">Hazuno Creative Enterprise</a>
                <div class="footer_p">
                  Experience premium quality printing services with fast delivery and dedicated customer support.
                </div>
              </div>

              <div class="footer_item">
                <h3 class="footer_item_titl">Contact Us</h3>
                <ul class="footer_list">
                  <li class="li footer_list_item">Chukai Kemaman, Terengganu</li>
                  <li class="li footer_list_item">support@hazunocreative.com</li>
                  <li class="li footer_list_item">+60 12 345 6789</li>
                  <li class="li footer_list_item">+60 11 234 5678</li>
                </ul>
              </div>

              <div class="footer_item">
                <h3 class="footer_item_titl">Quick Links</h3>
                <ul class="footer_list">
                  <li class="li footer_list_item"><a href="/account.html">Account</a></li>
                  <li class="li footer_list_item"><a href="sign-up.php">Login / Register</a></li>
                  <li class="li footer_list_item"><a href="cart.php">Cart</a></li>
                  <li class="li footer_list_item"><a href="index.php">Shop</a></li>
                </ul>
              </div>

              <div class="footer_item">
                <h3 class="footer_item_titl">Resources</h3>
                <ul class="footer_list">
                  <li class="li footer_list_item"><a href="/privacy-policy.html"></a>Privacy Policy</li>
                  <li class="li footer_list_item"><a href="/terms.html"></a>Terms of Service</li>
                  <li class="li footer_list_item"><a href="about.php">FAQ's</a></li>
                  <li class="li footer_list_item"><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="footer_bottom">
              <div class="container footer_bottom_container">
                <p class="footer_copy">
                Hazuno Creative Enterprise Printing 2020. All rights reserved.
                </p>
              </div>
            </div>
          </footer>

          <!--custom script.js-->
          <script src="js/script.js"></script>
          <!-- Swiper JS -->
          <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
          <script src="./js/app.js"></script>
</body>

</html>