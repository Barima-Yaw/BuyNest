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
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
          <a href="../index.php" class="home list-item">
              Home
          </a>
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
          <a href="../PHP/contacts.php" class="list-item contacts">Contacts</a>
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
                          <a href="../PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="../PHP/shopSidebar.php">Batteries</a>
                          <a href="../PHP/shopSidebar.php">Chargers</a>
                          <a href="../PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                    </div>
                    <div class="menu-items">
                        <li>Smart Electronics</li>
                        <ol>
                          <a href="../PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="../PHP/shopSidebar.php">Batteries</a>
                          <a href="../PHP/shopSidebar.php">Chargers</a>
                          <a href="../PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                      </div>
                      <div class="menu-items">
                        <li>Accessories & Parts</li>
                        <ol>
                          <a href="../PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="../PHP/shopSidebar.php">Batteries</a>
                          <a href="../PHP/shopSidebar.php">Chargers</a>
                          <a href="../PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                        </div>  
                        <div class="menu-items">
  
                        <li>Electronic Cigarettes</li>
                        <ol>
                          <a href="../PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="../PHP/shopSidebar.php">Batteries</a>
                          <a href="../PHP/shopSidebar.php">Chargers</a>
                          <a href="../PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                        </div>
                        <div class="menu-items">
  
                        <li>Portable Audio & Video</li>
                        <ol>
                          <a href="../PHP/shopSidebar.php">Cables & Adapters</a>
                          <a href="../PHP/shopSidebar.php">Batteries</a>
                          <a href="../PHP/shopSidebar.php">Chargers</a>
                          <a href="../PHP/shopSidebar.php">TV Receivers</a>
                        </ol>
                        </div>  
                        <div class="menu-items">
  
                        <li>Audio & Video</li>
                          <img src="../Images/images/megamenu_banner.jpg"/>
                    </div>
                  </div>
                </div>
              <li><a href="../PHP/shopSidebar.php">Batteries</a></li>
              <li><a href="../PHP/shopSidebar.php">Bags & Shoes</a></li>
              <li><a href="../PHP/shopSidebar.php">Electonic cigarettes</a></li>
              <li><a href="../PHP/shopSidebar.php">Audio & video</a></li>
              <li><a href="../PHP/shopSidebar.php">Television</a></li>
              <li><a href="../PHP/shopSidebar.php">TV Receivers</a></li>
              <div class="pop-left">
                <button>
                  <a href="../#"> Projectors</a>
                  <i class="fa fa-chevron-right aria-hidden="true"></i>
                </button>
                <div class="popover">
                  <div class="menu-items">
                    <li>Accessories & Parts</li>
                      <ol>
                        <a href="../PHP/shopSidebar.php">Cables & Adapters</a>
                        <a href="../PHP/shopSidebar.php">Batteries</a>
                        <a href="../PHP/shopSidebar.php">Chargers</a>
                        <a href="../PHP/shopSidebar.php">TV Receivers</a>
                      </ol>
                  </div>
                  <div class="menu-items">
                      <li>Smart Electronics</li>
                      <ol>
                        <a href="../PHP/shopSidebar.php">Cables & Adapters</a>
                        <a href="../PHP/shopSidebar.php">Batteries</a>
                        <a href="../PHP/shopSidebar.php">Chargers</a>
                        <a href="../PHP/shopSidebar.php">TV Receivers</a>
                      </ol>
                    </div>
                    <div class="menu-items">
                      <li>Accessories & Parts</li>
                      <ol>
                        <a href="../PHP/shopSidebar.php">Cables & Adapters</a>
                        <a href="../PHP/shopSidebar.php">Batteries</a>
                        <a href="../PHP/shopSidebar.php">Chargers</a>
                        <a href="../PHP/shopSidebar.php">TV Receivers</a>
                      </ol>
                      </div>  
                      <div class="menu-items">

                      <li>Electronic Cigarettes</li>
                      <ol>
                        <a href="../PHP/shopSidebar.php">Cables & Adapters</a>
                        <a href="../PHP/shopSidebar.php">Batteries</a>
                        <a href="../PHP/shopSidebar.php">Chargers</a>
                        <a href="../PHP/shopSidebar.php">TV Receivers</a>
                      </ol>
                      </div>
                      <div class="menu-items">

                      <li>Portable Audio & Video</li>
                      <ol>
                        <a href="../PHP/shopSidebar.php">Cables & Adapters</a>
                        <a href="../PHP/shopSidebar.php">Batteries</a>
                        <a href="../PHP/shopSidebar.php">Chargers</a>
                        <a href="../PHP/shopSidebar.php">TV Receivers</a>
                      </ol>
                      </div>  
                      <div class="menu-items">

                      <li>Audio & Video</li>
                        <img src="../Images/images/megamenu_banner.jpg"/>
                  </div>
                </div>
              </div>
              <li><a href="../PHP/shopSidebar.php">Audio Amplifier Boards</a></li>
              <li><a href="../PHP/shopSidebar.php">TV Sticks</a></li>
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
                <li><a href="#"> ₵/GHS</a></li>
                <li><a href="#"> $/USD <i class="flag flag-us"></i></a></li>
                <li><a href="#"> £/GBP</a></li>
                <li><a href="#"> €/EUR</a></li>
              </ul>
            </button>
            <a href="../PHP/contacts.php"><i class="far fa-question-circle"></i> Help</a>
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