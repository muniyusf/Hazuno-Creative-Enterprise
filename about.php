<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Hazuno Creative Website</title>
  </head>
  <body>
    
    <nav class="nav">
      <div class="container nav_container">
        <a href="home.php" class="nav_logo">HAZUNO CREATIVE ENTERPRISE</a>
        <ul class="nav_list">
        <li class="nav_item"><a href="home.php" class="nav_link">Home</a></li>
        <li class="nav_item"><a href="about.php" class="nav_link">About</a></li>
        <li class="nav_item"><a href="contact.php" class="nav_link">Contact</a></li>
        <li class="nav_item"><a href="cart.php" class="nav_link">Cart</a></li>

        </ul>
        <div class="nav_items">
          <form action="#" class="nav_form">
            <input
              type="text"
              class="nav_input"
              placeholder="search here...." />
            <img src="./image/search.png" alt="" class="nav_search" />
          </form>
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
          <a href="cart.php" class="mobile_nav_link">Cart</a>
        </li>
      </ul>
    </nav>

    <section class="section">
      <div class="container story_container">
        <div class="story_content">
          <h3 class="story_content_title">Our Story</h3>
          <p class="story_content_p">
          Hazuno Creative Enterprise was founded with a clear mission: to make 
          printing services simple, seamless, and impactful. We started with a 
          small team and big dreams, aiming to be more than just another printing 
          company. We wanted to be a creative partner that helps our clients 
          leave a lasting impression. Today, we are proud to serve a wide range 
          of customers, from local entrepreneurs to large corporations, 
          all of whom trust us to handle their printing needs with care and precision.
          </p>
          
          <p class="story_content_p">
          Our journey has been fueled by a commitment to quality and customer 
          satisfaction. We believe that great prints start with great service, 
          which is why we offer personalized support, competitive pricing, 
          and quick turnaround times. From the initial design to the final product, 
          our team works closely with you every step of the way to ensure your 
          project exceeds expectations. At Hazuno, your vision is our passion, 
          and we are here to help you print your story.
          </p>
        </div>
        <div class="story_image">
          <img src="./image/image.png" alt="">
        </div>
      </div>
    </section>

    <div class="section section">
      <div class="container services_container">
          <div class="service service_outline">
            <img 
            src="./image/service/service-4.png" 
            alt="" 
            class="service_icon" />
            <h3 class="service_number">6.2K</h3>
            <p class="service_p">Sellers active our site</p>
          </div>

          <div class="service service_outline">
          <img 
            src="./image/service/service-5.png" 
            alt="" 
            class="service_icon" />
            <h3 class="service_number">7.5K</h3>
            <p class="service_p">Customer active in our site</p>
        </div>

        <div class="service service_outline">
          <img 
            src="./image/service/service-6.png" 
            alt="" 
            class="service_icon" />
            <h3 class="service_number">12.2K</h3>
            <p class="service_p">Anual gross sale in our site</p>
          </div>
      </div>
    </div>

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
            <li class="li footer_list_item">Account</a></li>
            <li class="li footer_list_item"><a href="register.php"></a>Register</li>
            <li class="li footer_list_item">Cart</a></li>
            <li class="li footer_list_item">Shop</a></li>
          </ul>
        </div>

          <div class="footer_item">
            <h3 class="footer_item_titl">Resources</h3>
            <ul class="footer_list">
              <li class="li footer_list_item">Privacy Policy</li>
              <li class="li footer_list_item">Terms of Service</li>
              <li class="li footer_list_item">FAQ's</a></li>
              <li class="li footer_list_item">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="footer_bottom">
          <div class="container footer_bottom_container">
            <p class="footer_copy">
              &copy; Hazuno Creative Enterprise Printing 2020. All rights reserved.
            </p>
          </div>
        </div>
      </footer>
      
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
      <script src="./js/app.js"></script>
      </body>
      </html>
      
  