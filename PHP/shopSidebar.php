<?php
  require "header2.php";
?>

    <main>
      <section class="shop-main">
        <div class="shop-sidebar">
            <div class="sidebar-left">
                <div class="category">
                    <h4>PRODUCT CATEGORIES</h4>
                    <ul>
                        <li><span>&#10031 Accessories</span> <a href="#">27</a></li>
                        <li><span>&#10031 Leather Jacket</span> <a href="#">15</a></li>
                        <li><span>&#10031 Hoodies</span> <a href="#">18</a></li>
                        <li><span>&#10031 Man Shoes</span> <a href="#">17</a></li>
                        <li><span>&#10031 Baby Toys</span> <a href="#">10</a></li>
                        <li><span>&#10031 Kitchen Accessories</span> <a href="#">21</a></li>
                    </ul>
                </div>
                <div class="filter">
                    <h4>FILTER BY PRICE</h4>
                    <div class="range-slider">
                      <div class="slider-value">
                        <!-- <span>400</span> -->
                      </div>
                      <div class="field">
                        <div class="min-value">0</div>
                        <input type="range" min="0" max="1000" value="400" step="1">
                        <div class="max-value">1000</div>
                      </div>
                    </div>
                </div>
                <div class="new-product">
                    <h4>NEW PRODUCT</h4>
                  <!-- Swiper -->
                  <div class="swiper-container mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <a href="../Html/shopDetails.html">
                          <img src="../Images/product/sidebar_product01.jpg" alt="">
                          <div class="desc">
                            <div class="rate">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                            </div>
                            <p>Slim Fit Cotton</p>
                            <span>GH₵39.00</span>
                          </div>
                        </a>
                      </div>
                      <div class="swiper-slide">
                        <a href="../Html/shopDetails.html">
                          <img src="../Images/product/sidebar_product02.jpg" alt="">
                          <div class="desc">
                            <div class="rate">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                            </div>
                            <p>Slim Fit Cotton</p>
                            <span>GH₵39.00</span>
                          </div>
                        </a>
                      </div>
                      <div class="swiper-slide">
                        <a href="../Html/shopDetails.html">
                          <img src="../Images/product/sidebar_product03.jpg" alt="">
                          <div class="desc">
                            <div class="rate">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                            </div>
                            <p>Slim Fit Cotton</p>
                            <span>GH₵39.00</span>
                          </div>
                        </a>
                      </div>
                      <div class="swiper-slide">
                        <a href="../Html/shopDetails.html">
                          <img src="../Images/product/sidebar_product01.jpg" alt="">
                          <div class="desc">
                            <div class="rate">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                            </div>
                            <p>Slim Fit Cotton</p>
                            <span>GH₵39.00</span>
                          </div>
                        </a>
                      </div>
                      <div class="swiper-slide">
                        <a href="../Html/shopDetails.html">
                          <img src="../Images/product/sidebar_product02.jpg" alt="">
                          <div class="desc">
                            <div class="rate">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                            </div>
                            <p>Slim Fit Cotton</p>
                            <span>GH₵39.00</span>
                          </div>
                        </a>
                      </div>
                      <div class="swiper-slide">
                        <a href="../Html/shopDetails.html">
                          <img src="../Images/product/sidebar_product03.jpg" alt="">
                          <div class="desc">
                            <div class="rate">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="far fa-star"></i>
                            </div>
                            <p>Slim Fit Cotton</p>
                            <span>GH₵39.00</span>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                  </div>
                </div>
                <div class="brand">
                    <h4>PRODUCT BRAND</h4>
                    <div class="pick">
                        <span>
                            <input type="radio" name="Arrival" id="Arrival">
                            <label for="Arrival">New Arrivals</label>
                        </span>
                        <span>
                            <input type="radio" name="Accessories" id="Accessories">
                            <label for="Accessories">Clothing & Accessories</label>
                        </span>
                        <span>
                            <input type="radio" name="Jacket" id="Jacket">
                            <label for="Jacket">BuyNest Jacket</label>
                        </span>
                        <span>
                            <input type="radio" name="Electronics" id="Electronics">
                            <label for="Electronics">Home Electronics</label>
                        </span>
                    </div>
                    <div class="size">
                        <h4>SIZES</h4>
                        <div class="links">
                            <a href="#">S</a>
                            <a href="#">M</a>
                            <a href="#">L</a>
                            <a href="#">XL</a>
                        </div>
                    </div>
                    <div class="color">
                        <h4>FILTER BY COLOR</h4>
                        <div class="colors">
                            <ul>
                                <a href="#" class="green"></a href="#">
                                <a href="#" class="red"></a href="#">
                                <a href="#" class="blue"></a href="#">
                                <a href="#" class="yellow"></a href="#">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-right">
                <div class="right-top">
                    <span>Showing Products 1-12 of 10 Pages</span>
                    <span>
                        <a id="sort" class="active horizontal" href="#"><i class="fas fa-th-large"></i></a>
                        <a id="sort" class="vertical" href="#"><i class="fas fa-list-ul"></i></a>
                        <div class="options">
                            <select>
                                <option selected value="Default Sorting">Default Sorting</option>
                                <option value="">Free Shipping</option>
                                <option value="">Best Match</option>
                                <option value="">Newest Item</option>
                                <option value="">Size A-Z</option>
                            </select>
                        </div>
                    </span>
                </div>
                <div class="right-main">
                    <div class="products">
                        <div>
                            <div class="img-box">
                                <img src="../Images/product/t_exclusive_product01.jpg"/>
                                <img class="back" src="../Images/product/td_product_img01.jpg" alt="">
                                <div class="view-icons">
                                  <a href="../Html/wishlist.html"><i class="far fa-heart"></i></a>
                                  <a href="../Html/cart.html"><i class="fas fa-shopping-cart"></i></a>
                                  <a href="../Html/shopDetails.html"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="name">
                                <p>Luxury Fashion Bag</p>
                              </div>
                                <div class="rating">
                                    <a href="#">35% off</a>
                                  <del>£129.00</del>
                                </div>
                              <div class="prices">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                              </div>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="../Images/product/t_exclusive_product02.jpg"/>
                                <img class="back" src="../Images/product/td_product_img02.jpg" alt="">
                                <div class="view-icons">
                                  <a href="../Html/wishlist.html"><i class="far fa-heart"></i></a>
                                  <a href="../Html/cart.html"><i class="fas fa-shopping-cart"></i></a>
                                  <a href="../Html/shopDetails.html"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="name">
                                <p>Luxury Fashion Bag</p>
                              </div>
                                <div class="rating">
                                    <a href="#">35% off</a>
                                  <del>£129.00</del>
                                </div>
                              <div class="prices">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                              </div>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="../Images/product/t_exclusive_product03.jpg"/>
                                <img class="back" src="../Images/product/td_product_img03.jpg" alt="">
                                <div class="view-icons">
                                  <a href="../Html/wishlist.html"><i class="far fa-heart"></i></a>
                                  <a href="../Html/cart.html"><i class="fas fa-shopping-cart"></i></a>
                                  <a href="../Html/shopDetails.html"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="name">
                                <p>Luxury Fashion Bag</p>
                              </div>
                                <div class="rating">
                                    <a href="#">35% off</a>
                                  <del>£129.00</del>
                                </div>
                              <div class="prices">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                              </div>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="../Images/product/t_exclusive_product04.jpg"/>
                                <img class="back" src="../Images/product/td_product_img04.jpg" alt="">
                                <div class="view-icons">
                                  <a href="../Html/wishlist.html"><i class="far fa-heart"></i></a>
                                  <a href="../Html/cart.html"><i class="fas fa-shopping-cart"></i></a>
                                  <a href="../Html/shopDetails.html"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="name">
                                <p>Luxury Fashion Bag</p>
                              </div>
                                <div class="rating">
                                    <a href="#">35% off</a>
                                  <del>£129.00</del>
                                </div>
                              <div class="prices">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                              </div>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="../Images/product/t_exclusive_product05.jpg"/>
                                <img class="back" src="../Images/product/td_product_img05.jpg" alt="">
                                <div class="view-icons">
                                  <a href="../Html/wishlist.html"><i class="far fa-heart"></i></a>
                                  <a href="../Html/cart.html"><i class="fas fa-shopping-cart"></i></a>
                                  <a href="../Html/shopDetails.html"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="name">
                                <p>Luxury Fashion Bag</p>
                              </div>
                                <div class="rating">
                                    <a href="#">35% off</a>
                                  <del>£129.00</del>
                                </div>
                              <div class="prices">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                              </div>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="../Images/product/t_exclusive_product13.jpg"/>
                                <img class="back" src="../Images/product/td_product_img01.jpg" alt="">
                                <div class="view-icons">
                                  <a href="../Html/wishlist.html"><i class="far fa-heart"></i></a>
                                  <a href="../Html/cart.html"><i class="fas fa-shopping-cart"></i></a>
                                  <a href="../Html/shopDetails.html"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="name">
                                <p>Luxury Fashion Bag</p>
                              </div>
                                <div class="rating">
                                    <a href="#">35% off</a>
                                  <del>£129.00</del>
                                </div>
                              <div class="prices">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                              </div>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="../Images/product/t_exclusive_product07.jpg"/>
                                <img class="back" src="../Images/product/td_product_img02.jpg" alt="">
                                <div class="view-icons">
                                  <a href="../Html/wishlist.html"><i class="far fa-heart"></i></a>
                                  <a href="../Html/cart.html"><i class="fas fa-shopping-cart"></i></a>
                                  <a href="../Html/shopDetails.html"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="name">
                                <p>Luxury Fashion Bag</p>
                              </div>
                                <div class="rating">
                                    <a href="#">35% off</a>
                                  <del>£129.00</del>
                                </div>
                              <div class="prices">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                              </div>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="../Images/product/t_exclusive_product08.jpg"/>
                                <img class="back" src="../Images/product/td_product_img03.jpg" alt="">
                                <div class="view-icons">
                                  <a href="../Html/wishlist.html"><i class="far fa-heart"></i></a>
                                  <a href="../Html/cart.html"><i class="fas fa-shopping-cart"></i></a>
                                  <a href="../Html/shopDetails.html"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="name">
                                <p>Luxury Fashion Bag</p>
                              </div>
                                <div class="rating">
                                    <a href="#">35% off</a>
                                  <del>£129.00</del>
                                </div>
                              <div class="prices">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                              </div>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="../Images/product/t_exclusive_product09.jpg"/>
                                <img class="back" src="../Images/product/td_product_img04.jpg" alt="">
                                <div class="view-icons">
                                  <a href="../Html/wishlist.html"><i class="far fa-heart"></i></a>
                                  <a href="../Html/cart.html"><i class="fas fa-shopping-cart"></i></a>
                                  <a href="../Html/shopDetails.html"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="name">
                                <p>Luxury Fashion Bag</p>
                              </div>
                                <div class="rating">
                                    <a href="#">35% off</a>
                                  <del>£129.00</del>
                                </div>
                              <div class="prices">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                              </div>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="../Images/product/t_exclusive_product10.jpg"/>
                                <img class="back" src="../Images/product/td_product_img05.jpg" alt="">
                                <div class="view-icons">
                                  <a href="../Html/wishlist.html"><i class="far fa-heart"></i></a>
                                  <a href="../Html/cart.html"><i class="fas fa-shopping-cart"></i></a>
                                  <a href="../Html/shopDetails.html"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="name">
                                <p>Luxury Fashion Bag</p>
                              </div>
                                <div class="rating">
                                    <a href="#">35% off</a>
                                  <del>£129.00</del>
                                </div>
                              <div class="prices">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                              </div>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="../Images/product/t_exclusive_product11.jpg"/>
                                <img class="back" src="../Images/product/td_product_img01.jpg" alt="">
                                <div class="view-icons">
                                  <a href="../Html/wishlist.html"><i class="far fa-heart"></i></a>
                                  <a href="../Html/cart.html"><i class="fas fa-shopping-cart"></i></a>
                                  <a href="../Html/shopDetails.html"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="name">
                                <p>Luxury Fashion Bag</p>
                              </div>
                                <div class="rating">
                                    <a href="#">35% off</a>
                                  <del>£129.00</del>
                                </div>
                              <div class="prices">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                              </div>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="../Images/product/t_exclusive_product12.jpg"/>
                                <img class="back" src="../Images/product/td_product_img02.jpg" alt="">
                                <div class="view-icons">
                                  <a href="../Html/wishlist.html"><i class="far fa-heart"></i></a>
                                  <a href="../Html/cart.html"><i class="fas fa-shopping-cart"></i></a>
                                  <a href="../Html/shopDetails.html"><i class="fas fa-eye"></i></a>
                                </div>
                            </div>
                            <div class="name">
                                <p>Luxury Fashion Bag</p>
                              </div>
                                <div class="rating">
                                    <a href="#">35% off</a>
                                  <del>£129.00</del>
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
                    <div class="pagination">
                        <a class="prev" href="#"><i class="far fa-arrow-alt-circle-left"></i></a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">...</a>
                        <a href="#">10</a>
                        <a class="next" href="#"><i class="far fa-arrow-alt-circle-right"></i></a>
                    </div>
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
                <a href="index.html"
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
                    href="../../cdn-cgi/l/email-protection.html"
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
                    Copyright © 2021 <a href="#">BuyNest</a> All Rights Reserved.
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
    <script>
      //Inventory Button
      const Inventory = document.getElementById('inventory');
      const sub = document.getElementById('sub');
          
      // Adding event listener to inventory button
      Inventory.addEventListener('click', () => {
        sub.classList.toggle('sub');
      });
    </script>
    <!-- JQuery CDN  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

     <!-- Initialize Swiper -->
     <script>
      var swiper = new Swiper(".mySwiper", {
        direction: 'vertical',
        slidesPerView: 3,
        spaceBetween: 20,
        slidesPerGroup: 1,
        loop: true,
        speed: 700,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
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
