<?php
  require "header.php";
?>

    <main>
      <section class="terms">
        <h1>SHOPPING CART</h1>
        <div class="cover">
          <div class="cart">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">SubTotal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">
                    <a href=""><i class="far fa-times-circle"></i></a>
                    <img src="../Images/product/wishlist_thumb01.jpg" alt="" />
                  </th>
                  <td class="prod">
                    <h5>Woman Leather Jacket</h5>
                    <p>Cramond Leopard & Python Anorak</p>
                    <p><span>⌂ 65% poly</span>, <span>35% rayon</span></p>
                  </td>
                  <td>GH₵29.00</td>
                  <td>2</td>
                  <td><span class="price">GH₵68.00</span></td>
                </tr>
                <tr>
                  <th scope="row">
                    <a href=""><i class="far fa-times-circle"></i></a>
                    <img src="../Images/product/wishlist_thumb02.jpg" alt="" />
                  </th>
                  <td class="prod">
                    <h5>Woman Leather Jacket</h5>
                    <p>Cramond Leopard & Python Anorak</p>
                    <p><span>⌂ 65% poly</span>, <span>35% rayon</span></p>
                  </td>
                  <td>GH₵29.00</td>
                  <td>2</td>
                  <td><span class="price">GH₵68.00</span></td>
                </tr>
              </tbody>
            </table>
            <div class="wrap">
              <div class="coupon">
                <input type="text" placeholder="Enter Coupon Code..." />
              </div>
              <a href="#" class="first">Apply Coupon</a>
              <a href="../PHP/shopDetails.php" class="second"
                >Continue Shopping</a
              >
            </div>
          </div>
          <div class="slip">
            <h3>Cart Totals</h3>
            <ul>
              <li>Subtotal <span>GH₵228.00</span></li>
              <li>
                Shipping
                <span>
                  <div class="group">
                    <input type="checkbox" />
                    <label>Flat Rate: GH₵20</label>
                  </div>
                  <div class="group">
                    <input type="checkbox" />
                    <label>Free Shipping</label>
                  </div>
                </span>
              </li>
            </ul>
            <p>Total <span>GH₵248.00</span></p>
            <a href="../PHP/checkout.php">Proceed to checkout</a>
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

<?php
  require "footer.php";
?>

