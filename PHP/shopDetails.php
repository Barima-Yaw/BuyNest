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
    <link rel="stylesheet" href="../Css/shop.css" />
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
          <a href="../index.php" class="home list-item"> Home </a>
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
      <!-- <div class="divide"></div>
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
      <section class="shop">
        <div class="shop-top">
          <h1>SHOP</h1>
        </div>

        <div class="shop-container">
          <div class="side-pane">
            <a href="#">
              <img src="../Images/product/sd_bottom01.jpg" alt="" />
            </a>
            <a href="#">
              <img src="../Images/product/sd_bottom02.jpg" alt="" />
            </a>
            <a href="#">
              <img src="../Images/product/sd_bottom03.jpg" alt="" />
            </a>
            <a href="#">
              <img src="../Images/product/sd_bottom04.jpg" alt="" />
            </a>
            <a href="#">
              <img src="../Images/product/sd_bottom05.jpg" alt="" />
            </a>
          </div>
          <div class="main-details">
            <div class="main-box">
              <div class="gallery">
                <a
                  class="image"
                  href="../Images/product/shop_details_img01.jpg"
                >
                  <img src="../Images/product/shop_details_img01.jpg" alt="" />
                </a>
              </div>
              <div class="img-info">
                <a href="#">In Stock</a>
                <h3>The Christina Fashion</h3>
                <div class="rate">
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <span>14 Customer Reviews</span>
                </div>
                <div class="pricing">
                  <span>GH???45.00</span>
                  <del>GH???90.00</del>
                </div>
                <p>
                  Cramond Leopard & Pythong Print Anorak Jacket In Beige but
                  also the leap into electronic typesetting, remaining
                </p>
                <div class="sizes">
                  <strong>Size : </strong> <span>Pick your adequate size</span>
                  <div class="size-boxes">
                    <a href="#">XS</a>
                    <a href="#">S</a>
                    <a href="#">M</a>
                    <a href="#">L</a>
                    <a href="#">XL</a>
                  </div>
                </div>
                <div class="amount">
                  <input type="text" value="1" />
                  <a href="../PHP/cart.php">Add to Cart</a>
                </div>
                <div class="wish">
                  <a href="../PHP/wishlist.php"
                    ><i class="fas fa-heart"></i> Add To Wishlist</a
                  >
                </div>
                <div class="extra">
                  <p>TAG : CLOTHING</p>
                  <p>CATEGORIES : WOMEN, MEN, CASUALWEAR</p>
                </div>
              </div>
            </div>
            <div class="gallery hide">
              <a class="image" href="../Images/product/shop_details_img2.png">
                <img src="../Images/product/shop_details_img2.png" alt="" />
              </a>
              <a class="image" href="../Images/product/shop_details_img3.png">
                <img src="../Images/product/shop_details_img3.png" alt="" />
              </a>
              <a class="image" href="../Images/product/shop_details_img4.png">
                <img
                  class="image"
                  src="../Images/product/shop_details_img4.png"
                  alt=""
                />
              </a>
              <a class="image" href="../Images/product/shop_details_img5.png">
                <img src="../Images/product/shop_details_img5.png" alt="" />
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="shop-extra">
        <ul>
          <a class="shopLink active" href="#details">Product Details</a>
          <a class="shopLink" href="#viewers">Viewers Also Like</a>
          <a class="shopLink" href="#details">Looks</a>
          <a class="shopLink" href="#reviews">Product Reviews</a>
        </ul>
        <div class="extra-box">
          <h3>Product Details</h3>
          <div class="extra-details" id="details">
            <img src="../Images/product/desc_img.jpg" alt="" />
            <div class="extra-desc">
              <h5>The Christina Fashion</h5>
              <p>
                Cramond Leopard & Pythong Print Anorak Jacket In Beige but also
                the leap into electronic typesetting, remaining Lorem Ipsum is
                simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type
                and scrambled it to make a type specimen book.
              </p>
              <ul>
                <li>65% poly, 35% rayon</li>
                <li>Hand wash cold</li>
                <li>Partially lined</li>
                <li>Hidden front button closurewith heyhole accents</li>
                <li>Button cuff sleeves</li>
                <li>Made in Vietnam</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="extra-banner">
          <img src="../Images/product/shop_details_add.jpg" alt="" />
          <span>BUYNEST</span>
        </div>
      </section>
      <section class="viewers" id="viewers">
        <!-- Swiper -->
        <div class="swiper-container mySwiper">
          <h3>Viewers Also Liked</h3>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div>
                <div class="img-box">
                  <img src="../Images/product/td_product_img01.jpg" />
                  <img
                    class="back"
                    src="../Images/product/t_exclusive_product01.jpg"
                    alt=""
                  />
                  <div class="view-icons">
                    <a href="../PHP/wishlist.php"
                      ><i class="far fa-heart"></i
                    ></a>
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                    <a href="#"><i class="fas fa-eye"></i></a>
                  </div>
                </div>
                <div class="name">
                  <p>Farfetch Mulberry Belted</p>
                </div>
                <div class="rating">
                  <a href="#">35% off</a>
                  <del>??129.00</del>
                </div>
                <div class="prices">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="img-box">
                  <img src="../Images/product/td_product_img02.jpg" />
                  <img
                    class="back"
                    src="../Images/product/t_exclusive_product03.jpg"
                    alt=""
                  />
                  <div class="view-icons">
                    <a href="../PHP/wishlist.php"
                      ><i class="far fa-heart"></i
                    ></a>
                    <a href="../PHP/cart.php"
                      ><i class="fas fa-shopping-cart"></i
                    ></a>
                    <a href="../PHP/shopDetails.php"
                      ><i class="fas fa-eye"></i
                    ></a>
                  </div>
                </div>
                <div class="name">
                  <p>Luxury Fashion Bag</p>
                </div>
                <div class="rating">
                  <a href="#">35% off</a>
                  <del>??129.00</del>
                </div>
                <div class="prices">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="img-box">
                  <img src="../Images/product/td_product_img03.jpg" />
                  <img
                    class="back"
                    src="../Images/product/t_exclusive_product04.jpg"
                    alt=""
                  />
                  <div class="view-icons">
                    <a href="../PHP/wishlist.php"
                      ><i class="far fa-heart"></i
                    ></a>
                    <a href="../PHP/cart.php"
                      ><i class="fas fa-shopping-cart"></i
                    ></a>
                    <a href="../PHP/shopDetails.php"
                      ><i class="fas fa-eye"></i
                    ></a>
                  </div>
                </div>
                <div class="name">
                  <p>Men's Leather Jacket</p>
                </div>
                <div class="rating">
                  <a href="#">35% off</a>
                  <del>??129.00</del>
                </div>
                <div class="prices">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="img-box">
                  <img src="../Images/product/td_product_img04.jpg" />
                  <img
                    class="back"
                    src="../Images/product/t_exclusive_product03.jpg"
                    alt=""
                  />
                  <div class="view-icons">
                    <a href="../PHP/wishlist.php"
                      ><i class="far fa-heart"></i
                    ></a>
                    <a href="../PHP/cart.php"
                      ><i class="fas fa-shopping-cart"></i
                    ></a>
                    <a href="../PHP/shopDetails.php"
                      ><i class="fas fa-eye"></i
                    ></a>
                  </div>
                </div>
                <div class="name">
                  <p>Women Brand T-shirt</p>
                </div>
                <div class="rating">
                  <a href="#">35% off</a>
                  <del>??129.00</del>
                </div>
                <div class="prices">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="img-box">
                  <img src="../Images/product/td_product_img05.jpg" />
                  <img
                    class="back"
                    src="../Images/product/t_exclusive_product01.jpg"
                    alt=""
                  />
                  <div class="view-icons">
                    <a href="../PHP/wishlist.php"
                      ><i class="far fa-heart"></i
                    ></a>
                    <a href="../PHP/cart.php"
                      ><i class="fas fa-shopping-cart"></i
                    ></a>
                    <a href="../PHP/shopDetails.php"
                      ><i class="fas fa-eye"></i
                    ></a>
                  </div>
                </div>
                <div class="name">
                  <p>Stylish Hand Bag</p>
                </div>
                <div class="rating">
                  <a href="#">35% off</a>
                  <del>??129.00</del>
                </div>
                <div class="prices">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </section>

      <section id="reviews">
        <h3>Product Reviews</h3>
        <div class="review-box">
          <span>Reviews for Luxury Fashion Bag</span>
          <div class="child">
            <div class="left">
              <div class="review">
                <img src="../Images/product/review_author_thumb01.jpg" alt="" />
                <div class="text">
                  <div class="head">
                    <h5>Miranda West</h5>
                    <span>April 4, 2021</span>
                  </div>
                  <p>
                    Cramond Leopard & Pythong Print Anorak Jacket In Beige but
                    also the leap into electronic typesetting, remaining.
                  </p>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              <div class="review">
                <img src="../Images/product/review_author_thumb02.jpg" alt="" />
                <div class="text">
                  <div class="head">
                    <h5>Ryan Reynolds</h5>
                    <span>April 4, 2021</span>
                  </div>
                  <p>
                    Cramond Leopard & Pythong Print Anorak Jacket In Beige but
                    also the leap into electronic typesetting, remaining.
                  </p>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              <div class="review">
                <img src="../Images/product/review_author_thumb03.jpg" alt="" />
                <div class="text">
                  <div class="head">
                    <h5>Naomi Campbell</h5>
                    <span>April 4, 2021</span>
                  </div>
                  <p>
                    Cramond Leopard & Pythong Print Anorak Jacket In Beige but
                    also the leap into electronic typesetting, remaining.
                  </p>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              <div class="review">
                <img src="../Images/product/review_author_thumb04.jpg" alt="" />
                <div class="text">
                  <div class="head">
                    <h5>Regina King</h5>
                    <span>April 4, 2021</span>
                  </div>
                  <p>
                    Cramond Leopard & Pythong Print Anorak Jacket In Beige but
                    also the leap into electronic typesetting, remaining.
                  </p>
                  <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              <a href="#">See more...</a>
            </div>
            <div class="right">
              <p>
                Your email address will not be published. Required fields are
                marked *
              </p>
              <h5>YOUR RATING</h5>
              <div class="stars">
                <input type="radio" name="star" id="star1" />
                <label for="star1"></label>
                <input type="radio" name="star" id="star2" />
                <label for="star2"></label>
                <input type="radio" name="star" id="star3" />
                <label for="star3"></label>
                <input type="radio" name="star" id="star4" />
                <label for="star4"></label>
                <input type="radio" name="star" id="star5" />
                <label for="star5"></label>
              </div>
              <textarea placeholder="Your review*" required></textarea>
              <div class="inputs">
                <input type="text" placeholder="Your Name*" required />
                <input type="email" placeholder="Your Email*" required />
              </div>
              <a href="#">Submit</a>
            </div>
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

    <!-- JQuery CDN  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper('.mySwiper', {
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
        slidesPerGroup: 1,
        loop: true,
        loopFillGroupWithBlank: true,
        autoplay: {
          delay: 12000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>

    <!-- Magnific Popup CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <!-- Magnific Popup Initialize -->
    <script>
      $(document).ready(function () {
        $('.gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          gallery: {
            enabled: true,
          },
        });
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
