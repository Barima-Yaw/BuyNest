<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="user-scalable=no, width=device-width, initial-scale=1.0"
    />
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <!-- Favicon -->
    <link
      rel="shortcut icon"
      href="../Images/logo/IMG_7328 - Copy1.heic"
      type="image/x-icon"
    />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../Css/style.css" />
    <link rel="stylesheet" href="../Css/others.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- End of Stylesheets -->

    <title>BuyNest-eCommerce</title>
  </head>

  <body>
    <header>
      <!-- Header section  -->
      <section class="first-bar">
        <div class="logo">
          <img src="../Images/logo/IMG_7328 - Copy1.heic" alt="Buynest Logo" />
        </div>

        <!-- Navbar elements -->
        <nav class="dropdown">
          <a href="../index.php" class="list-item"> Home </a>
          <a href="../PHP/about.php" class="list-item about">About</a>
          <!-- <div class="pages">
            <button class="list-item">
              Pages <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </button>
            <ul>
              <li><a href="../PHP/account.php">My Account</a></li>
              <li><a href="../PHP/404.php">404 page</a></li>
              <li>
                <a href="../PHP/terms and conditions.php"
                  >Terms and conditions</a
                >
              </li>
            </ul>
          </div>
          <div class="blog">
            <button class="list-item">
              Blog <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </button>
            <ul>
              <li><a href="../PHP/standardBlog.php">Standard Blog</a></li>
              <li><a href="../PHP/classicBlog.php">Classic Blog</a></li>
              <li><a href="../PHP/blogDetails.php">Blog Details</a></li>
            </ul>
          </div>
          <div class="shop">
            <button class="list-item">
              Shop <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </button>
            <ul>
              <li><a href="../PHP/shopSidebar.php">Shop-sidebar</a></li>
              <li><a href="../PHP/shopDetails.php">Shop-details</a></li>
              <li><a href="../PHP/wishlist.php">Wishlist</a></li>
              <li><a href="../PHP/checkout.php">Checkout</a></li>
            </ul>
          </div> -->
          <a href="../PHP/special.php" class="list-item special">Special</a>
          <a href="../PHP/contacts.php" class="list-item contacts"
            >Contacts</a
          >
        </nav>
        <!-- Navbar End  -->

        <!-- Icons  -->
        <div class="icons">
          <a href="../PHP/cart.php">
            <i class="fas fa-cart-arrow-down"></i>
            Cart
          </a>
          <a href="../PHP/wishlist.php">
            <i class="far fa-heart"></i>
            Wishlist
          </a>
          <a href="../PHP/account.php">
            <i class="fas fa-user-circle"></i>
            Profile
          </a>
        </div>
        <div class="hamburger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </section>
      <!-- Icons end  -->

      <!-- Search, Inventory and Extras  -->
      <!-- <section class="second-bar" id="top">
        <div> -->
      <!-- <div class="inventory">
            <button id="inventory">
              <i class="fas fa-ellipsis-v"></i>
              Inventory<i class="fa fa-chevron-down" aria-hidden="true"></i>
            </button>
            <ul class="sub submenu" id="sub">
              <div class="pop-left">
                <button>
                  <a href="#"> Accessories & Parts</a>
                  <i class="fa fa-chevron-right aria-hidden="true"></i>
                </button>
                  <div class="popover">
                    <div class="menu-items">
                      <li>Accessories & Parts</li>
                        <ol>
                          <a href="#">Cables & Adapters</a>
                          <a href="#">Batteries</a>
                          <a href="#">Chargers</a>
                          <a href="#">TV Receivers</a>
                        </ol>
                    </div>
                    <div class="menu-items">
                        <li>Smart Electronics</li>
                        <ol>
                          <a href="#">Cables & Adapters</a>
                          <a href="#">Batteries</a>
                          <a href="#">Chargers</a>
                          <a href="#">TV Receivers</a>
                        </ol>
                      </div>
                      <div class="menu-items">
                        <li>Accessories & Parts</li>
                        <ol>
                          <a href="#">Cables & Adapters</a>
                          <a href="#">Batteries</a>
                          <a href="#">Chargers</a>
                          <a href="#">TV Receivers</a>
                        </ol>
                        </div>  
                        <div class="menu-items">
  
                        <li>Electronic Cigarettes</li>
                        <ol>
                          <a href="#">Cables & Adapters</a>
                          <a href="#">Batteries</a>
                          <a href="#">Chargers</a>
                          <a href="#">TV Receivers</a>
                        </ol>
                        </div>
                        <div class="menu-items">
  
                        <li>Portable Audio & Video</li>
                        <ol>
                          <a href="#">Cables & Adapters</a>
                          <a href="#">Batteries</a>
                          <a href="#">Chargers</a>
                          <a href="#">TV Receivers</a>
                        </ol>
                        </div>  
                        <div class="menu-items">
  
                        <li>Audio & Video</li>
                          <img src="../Images/images/megamenu_banner.jpg"/>
                    </div>
                  </div>
              </div>
              
                <div class="pop-left">
                  <button>
                    <a href="#"> Cables & Adapters</a>
                    <i class="fa fa-chevron-right aria-hidden="true"></i>
                  </button>
                  <div class="popover">
                    <div class="menu-items">
                      <li>Accessories & Parts</li>
                        <ol>
                          <a href="#">Cables & Adapters</a>
                          <a href="#">Batteries</a>
                          <a href="#">Chargers</a>
                          <a href="#">TV Receivers</a>
                        </ol>
                    </div>
                    <div class="menu-items">
                        <li>Smart Electronics</li>
                        <ol>
                          <a href="#">Cables & Adapters</a>
                          <a href="#">Batteries</a>
                          <a href="#">Chargers</a>
                          <a href="#">TV Receivers</a>
                        </ol>
                      </div>
                      <div class="menu-items">
                        <li>Accessories & Parts</li>
                        <ol>
                          <a href="#">Cables & Adapters</a>
                          <a href="#">Batteries</a>
                          <a href="#">Chargers</a>
                          <a href="#">TV Receivers</a>
                        </ol>
                        </div>  
                        <div class="menu-items">
    
                        <li>Electronic Cigarettes</li>
                        <ol>
                          <a href="#">Cables & Adapters</a>
                          <a href="#">Batteries</a>
                          <a href="#">Chargers</a>
                          <a href="#">TV Receivers</a>
                        </ol>
                        </div>
                        <div class="menu-items">
    
                        <li>Portable Audio & Video</li>
                        <ol>
                          <a href="#">Cables & Adapters</a>
                          <a href="#">Batteries</a>
                          <a href="#">Chargers</a>
                          <a href="#">TV Receivers</a>
                        </ol>
                        </div>  
                        <div class="menu-items">
    
                        <li>Audio & Video</li>
                        <img src="../Images/images/megamenu_banner.jpg"/>

                    </div>
                  </div>
                </div>
              <li><a href="#">Batteries</a></li>
              <li><a href="#">Bags & Shoes</a></li>
              <li><a href="#">Electonic cigarettes</a></li>
              <li><a href="#">Audio & video</a></li>
              <li><a href="#">Television</a></li>
              <li><a href="#">TV Receivers</a></li>
              <div class="pop-left">
                <button>
                  <a href="#"> Projectors</a>
                  <i class="fa fa-chevron-right aria-hidden="true"></i>
                </button>
                <div class="popover">
                  <div class="menu-items">
                    <li>Accessories & Parts</li>
                      <ol>
                        <a href="#">Cables & Adapters</a>
                        <a href="#">Batteries</a>
                        <a href="#">Chargers</a>
                        <a href="#">TV Receivers</a>
                      </ol>
                  </div>
                  <div class="menu-items">
                      <li>Smart Electronics</li>
                      <ol>
                        <a href="#">Cables & Adapters</a>
                        <a href="#">Batteries</a>
                        <a href="#">Chargers</a>
                        <a href="#">TV Receivers</a>
                      </ol>
                    </div>
                    <div class="menu-items">
                      <li>Accessories & Parts</li>
                      <ol>
                        <a href="#">Cables & Adapters</a>
                        <a href="#">Batteries</a>
                        <a href="#">Chargers</a>
                        <a href="#">TV Receivers</a>
                      </ol>
                      </div>  
                      <div class="menu-items">
  
                      <li>Electronic Cigarettes</li>
                      <ol>
                        <a href="#">Cables & Adapters</a>
                        <a href="#">Batteries</a>
                        <a href="#">Chargers</a>
                        <a href="#">TV Receivers</a>
                      </ol>
                      </div>
                      <div class="menu-items">
  
                      <li>Portable Audio & Video</li>
                      <ol>
                        <a href="#">Cables & Adapters</a>
                        <a href="#">Batteries</a>
                        <a href="#">Chargers</a>
                        <a href="#">TV Receivers</a>
                      </ol>
                      </div>  
                      <div class="menu-items">
  
                      <li>Audio & Video</li>
                      <img src="../Images/images/megamenu_banner.jpg"/>

                  </div>
                </div>
              </div>
              <li><a href="#">Audio Amplifier Boards</a></li>
              <li><a href="#">TV Sticks</a></li>
            </ul>
          </div> -->
      <!-- <div class="divide"></div> -->
      <!-- <div class="search-box">
            <input
              class="search-input"
              id="categories"
              name="categories"
              placeholder="Search for more...."
            />

            <select id="categories">
              <option selected="">All categories</option>
              <option>Women's Clothing</option>
              <option>Men's Clothing</option>
              <option>Computer & Office</option>
              <option>Consumer Electronics</option>
              <option>Home & Garden</option>
              <option>Luggage & Bags</option>
              <option>Shoes</option>
              <option>Mother & Kids</option>
              <option>Beauty & Health</option>
              <option>Home Appliances</option>
              <option>Food</option>
              <option>Underwear & Sleepwear</option>
            </select>
            <button><i class="fas fa-search"></i></button>
          </div> -->
      <!-- <div class="divide"></div> -->
      <!-- <div class="extras">
            <button class="currency">
              <div class="icon">
                <i class="fas fa-pound-sign"></i>
                <span>Currency<i class="fas fa-caret-down"></i></span>
              </div>
              <ul>
                <li><a href="#"> ???/GHS</a></li>
                <li><a href="#"> $/USD <i class="flag flag-us"></i></a></li>
                <li><a href="#"> ??/GBP</a></li>
                <li><a href="#"> ???/EUR</a></li>
              </ul>
            </button>
            <a href="#"><i class="far fa-question-circle"></i> Help</a>
          </div> -->
      <!-- </section> -->
      <!-- Search, Inventory and Extras end -->

      <!-- Back to top button  -->
      <a href="#top" class="bottom" id="top-button">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
      </a>
      <!-- Button end  -->
    </header>
    <!-- Header end  -->

    <main>
      <section class="main">
        <h1>About Store</h1>
        <div class="content">
          <div class="info">
            <h2>Our Story</h2>
            <article>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting
                indust orem Ipsum has been the industry's standard dummy texever
                since the when anunknown printer took a galley of type and
                scrambled it to make a type specimen book.
              </p>

              <p>
                Dorem Ipsum is simply dummy consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam
              </p>
            </article>
            <h3>Our Mission</h3>
            <div class="icons">
              <div class="items">
                <i class="fas fa-tasks"></i>
                <div class="text">
                  <h4>324+</h4>
                  <p>Projects</p>
                </div>
              </div>
              <div class="separator"></div>
              <div class="items">
                <i class="fas fa-hand-holding-usd"></i>
                <div class="text">
                  <h4>GH??? 4M</h4>
                  <p>Income</p>
                </div>
              </div>
              <div class="separator"></div>
              <div class="items">
                <i class="fas fa-award"></i>
                <div class="text">
                  <h4>34+</h4>
                  <p>Awards</p>
                </div>
              </div>
            </div>
          </div>
          <div class="image">
            <img src="../Images/images/about_img.jpg" alt="about image" />
          </div>
        </div>

        <section class="experience">
          <h1>What To Expect</h1>
          <div class="container">
            <div class="cardd">
              <i class="fas fa-dragon"></i>
              <h3>Quick Delivery</h3>
              <article>
                <p>
                  Lorem Ipsum simply dumm the printing and dolore typesetting
                  indust orem Ipsum has been the lorem industry standard dummy
                  men book.
                </p>
                <p>Reliable and Responsible</p>
                <p>Within the blink of an eye</p>
              </article>
            </div>
            <div class="cardd">
              <i class="fas fa-money-check-alt"></i>
              <h3>Secure Payment</h3>
              <article>
                <p>
                  Lorem Ipsum simply dumm the printing and dolore typesetting
                  indust orem Ipsum has been the lorem industry standard dummy
                  men book.
                </p>
                <p>Easy and Efficient</p>
                <p>Money back in 15 days</p>
              </article>
            </div>
            <div class="cardd">
              <i class="fas fa-headset"></i>
              <h3>Customer Support</h3>
              <article>
                <p>
                  Lorem Ipsum simply dumm the printing and dolore typesetting
                  indust orem Ipsum has been the lorem industry standard dummy
                  men book.
                </p>
                <p>24/7 Support</p>
                <p>We are always at your service</p>
              </article>
            </div>
          </div>
        </section>
      </section>

      <section class="testimonials">
        <h1>Customer Reviews</h1>
        <!-- Swiper -->
        <div class="reviews">
          <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="../Images/images/testi_avatar01.png" />
                <h4>Julia Roberts</h4>
                <p>Hollywood Actor</p>
                <div class="rate">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i>
                </div>
                <article>
                  "In Promotion and advertising, a testimonial show consists of
                  a person's written spoken statement extolling the virtue of a
                  product"
                </article>
              </div>
              <div class="swiper-slide">
                <img src="../Images/images/testi_avatar02.png" />
                <h4>Matthew McConaughey</h4>
                <p>Hollywood Actor</p>
                <div class="rate">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i>
                </div>
                <article>
                  "In Promotion and advertising, a testimonial show consists of
                  a person's written spoken statement extolling the virtue of a
                  product"
                </article>
              </div>
              <div class="swiper-slide">
                <img src="../Images/images/testi_avatar03.png" />
                <h4>Angelina Jolie</h4>
                <p>Hollywood Actor</p>
                <div class="rate">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i>
                </div>
                <article>
                  "In Promotion and advertising, a testimonial show consists of
                  a person's written spoken statement extolling the virtue of a
                  product"
                </article>
              </div>
              <div class="swiper-slide">
                <img src="../Images/images/testi_avatar04.png" />
                <h4>Charlize Theron</h4>
                <p>Hollywood Actor</p>
                <div class="rate">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i>
                </div>
                <article>
                  "In Promotion and advertising, a testimonial show consists of
                  a person's written spoken statement extolling the virtue of a
                  product"
                </article>
              </div>
              <div class="swiper-slide">
                <img src="../Images/images/testi_avatar01.png" />
                <h4>Julia Roberts</h4>
                <p>Hollywood Actor</p>
                <div class="rate">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i>
                </div>
                <article>
                  "In Promotion and advertising, a testimonial show consists of
                  a person's written spoken statement extolling the virtue of a
                  product"
                </article>
              </div>
              <div class="swiper-slide">
                <img src="../Images/images/testi_avatar02.png" />
                <h4>Matthew McConaughey</h4>
                <p>Hollywood Actor</p>
                <div class="rate">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i>
                </div>
                <article>
                  "In Promotion and advertising, a testimonial show consists of
                  a person's written spoken statement extolling the virtue of a
                  product"
                </article>
              </div>
              <div class="swiper-slide">
                <img src="../Images/images/testi_avatar03.png" />
                <h4>Angelina Jolie</h4>
                <p>Hollywood Actor</p>
                <div class="rate">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i>
                </div>
                <article>
                  "In Promotion and advertising, a testimonial show consists of
                  a person's written spoken statement extolling the virtue of a
                  product"
                </article>
              </div>
              <div class="swiper-slide">
                <img src="../Images/images/testi_avatar04.png" />
                <h4>Charlize Theron</h4>
                <p>Hollywood Actor</p>
                <div class="rate">
                  <i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i><i class="fas fa-star"></i
                  ><i class="fas fa-star"></i>
                </div>
                <article>
                  "In Promotion and advertising, a testimonial show consists of
                  a person's written spoken statement extolling the virtue of a
                  product"
                </article>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>

      <section class="features">
        <div class="info">
          <img src="../Images/icon/core_features01.png" alt="" />
          <div class="text">
            <h5>Free shipping on over $50</h5>
            <p>Buy more! Pay less!</p>
          </div>
        </div>
        <div class="divider"></div>
        <div class="info">
          <img src="../Images/icon/core_features02.png" alt="" />
          <div class="text">
            <h5>Membership Discount</h5>
            <p>Enjoy exclusive deals</p>
          </div>
        </div>
        <div class="divider"></div>
        <div class="info">
          <img src="../Images/icon/core_features03.png" alt="" />
          <div class="text">
            <h5>Money Return</h5>
            <p>30 days money back guarantee</p>
          </div>
        </div>
        <div class="divider"></div>
        <div class="info">
          <img src="../Images/icon/core_features04.png" alt="" />
          <div class="text">
            <h5>Online Support</h5>
            <p>How may we help you?</p>
          </div>
        </div>
      </section>
      <section class="special-offer">
        <h1>BuyNest Top Sales</h1>

        <div class="info">
          <div class="text">
            <h3>Limited time offer</h3>
            <p>Up to <span>$50</span> off</p>
          </div>
          <div class="images">
            <img src="../Images/images/limited_offer_discount.png" alt="" />
            <img src="../Images/images/limited_offer_img.png" alt="" />
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="subscribe">
        <h3>Subscribe Now</h3>
        <div class="subscribe-field">
          <input type="email" placeholder="Enter email address" />
          <a href="#">Subscribe</a>
        </div>
      </div>
      <div class="more">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6">
            <div class="footer-widget mb-50">
              <div class="footer-logo mb-30">
                <a href="index.php"
                  ><img src="../Images/logo/IMG_7328 - Copy1.heic" alt=""
                /></a>
              </div>
              <div class="footer-text mb-35">
                <p>
                  Namkand sodales vel online best prices Amazon Check out ethnic
                  wear, formal wear western wear Blood Pressure Rate Monito.
                </p>
              </div>
              <div class="footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-sm-6">
            <div class="footer-widget mb-50">
              <div class="fw-title mb-35">
                <h5>Customer Service</h5>
              </div>
              <div class="fw-link">
                <li><a href="#">Help Center</a></li>
                <li><a href="#">Returns</a></li>
                <li><a href="#">Product Recalls</a></li>
                <li><a href="#">Accessibility</a></li>
                <li><a href="#">Contact Us</a></li>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-sm-6">
            <div class="footer-widget mb-50">
              <div class="fw-title mb-35">
                <h5>Quick Links</h5>
              </div>
              <div class="fw-link">
                <li><a href="#">Return Policy</a></li>
                <li><a href="#">Terms Of Use</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Store Pickup</a></li>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="footer-widget mb-50">
              <div class="fw-title mb-35">
                <h5>Customer Service</h5>
              </div>
              <div class="footer-contact">
                <li>
                  <i class="fas fa-map-marker-alt"></i> W898 RTower Stat, Suite
                  56 Brockland, CA 9622 United States
                </li>
                <li><i class="fas fa-phone"></i> 458-965-3224</li>
                <li>
                  <i class="fas fa-envelope-open"></i
                  ><a
                    href="../../cdn-cgi/l/email-protection.php"
                    class="__cf_email__"
                    data-cfemail="faa98f8a8a95888eba93949c95d4b99597"
                    >[email&#160;protected]</a
                  >
                </li>
                <li><i class="fas fa-fax"></i>458-965-3224</li>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="terminate">
        <div class="copyright-wrap copyright-style-two">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 col-md-6 text">
                <div class="copyright-text">
                  <p>
                    Copyright ?? 2021 <a href="#">BuyNest</a> All Rights
                    Reserved.
                  </p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 d-none d-md-block">
                <div class="payment-method-img text-right">
                  <img src="../Images/images/card_img.png" alt="img" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="../Js/main.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper('.mySwiper', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
          rotate: 10,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        }
      });
    </script>
    <!-- Bootstrap Script -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
