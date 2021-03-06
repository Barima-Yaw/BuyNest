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
      href="Images/logo/IMG_7328 - Copy1.heic"
      type="image/x-icon"
    />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="Css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    <!-- Glider Stylesheet -->
    <link rel="stylesheet" href="Css/glide.core.min.css">
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
          <img src="Images/logo/IMG_7328 - Copy1.heic" alt="Buynest Logo" />
        </div>

        <!-- Navbar elements -->
        <nav class="dropdown">
          <a href="index.php" class="home list-item">
              Home
          </a>
          <a href="PHP/about.php" class="list-item about">About</a>
          <!-- <div class="pages">
            <button class="list-item">
              Pages <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </button>
            <ul>
              <li><a href="PHP/account.php">My Account</a></li>
              <li><a href="PHP/404.php">404 page</a></li>
              <li>
                <a href="PHP/terms and conditions.php"
                  >Terms and conditions</a
                >
              </li>
            </ul>
          </div> -->
          <!-- <div class="blog">
            <button class="list-item">
              Blog <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </button>
            <ul>
              <li><a href="PHP/standardBlog.php">Standard Blog</a></li>
              <li><a href="PHP/classicBlog.php">Classic Blog</a></li>
              <li><a href="PHP/blogDetails.php">Blog Details</a></li>
            </ul>
          </div> -->
          <!-- <div class="shop">
            <button class="list-item">
              Shop <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </button>
            <ul>
              <li><a href="PHP/shopSidebar.php">Shop-sidebar</a></li>
              <li><a href="PHP/shopDetails.php">Shop-details</a></li>
              <li><a href="PHP/wishlist.php">Wishlist</a></li>
              <li><a href="PHP/checkout.php">Checkout</a></li>
            </ul>
          </div> -->
          <a href="PHP/special.php" class="list-item special">Special</a>
          <a href="PHP/contacts.php" class="list-item contacts">Contacts</a>
        </nav>
        <!-- Navbar End  -->

        <!-- Icons  -->
        <div class="icons">
          <a href="PHP/cart.php">
            <i class="fas fa-cart-arrow-down"></i>
            Cart
          </a>
          <a href="PHP/wishlist.php">
            <i class="far fa-heart"></i>
            Wishlist
          </a>
          <a href="PHP/account.php">
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
      <section class="second-bar" id="top">
        <div>
          <div class="inventory">
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
                          <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="PHP/shopSidebar.php">Batteries</a>
                          <a href="PHP/shopSidebar.php">Chargers</a>
                          <a href="PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                    </div>
                    <div class="menu-items">
                        <li>Smart Electronics</li>
                        <ol>
                          <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="PHP/shopSidebar.php">Batteries</a>
                          <a href="PHP/shopSidebar.php">Chargers</a>
                          <a href="PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                      </div>
                      <div class="menu-items">
                        <li>Accessories & Parts</li>
                        <ol>
                          <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="PHP/shopSidebar.php">Batteries</a>
                          <a href="PHP/shopSidebar.php">Chargers</a>
                          <a href="PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                        </div>  
                        <div class="menu-items">
  
                        <li>Electronic Cigarettes</li>
                        <ol>
                          <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="PHP/shopSidebar.php">Batteries</a>
                          <a href="PHP/shopSidebar.php">Chargers</a>
                          <a href="PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                        </div>
                        <div class="menu-items">
  
                        <li>Portable Audio & Video</li>
                        <ol>
                          <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="PHP/shopSidebar.php">Batteries</a>
                          <a href="PHP/shopSidebar.php">Chargers</a>
                          <a href="PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                        </div>  
                        <div class="menu-items">
  
                        <li>Audio & Video</li>
                          <img src="Images/images/megamenu_banner.jpg"/>
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
                          <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="PHP/shopSidebar.php">Batteries</a>
                          <a href="PHP/shopSidebar.php">Chargers</a>
                          <a href="PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                    </div>
                    <div class="menu-items">
                        <li>Smart Electronics</li>
                        <ol>
                          <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="PHP/shopSidebar.php">Batteries</a>
                          <a href="PHP/shopSidebar.php">Chargers</a>
                          <a href="PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                      </div>
                      <div class="menu-items">
                        <li>Accessories & Parts</li>
                        <ol>
                          <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="PHP/shopSidebar.php">Batteries</a>
                          <a href="PHP/shopSidebar.php">Chargers</a>
                          <a href="PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                        </div>  
                        <div class="menu-items">
  
                        <li>Electronic Cigarettes</li>
                        <ol>
                          <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="PHP/shopSidebar.php">Batteries</a>
                          <a href="PHP/shopSidebar.php">Chargers</a>
                          <a href="PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                        </div>
                        <div class="menu-items">
  
                        <li>Portable Audio & Video</li>
                        <ol>
                          <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="PHP/shopSidebar.php">Batteries</a>
                          <a href="PHP/shopSidebar.php">Chargers</a>
                          <a href="PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                        </div>  
                        <div class="menu-items">
  
                        <li>Audio & Video</li>
                          <img src="Images/images/megamenu_banner.jpg"/>
                    </div>
                  </div>
                </div>
              <li><a href="PHP/shopSidebar.php">Batteries</a></li>
              <li><a href="PHP/shopSidebar.php">Bags & Shoes</a></li>
              <li><a href="PHP/shopSidebar.php">Electonic cigarettes</a></li>
              <li><a href="PHP/shopSidebar.php">Audio & video</a></li>
              <li><a href="PHP/shopSidebar.php">Television</a></li>
              <li><a href="PHP/shopSidebar.php">TV Receivers</a></li>
              <div class="pop-left">
                <button>
                  <a href="#"> Projectors</a>
                  <i class="fa fa-chevron-right aria-hidden="true"></i>
                </button>
                <div class="popover">
                  <div class="menu-items">
                    <li>Accessories & Parts</li>
                      <ol>
                        <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                        <a href="PHP/shopSidebar.php">Batteries</a>
                        <a href="PHP/shopSidebar.php">Chargers</a>
                        <a href="PHP/shopSidebar.php">TV Receivers</a>
                      </ol>
                  </div>
                  <div class="menu-items">
                      <li>Smart Electronics</li>
                      <ol>
                        <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                        <a href="PHP/shopSidebar.php">Batteries</a>
                        <a href="PHP/shopSidebar.php">Chargers</a>
                        <a href="PHP/shopSidebar.php">TV Receivers</a>
                      </ol>
                    </div>
                    <div class="menu-items">
                      <li>Accessories & Parts</li>
                      <ol>
                        <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                        <a href="PHP/shopSidebar.php">Batteries</a>
                        <a href="PHP/shopSidebar.php">Chargers</a>
                        <a href="PHP/shopSidebar.php">TV Receivers</a>
                      </ol>
                      </div>  
                      <div class="menu-items">

                      <li>Electronic Cigarettes</li>
                      <ol>
                        <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                        <a href="PHP/shopSidebar.php">Batteries</a>
                        <a href="PHP/shopSidebar.php">Chargers</a>
                        <a href="PHP/shopSidebar.php">TV Receivers</a>
                      </ol>
                      </div>
                      <div class="menu-items">

                      <li>Portable Audio & Video</li>
                      <ol>
                        <a href="PHP/shopSidebar.php">Cables & Adapters</a>
                        <a href="PHP/shopSidebar.php">Batteries</a>
                        <a href="PHP/shopSidebar.php">Chargers</a>
                        <a href="PHP/shopSidebar.php">TV Receivers</a>
                      </ol>
                      </div>  
                      <div class="menu-items">

                      <li>Audio & Video</li>
                        <img src="Images/images/megamenu_banner.jpg"/>
                  </div>
                </div>
              </div>
              <li><a href="PHP/shopSidebar.php">Audio Amplifier Boards</a></li>
              <li><a href="PHP/shopSidebar.php">TV Sticks</a></li>
            </ul>
          </div>
          <div class="divide"></div>
          <div class="search-box">
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
          </div>
          <div class="divide"></div>
          <div class="extras">
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
            <a href="PHP/contacts.php"><i class="far fa-question-circle"></i> Help</a>
          </div>
      </section>
      <!-- Search, Inventory and Extras end -->

      <!-- Back to top button  -->
      <a href="#top" class="bottom" id="top-button">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
      </a>
      <!-- Button end  -->
    </header>
    <!-- Header end  -->

    <main>
      <!-- Carousel  -->
      <section class="carousel">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
              <img
                src="Images/slider/slider_img01.png"
                class="d-block w-100"
                alt="advertisement"
              />
              <div class="carousel-caption d-md-block">
                <h5>Save Up To 70% On Deals</h5>
                <a href="PHP/shopSidebar.php">Shop Now</a>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="10000">
              <img
                src="Images/slider/slider_img02.png"
                class="d-block w-100"
                alt="advertisement"
              />
              <div class="carousel-caption d-md-block">
                <h5>Mega Tv Deals Available</h5>
                <a href="PHP/shopSidebar.php">Shop Now</a>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="10000">
              <img
                src="Images/slider/t_slider_img01.png"
                class="d-block w-100"
                alt="advertisement"
              />
              <div class="carousel-caption d-md-block">
                <h5>Get On The Runway!!!</h5>
                <a href="PHP/shopSidebar.php">Shop Now</a>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="10000">
              <img
                src="Images/slider/t_slider_img02.png"
                class="d-block w-100"
                alt="advertisement"
              />
              <div class="carousel-caption d-md-block">
                <h5>Latest And Greatest Technology</h5>
                <a href="PHP/shopSidebar.php">Shop Now</a>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </button>
        </div>
      </section>
      <!-- Carousel end -->

      <section class="more">
        <div class="display">
          <img src="Images/images/top_cat_banner01.jpg" alt="">
        </div>
        <div class="display">
          <img src="Images/images/top_cat_banner02.jpg" alt="">
        </div>
        <div class="display">
          <img src="Images/images/top_cat_banner03.jpg" alt="">
        </div>
      </section>

      <!-- Features  -->
      <section class="features">
        <div class="info">
          <img src="Images/icon/core_features01.png" alt="" />
          <div class="text">
            <h5>Free shipping on over $50</h5>
            <p>Buy more! Pay less!</p>
          </div>
        </div>
        <div class="divider"></div>
        <div class="info">
          <img src="Images/icon/core_features02.png" alt="" />
          <div class="text">
            <h5>Membership Discount</h5>
            <p>Enjoy exclusive deals</p>
          </div>
        </div>
        <div class="divider"></div>
        <div class="info">
          <img src="Images/icon/core_features03.png" alt="" />
          <div class="text">
            <h5>Money Return</h5>
            <p>30 days money back guarantee</p>
          </div>
        </div>
        <div class="divider"></div>
        <div class="info">
          <img src="Images/icon/core_features04.png" alt="" />
          <div class="text">
            <h5>Online Support</h5>
            <p>How may we help you?</p>
          </div>
        </div>
      </section>
      <!-- End of features  -->

      <!-- Deals  -->
      <div class="deals">
        <div class="super-deals">
          <h1> Super Deals</h1>
            <!-- Swiper -->
            <div class="swiper-container mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="Images/product/sd_item01.png"/>
                <div class="info">
                  <h3>Vaccum Cleaner</h3>
                  <span>US$17.00</span>  <span>??? 50% off ???</span>
                </div>
              <a href="/PHP/shopSidebar.php">Shop Now</a>
            </div>
                <div class="swiper-slide">
                  <img src="Images/product/sd_item02.png"/>
                <div class="info">
                  <h3>Digital Tag</h3>
                  <span>US$17.00</span>  <span>??? 50% off ???</span>
                </div>
              <a href="/PHP/shopSidebar.php">Shop Now</a>
            </div>
                <div class="swiper-slide">
                  <img src="Images/product/sd_item03.png"/>
                <div class="info">
                  <h3>Vaccum Cleaner</h3>
                  <span>US$17.00</span>  <span>??? 50% off ???</span>
                </div>
              <a href="/PHP/shopSidebar.php">Shop Now</a>
            </div>
                <div class="swiper-slide">
                  <img src="Images/product/sd_item04.png"/>
                <div class="info">
                  <h3>Digital Camera</h3>
                  <span>US$17.00</span>  <span>??? 50% off ???</span>
                </div>
              <a href="/PHP/shopSidebar.php">Shop Now</a>
            </div>
                <div class="swiper-slide">
                  <img src="Images/product/sd_item05.png"/>
                <div class="info">
                  <h3>Laptop</h3>
                  <span>US$17.00</span>  <span>??? 50% off ???</span>
                </div>
              <a href="/PHP/shopSidebar.php">Shop Now</a>
            </div>
                <div class="swiper-slide">
                  <img src="Images/product/sd_item06.png"/>
                <div class="info">
                  <h3>Web Cam</h3>
                  <span>US$17.00</span>  <span>??? 50% off ???</span>
                </div>
              <a href="/PHP/shopSidebar.php">Shop Now</a>
            </div>
                <div class="swiper-slide">
                  <img src="Images/product/sd_item07.png"/>
                <div class="info">
                  <h3>Air Conditioner</h3>
                  <span>US$17.00</span>  <span>??? 50% off ???</span>
                </div>
              <a href="/PHP/shopSidebar.php">Shop Now</a>
            </div>
                <div class="swiper-slide">
                  <img src="Images/product/sd_item08.png"/>
                <div class="info">
                  <h3>Game Controller</h3>
                  <span>US$17.00</span>  <span>??? 50% off ???</span>
                </div>
              <a href="/PHP/shopSidebar.php">Shop Now</a>
            </div>
                <div class="swiper-slide">
                  <img src="Images/product/special_item_img01.png"/>
                  <div class="info">
                  <h3>Leather Watch</h3>
                  <span>US$17.00</span>  <span>??? 50% off ???</span>
                </div>
                <a href="/PHP/shopSidebar.php">Shop Now</a>
                </div>
                <div class="swiper-slide">
                  <img src="Images/product/special_item_img02.png"/>
                  <div class="info">
                  <h3>Headphones</h3>
                  <span>US$17.00</span>  <span>??? 50% off ???</span>
                </div>
                <a href="/PHP/shopSidebar.php">Shop Now</a>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div class="top-deal">
          <div class="headline">
            <h1>Top Deal!</h1>
            Get up to <span>15%</span>off this deal
              <a href="#">Shop now</a>
          </div>
          <img src="Images/product/special_offer_banner.jpg" />
        </div>
      </div>
      <!-- Deals End  -->
      
      <!-- Top collection  -->
      <section class="top-collection">
        <h1>Top collection</h1>
        <div class="container">
          <div class="clothing">
            <h3>Clothing Shop</h3>
            <div class="img">
              <img src="Images/product/clothing_item01.jpg" />
              <img src="Images/product/clothing_item02.jpg" />
              <img src="Images/product/clothing_item03.jpg" />
              <img src="Images/product/clothing_item04.jpg" />
            </div>
            <a href="PHP/special.php">See More...</a>
          </div>
          <div class="technology">
            <h3>Technology Shop</h3>
            <div class="img">
              <img src="Images/product/super_deal_item01.jpg" />
              <img src="Images/product/super_deal_item02.jpg" />
              <img src="Images/product/super_deal_item03.jpg" />
              <img src="Images/product/super_deal_item04.jpg" />
            </div>
            <a href="PHP/special.php" >See More...</a>
          </div>
        </div>
      </section>
      <!-- End of top collection  -->

      <!-- Best selling  -->
      <section class="exclusive">
        <h1>Best Selling Products</h1>
        <ul class="nav">
          <a href="#">Best Sellers</a>
          <a href="#">Featured</a>
          <a href="#">Hot Sell</a>
          <a href="#">Trending</a>
        </ul>
        <div class="container">
          <div class="products">
            <div>
              <div class="img-box">
                  <img src="Images/product/exclusive_product01.jpg"/>
                  <div class="interact">
                    <a href="PHP/cart.php"><i class="fas fa-cart-plus"></i></a>
                    <a href="PHP/wishlist.php"><i class="far fa-heart"></i></a>
                  </div>
                  <a href="PHP/shopSidebar.php">Shop Now</i></a>
              </div>
              <div class="product-details">
                <div class="rating">
                    <a>35% off</a>
                  <del>??129.00</del>
                </div>
              </div>
              <div class="pricing">
                  BuyNest Beard Trimmer
                <span>??39.00</span>
              </div>
              </div>
            <div>
              <div class="img-box">
                  <img src="Images/product/exclusive_product02.jpg"/>
                  <div class="interact">
                    <a href="PHP/cart.php"><i class="fas fa-cart-plus"></i></a>
                    <a href="PHP/wishlist.php"><i class="far fa-heart"></i></a>
                  </div>
                  <a href="PHP/shopSidebar.php">Shop Now</i></a>
              </div>
              <div class="product-details">
                <div class="rating">
                    <a>35% off</a>
                  <del>??129.00</del>
                </div>
              </div>
              <div class="pricing">
                  Summer Party Dress
                <span>??39.00</span>
              </div>
              </div>
            <div>
              <div class="img-box">
                  <img src="Images/product/exclusive_product03.jpg"/>
                  <div class="interact">
                    <a href="PHP/cart.php"><i class="fas fa-cart-plus"></i></a>
                    <a href="PHP/wishlist.php"><i class="far fa-heart"></i></a>
                  </div>
                  <a href="PHP/shopSidebar.php">Shop Now</i></a>
              </div>
              <div class="product-details">
                <div class="rating">
                    <a>35% off</a>
                  <del>??129.00</del>
                </div>
              </div>
              <div class="pricing">
                  Men's Leather Shoe
                <span>??39.00</span>
              </div>
              </div>
            <div>
              <div class="img-box">
                  <img src="Images/product/exclusive_product04.jpg"/>
                  <div class="interact">
                    <a href="PHP/cart.php"><i class="fas fa-cart-plus"></i></a>
                    <a href="PHP/wishlist.php"><i class="far fa-heart"></i></a>
                  </div>
                  <a href="PHP/shopSidebar.php">Shop Now</i></a>
              </div>
              <div class="product-details">
                <div class="rating">
                    <a>35% off</a>
                  <del>??129.00</del>
                </div>
              </div>
              <div class="pricing">
                  Classic Mechanical Watch
                <span>??39.00</span>
              </div>
              </div>
            <div>
              <div class="img-box">
                  <img src="Images/product/exclusive_product05.jpg"/>
                  <div class="interact">
                    <a href="PHP/cart.php"><i class="fas fa-cart-plus"></i></a>
                    <a href="PHP/wishlist.php"><i class="far fa-heart"></i></a>
                  </div>
                  <a href="PHP/shopSidebar.php">Shop Now</i></a>
              </div>
              <div class="product-details">
                <div class="rating">
                    <a>35% off</a>
                  <del>??129.00</del>
                </div>
              </div>
              <div class="pricing">
                  Web Cam
                <span>??39.00</span>
              </div>
              </div>
            <div>
              <div class="img-box">
                  <img src="Images/product/exclusive_product06.jpg"/>
                  <div class="interact">
                    <a href="PHP/cart.php"><i class="fas fa-cart-plus"></i></a>
                    <a href="PHP/wishlist.php"><i class="far fa-heart"></i></a>
                  </div>
                  <a href="PHP/shopSidebar.php">Shop Now</i></a>
              </div>
              <div class="product-details">
                <div class="rating">
                    <a>35% off</a>
                  <del>??129.00</del>
                </div>
              </div>
              <div class="pricing">
                  Flagship Laptop
                <span>??39.00</span>
              </div>
              </div>
            
          </div>
          <div class="banner">
            <img src="Images/product/exclusive_banner.jpg" alt="banner">
          </div>
        </div>
      </section>
      <!-- End of best selling  -->

      <!-- Banners  -->
      <div class="banners">
        <div class="main">
          <img src="Images/images/top_cat_banner04.jpg" alt="">
        </div>
        <div class="side">
          <div class="first">
            <img src="Images/images/top_cat_banner06.jpg" alt="">
          </div>
          <div class="second">
            <img src="Images/images/top_cat_banner05.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- Banners end  -->

      <!-- Most popular  -->
      <section class="most-popular">
        <h1>Most Popular</h1>
        <!-- Glider Js -->
        <div class="container">
          <div class="glide">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides">
                <li class="glide__slide">
              <img src="Images/product/most_popular_01.jpg" alt="product">
            <div class="info">
              <h5>Stylish Smart Watch</h5>
              <div class="price">
                <span>$49.00</span>
                <span> ??? 50% off ??? </span>
              </div>
              <div class="prog">
                <strong>Total Sold: 350</strong>
                <strong>Stock: 3456</strong>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width:10%; height: 6px; background: #048a10;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <a href="/PHP/shopSidebar.php">Shop Now</a>
            </div>
                <li class="glide__slide">
              <img src="Images/product/most_popular_02.jpg" alt="product">
            <div class="info">
              <h5>Stylish Smart Watch</h5>
              <div class="price">
                <span>$49.00</span>
                <span> ??? 50% off ??? </span>
              </div>
              <div class="prog">
                <strong>Total Sold: 350</strong>
                <strong>Stock: 3456</strong>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width:10%; height: 6px; background: #048a10;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <a href="/PHP/shopSidebar.php">Shop Now</a>
            </div>
                <li class="glide__slide">
              <img src="Images/product/most_popular_03.jpg" alt="product">
            <div class="info">
              <h5>Stylish Smart Watch</h5>
              <div class="price">
                <span>$49.00</span>
                <span> ??? 50% off ??? </span>
              </div>
              <div class="prog">
                <strong>Total Sold: 350</strong>
                <strong>Stock: 3456</strong>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width:10%; height: 6px; background: #048a10;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <a href="/PHP/shopSidebar.php">Shop Now</a>
            </div>
                <li class="glide__slide">
              <img src="Images/product/most_popular_01.jpg" alt="product">
            <div class="info">
              <h5>Stylish Smart Watch</h5>
              <div class="price">
                <span>$49.00</span>
                <span> ??? 50% off ??? </span>
              </div>
              <div class="prog">
                <strong>Total Sold: 350</strong>
                <strong>Stock: 3456</strong>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width:10%; height: 6px; background: #048a10;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <a href="/PHP/shopSidebar.php">Shop Now</a>
            </div>
                <li class="glide__slide">
              <img src="Images/product/most_popular_02.jpg" alt="product">
            <div class="info">
              <h5>Stylish Smart Watch</h5>
              <div class="price">
                <span>$49.00</span>
                <span> ??? 50% off ??? </span>
              </div>
              <div class="prog">
                <strong>Total Sold: 350</strong>
                <strong>Stock: 3456</strong>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width:10%; height: 6px; background: #048a10;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <a href="/PHP/shopSidebar.php">Shop Now</a>
            </div>
                </li>
                <li class="glide__slide">
              <img src="Images/product/most_popular_03.jpg" alt="product">
            <div class="info">
              <h5>Stylish Smart Watch</h5>
              <div class="price">
                <span>$49.00</span>
                <span> ??? 50% off ??? </span>
              </div>
              <div class="prog">
                <strong>Total Sold: 350</strong>
                <strong>Stock: 3456</strong>
              </div>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width:10%; height: 6px; background: #048a10;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <a href="/PHP/shopSidebar.php">Shop Now</a>
            </div>
                </li>
              </ul>
              <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-chevron-left"></i></button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fas fa-chevron-right"></i></button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Most popular end -->

      <!-- <section class="news">
        <h1>Latest News Updates</h1>
        <div class="wrapper">
          <div class="card">
            <img src="Images/blog/blog_thumb01.jpg" />
            <div class="content">
              <h4>The Best London Fashion Week</h4>
              <div class="info">
                <a href="#"><i class="fas fa-user-shield"></i>admin</a>
                <span><i class="far fa-calendar-alt"></i>AUGUST 10, 2021</span>
              </div>
              Namkand sodales vel online best prices Amazon Check out ethnic wear, formal wear western wear Blood Pressure Rate Monito.
              <a href="#" class="button">Read more ...</a>
            </div>
          </div>
          <div class="card">
            <img src="Images/blog/blog_thumb02.jpg" />
            <div class="content">
              <h4>Find Products Display Racks</h4>
              <div class="info">
                <a href="#"><i class="fas fa-user-shield"></i>admin</a>
                <span><i class="far fa-calendar-alt"></i>AUGUST 10, 2021</span>
              </div>
              Namkand sodales vel online best prices Amazon Check out ethnic wear, formal wear western wear Blood Pressure Rate Monito.
              <a href="#" class="button">Read more ..</a>

            </div>
          </div>
          <div class="card">
            <img src="Images/blog/blog_thumb03.jpg" />
            <div class="content">
              <h4>That Will Instantly Update Outfit</h4>
              <div class="info">
                <a href="#"><i class="fas fa-user-shield"></i>admin</a>
                <span><i class="far fa-calendar-alt"></i>AUGUST 10, 2021</span>
              </div>
              Namkand sodales vel online best prices Amazon Check out ethnic wear, formal wear western wear Blood Pressure Rate Monito.
              <a href="#" class="button">Read more ..</a>
            </div>
          </div>
        </div>
      </section> -->
      <div class="final-banner">
        <img src="Images/product/deal_banner.jpg" alt="">
        <div class="ad-info">
          <h2>Get The Best Smart Watch Deals</h2>
          <p>Up to <span>35%</span> off</p>
          <a href="PHP/shopSidebar.php">Shop Now</a>
        </div>
      </div>
    </main>

    <footer id="footer">
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
                  ><img src="Images/logo/IMG_7328 - Copy1.heic" alt=""
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
                <li><a href="PHP/contacts.php">Help Center</a></li>
                <li><a href="PHP/terms and conditions.php">Returns</a></li>
                <li><a href="PHP/terms and conditions.php">Product Recalls</a></li>
                <li><a href="PHP/about.php">Accessibility</a></li>
                <li><a href="PHP/contacts.php">Contact Us</a></li>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-sm-6">
            <div class="footer-widget mb-50">
              <div class="fw-title mb-35">
                <h5>Quick Links</h5>
              </div>
              <div class="fw-link">
                <li><a href="PHP/terms and conditions.php">Return Policy</a></li>
                <li><a href="PHP/terms and conditions.php">Terms Of Use</a></li>
                <li><a href="PHP/terms and conditions.php">Security</a></li>
                <li><a href="PHP/terms and conditions.php">Privacy</a></li>
                <li><a href="PHP/about.php">Store Pickup</a></li>
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
                    Copyright ?? 2021 <a href="index.php">BuyNest</a> All Rights Reserved.
                  </p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 d-none d-md-block">
                <div class="payment-method-img text-right">
                  <img src="Images/images/card_img.png" alt="img" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts  -->
    <script src="Js/main.js"></script>
    <script>
      //Inventory Button
      const Inventory = document.getElementById('inventory');
      const sub = document.getElementById('sub');
          
      // Adding event listener to inventory button
      Inventory.addEventListener('click', () => {
        sub.classList.toggle('sub');
      });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <!-- Initialize Swipers -->
      <script>
        const swiper = new Swiper(".mySwiper", {
        autoplay: {
          delay: 10000,
          disableOnInteraction: false,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          968: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
          1224: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
        },
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        speed: 1000,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
      </script>

      <!-- Initialize Glider  -->
      <script>
        new Glide('.glide', {
          type: 'carousel',
          startAt: 0,
          perView: 4,
          gap: 25,
          autoplay: 10000,
          animationDuration: 1000,
          breakpoints: {
            1200: {
              perView: 2,
            },
            600: {
              perView: 1,
            }
          }
        }).mount()
      </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
