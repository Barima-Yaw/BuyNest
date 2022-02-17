<?php
  require "header.php";
?>

    <main>
      <!-- Contact cards  -->
      <section class="main">
        <h1>Contact Us</h1>
        <div class="container">
          <div class="card">
            <i class="fas fa-map-marked-alt"></i>
            <div class="text">
              <h5>Our Location</h5>
              <p>W898 RTower Stat, Suite 56 Brockland, CA 9622 United States</p>
            </div>
          </div>
          <div class="card">
            <i class="fas fa-envelope"></i>
            <div class="text">
              <h5>Our Email</h5>
              <p>
                Email Us:
                <a
                  href="../../cdn-cgi/l/email-protection.php"
                  class="__cf_email__"
                  data-cfemail="7625030606190402361f1810195835191b"
                  >[email&#160;protected]</a
                >
                BuyNestsupport.com
              </p>
            </div>
          </div>
          <div class="card">
            <i class="fas fa-phone"></i>
            <div class="text">
              <h5>Our Number</h5>
              <p>Contact Numbers: 458-965-3224 458-965-3224</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact cards end -->
      <section class="message">
        <h1>Send Us a Message</h1>
        <div class="fields">
          <img src="../Images/images/map.jpg" alt="" />
          <form action="#">
            <div class="group">
              <input type="text" placeholder="Fisrt Name" required />
              <i class="fas fa-user-alt"></i>
            </div>
            <div class="group">
              <input type="text" placeholder="Last Name" required />
              <i class="fas fa-user-alt"></i>
            </div>
            <div class="group">
              <input type="email" placeholder="Email" required />
              <i class="fas fa-envelope"></i>
            </div>
            <div class="group">
              <input type="tel" placeholder="Phone" required />
              <i class="fas fa-phone"></i>
            </div>
            <div class="text">
              <textarea
                name="message"
                placeholder="Type your message here"
              ></textarea>
            </div>
            <input class="button" type="button" value="submit" />
          </form>
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

<?php
  require "footer.php";
?>
