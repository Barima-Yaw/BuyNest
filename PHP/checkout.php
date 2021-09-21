<?php
  require "header.php";
?>

    <main>
      <!-- Contact cards  -->
      <section class="main">
        <h1>Shopping Checkout</h1>

        <div class="billing">
          <div class="main-form">
            <h3>Billing Information</h3>

            <form action="#">
              <label for="First Name">First Name</label>
              <input class="half" type="text" name="First Name" required />

              <label for="Last Name">Last Name</label>
              <input class="half" type="text" name="Last Name" required />

              <label for="Company Name"
                >Company Name <small>(Optional)</small></label
              >
              <input type="text" name="Company Name" />

              <label for="Country/Region">Country / Region</label>
              <div class="opt">
                <select name="Country/Region" required>
                  <option value="Afganistan">Afghanistan</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Angola">Angola</option>
                  <option value="Anguilla">Anguilla</option>
                  <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia">Armenia</option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaijan">Azerbaijan</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Belgium">Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Benin">Benin</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bonaire">Bonaire</option>
                  <option value="Bosnia & Herzegovina">
                    Bosnia & Herzegovina
                  </option>
                  <option value="Botswana">Botswana</option>
                  <option value="Brazil">Brazil</option>
                  <option value="British Indian Ocean Ter">
                    British Indian Ocean Ter
                  </option>
                  <option value="Brunei">Brunei</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Burkina Faso">Burkina Faso</option>
                  <option value="Burundi">Burundi</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Cameroon">Cameroon</option>
                  <option value="Canada">Canada</option>
                  <option value="Canary Islands">Canary Islands</option>
                  <option value="Cape Verde">Cape Verde</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Central African Republic">
                    Central African Republic
                  </option>
                  <option value="Chad">Chad</option>
                  <option value="Channel Islands">Channel Islands</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmas Island">Christmas Island</option>
                  <option value="Cocos Island">Cocos Island</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Comoros">Comoros</option>
                  <option value="Congo">Congo</option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Cote DIvoire">Cote DIvoire</option>
                  <option value="Croatia">Croatia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Curaco">Curacao</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Djibouti">Djibouti</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="East Timor">East Timor</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Equatorial Guinea">Equatorial Guinea</option>
                  <option value="Eritrea">Eritrea</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Ethiopia">Ethiopia</option>
                  <option value="Falkland Islands">Falkland Islands</option>
                  <option value="Faroe Islands">Faroe Islands</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="French Guiana">French Guiana</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="French Southern Ter">
                    French Southern Ter
                  </option>
                  <option value="Gabon">Gabon</option>
                  <option value="Gambia">Gambia</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Germany">Germany</option>
                  <option value="Ghana">Ghana</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Great Britain">Great Britain</option>
                  <option value="Greece">Greece</option>
                  <option value="Greenland">Greenland</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guam">Guam</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Guyana">Guyana</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Hawaii">Hawaii</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="India">India</option>
                  <option value="Iran">Iran</option>
                  <option value="Iraq">Iraq</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Isle of Man">Isle of Man</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati">Kiribati</option>
                  <option value="Korea North">Korea North</option>
                  <option value="Korea Sout">Korea South</option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option value="Laos">Laos</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Lesotho">Lesotho</option>
                  <option value="Liberia">Liberia</option>
                  <option value="Libya">Libya</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macau">Macau</option>
                  <option value="Macedonia">Macedonia</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malaysia">Malaysia</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Martinique">Martinique</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mayotte">Mayotte</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Midway Islands">Midway Islands</option>
                  <option value="Moldova">Moldova</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Montserrat">Montserrat</option>
                  <option value="Morocco">Morocco</option>
                  <option value="Mozambique">Mozambique</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Nambia">Nambia</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Netherland Antilles">
                    Netherland Antilles
                  </option>
                  <option value="Netherlands">
                    Netherlands (Holland, Europe)
                  </option>
                  <option value="Nevis">Nevis</option>
                  <option value="New Caledonia">New Caledonia</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Nicaragua">Nicaragua</option>
                  <option value="Niger">Niger</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Niue">Niue</option>
                  <option value="Norfolk Island">Norfolk Island</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau Island">Palau Island</option>
                  <option value="Palestine">Palestine</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru">Peru</option>
                  <option value="Phillipines">Philippines</option>
                  <option value="Pitcairn Island">Pitcairn Island</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal">Portugal</option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Republic of Montenegro">
                    Republic of Montenegro
                  </option>
                  <option value="Republic of Serbia">Republic of Serbia</option>
                  <option value="Reunion">Reunion</option>
                  <option value="Romania">Romania</option>
                  <option value="Russia">Russia</option>
                  <option value="Rwanda">Rwanda</option>
                  <option value="St Barthelemy">St Barthelemy</option>
                  <option value="St Eustatius">St Eustatius</option>
                  <option value="St Helena">St Helena</option>
                  <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                  <option value="St Lucia">St Lucia</option>
                  <option value="St Maarten">St Maarten</option>
                  <option value="St Pierre & Miquelon">
                    St Pierre & Miquelon
                  </option>
                  <option value="St Vincent & Grenadines">
                    St Vincent & Grenadines
                  </option>
                  <option value="Saipan">Saipan</option>
                  <option value="Samoa">Samoa</option>
                  <option value="Samoa American">Samoa American</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Sao Tome & Principe">
                    Sao Tome & Principe
                  </option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Senegal">Senegal</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Sierra Leone">Sierra Leone</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Slovakia">Slovakia</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="Somalia">Somalia</option>
                  <option value="South Africa">South Africa</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="Sudan">Sudan</option>
                  <option value="Suriname">Suriname</option>
                  <option value="Swaziland">Swaziland</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syria">Syria</option>
                  <option value="Tahiti">Tahiti</option>
                  <option value="Taiwan">Taiwan</option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Tanzania">Tanzania</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Togo">Togo</option>
                  <option value="Tokelau">Tokelau</option>
                  <option value="Tonga">Tonga</option>
                  <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                  <option value="Tunisia">Tunisia</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                  <option value="Tuvalu">Tuvalu</option>
                  <option value="Uganda">Uganda</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Erimates">
                    United Arab Emirates
                  </option>
                  <option selected value="United States of America">
                    United States of America
                  </option>
                  <option value="Uraguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Vatican City State">Vatican City State</option>
                  <option value="Venezuela">Venezuela</option>
                  <option value="Vietnam">Vietnam</option>
                  <option value="Virgin Islands (Brit)">
                    Virgin Islands (Brit)
                  </option>
                  <option value="Virgin Islands (USA)">
                    Virgin Islands (USA)
                  </option>
                  <option value="Wake Island">Wake Island</option>
                  <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Zaire">Zaire</option>
                  <option value="Zambia">Zambia</option>
                  <option value="Zimbabwe">Zimbabwe</option>
                </select>
              </div>

              <label for="Street Address">Street Address</label>
              <input type="text" name="Street Address" required />

              <label for="Town / City">Town / City</label>
              <div class="opt">
                <select class="half" name="Town / City" required>
                  <option value="Illinois">Illinois</option>
                  <option value="New York">New York</option>
                  <option value="California">California</option>
                  <option value="Los Angeles">Los Angeles</option>
                  <option value="Chicago">Chicago</option>
                  <option value="Houston">Houston</option>
                </select>
              </div>

              <label for="State">State</label>
              <div class="opt">
                <select class="half" name="State" required>
                  <option value="New York">New York</option>
                  <option value="California">California</option>
                  <option value="Los Angeles">Los Angeles</option>
                  <option value="Chicago">Chicago</option>
                  <option value="Illinois">Illinois</option>
                  <option value="Houston">Houston</option>
                </select>
              </div>

              <label for="Postal Zip">Postal Zip</label>
              <input class="half" type="text" name="Postal Zip" required />

              <label for="Phone">Phone</label>
              <input class="half" type="tel" name="Phone" required />

              <label for="Email Address">Email Address</label>
              <input type="email" name="Email Address" required />

              <label for="check">Ship To Different Address</label>
              <input class="check" type="checkbox" name="check" />

              <label for="text-box">Specific Notes</label>
              <textarea
                name="text-box"
                placeholder="Special Delivery Notes"
              ></textarea>
            </form>
          </div>

          <aside>
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
            <div class="side-form1">
              <input type="checkbox" />
              <label>Direct Bank Transfer</label>
            </div>

            <div class="side-form2">
              <input type="checkbox" />
              <label>Cash On Delivery</label>
            </div>

            <div class="side-form3">
              <input type="checkbox" />
              <label>Paypal</label>
              <img src="../Images/images/paypal_logo.png" />
              <li>
                Pay via PayPal; you can pay with your credit card if you don't
                have a PayPal account
              </li>
            </div>

            <div class="side-form4">
              <input type="checkbox" />
              <label>Payment On Card</label>
              <img src="../Images/images/payment_card.png" alt="" />
            </div>
            <div class="side-form5">
              <input type="checkbox" />
              <span>I have read and agree to all terms and conditions*</span>
            </div>
            <a href="../Html/orderCompleted.html">Complete order</a>
          </aside>
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
                <a href="../index.html"
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
                <li><a href="../Html/contacts.html">Help Center</a></li>
                <li><a href="../Html/terms and conditions.html">Returns</a></li>
                <li>
                  <a href="../Html/terms and conditions.html"
                    >Product Recalls</a
                  >
                </li>
                <li><a href="../Html/about.html">Accessibility</a></li>
                <li><a href="../Html/contacts.html">Contact Us</a></li>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-sm-6">
            <div class="footer-widget mb-50">
              <div class="fw-title mb-35">
                <h5>Quick Links</h5>
              </div>
              <div class="fw-link">
                <li>
                  <a href="../Html/terms and conditions.html">Return Policy</a>
                </li>
                <li>
                  <a href="../Html/terms and conditions.html">Terms Of Use</a>
                </li>
                <li>
                  <a href="../Html/terms and conditions.html">Security</a>
                </li>
                <li><a href="../Html/terms and conditions.html">Privacy</a></li>
                <li><a href="../Html/about.html">Store Pickup</a></li>
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
                    Copyright © 2021 <a href="../index.html">BuyNest</a> All
                    Rights Reserved.
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
    <!-- Bootstrap Script -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
