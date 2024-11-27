<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add this in the <head> section -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/styles.css">

    <title>Contact Us</title>
</head>

<body>

    <!-- Main Navigation Bar -->
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
                    <input type="text" class="nav_input" placeholder="search here...." />
                    <img src="./image/search.png" alt="" class="nav_search" />
                </form>
                <a href="/cart.php">
                    <img src="./image/cart.png" alt="" class="nav_cart" />
                </a>
            </div>
            <span class="hamburger">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </span>
        </div>
    </nav>

    <!-- Mobile Navigation -->
    <nav class="mobile_nav mobile_nav_hide">
        <ul class="mobile_nav_list">
            <li class="mobile_nav_item"><a href="home.php" class="mobile_nav_link">Home</a></li>
            <li class="mobile_nav_item"><a href="about.php" class="mobile_nav_link">About</a></li>
            <li class="mobile_nav_item"><a href="contact.php" class="mobile_nav_link">Contact</a></li>
            <li class="mobile_nav_item"><a href="register.php" class="mobile_nav_link">Sign Up</a></li>
            <li class="mobile_nav_item"><a href="cart.php" class="mobile_nav_link">Cart</a></li>
        </ul>
    </nav>

    <!-- Contact Section -->
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>OUR SERVICES IS READY FOR TAKE AN ORDER</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-map-pin"></i></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Chukai Kemaman, Terengganu</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+60 12 345 6789</p>
                        <p>+60 11 234 5678</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>support@hazunocreative.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Type your message..</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
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
            <li class="li footer_list_item"><a href="register.php"></a>Login / Register</a></li>
            <li class="li footer_list_item">Cart</a></li>
            <li class="li footer_list_item">Shop</a></li>
          </ul>
        </div>

            <div class="footer_item">
            <h3 class="footer_item_titl">Resources</h3>
            <ul class="footer_list">
              <li class="li footer_list_item">Privacy Policy</li>
              <li class="li footer_list_item">Terms of Service</li>
              <li class="li footer_list_item">FAQ's</li>
              <li class="li footer_list_item">Contact Us</li>
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

</body>

</html>