 @include('ticketHub.include.navbar')


 <!-- Main Content -->
 <main id="rlr-main" class="rlr-main--fixed-top">
     <div class="rlr-section__content--md-top">
         <div class="rlr-section rlr-section__my">
             <div class="rlr-checkout">
                 <article id="post-7" class="post-7 page type-page status-publish hentry">
                     <div class="container-xxl">
                         <div class="entry-content">
                             <div class="woocommerce">
                                 <div class="woocommerce-info">
                                     <div class="rlr-page-title">

                                         <div>
                                             <h2 class="type-h3 rlr-page-title__title">Checkout</h2>

                                         </div>
                                     </div>
                                 </div>
                                
                                 <div class="woocommerce-notices-wrapper"></div>
                                 <form name="checkout" method="post" class="checkout woocommerce-checkout"
                                     novalidate="novalidate" action="{{ route('storeOrder') }}">
                                     @csrf
                                     <input type="hidden" name="event_id" value="{{ $events->id }}" />
                                     <input type="hidden" name="total_amount" id="total-amount-input" value="">
                                     <input type="hidden" name="numberOfTickets" id="total-tickets-input"
                                         value="">
                                     <div class="col2-set" id="customer_details">
                                         <div class="col-1">
                                             <div class="woocommerce-billing-fields">
                                                 <div class="woocommerce-billing-fields__field-wrapper">
                                                     <h6 class="checkout__section-title">
                                                         <span> Personal Information </span>
                                                     </h6>
                                                     <div class="checkout__personal-details">
                                                         <p class="form-row form-row-first validate-required"
                                                             id="" data-priority="10">
                                                             <label for="billing_first_name" class=""> First name
                                                             </label>
                                                             <span class="woocommerce-input-wrapper">
                                                                 <input type="text" class="input-text"
                                                                     name="first_name" id="billing_first_name"
                                                                     placeholder="John" value="{{ old('first_name') }}"
                                                                     autocomplete="given-name" />

                                                             </span>

                                                         </p>
                                                         <p class="form-row form-row-last validate-required"
                                                             id="billing_last_name_field" data-priority="20">
                                                             <label for="billing_last_name" class=""> Last name
                                                             </label>
                                                             <span class="woocommerce-input-wrapper">
                                                                 <input type="text" class="input-text"
                                                                     name="last_name" id="billing_last_name"
                                                                     placeholder="doe" value="{{ old('last_name') }}"
                                                                     autocomplete="family-name" />

                                                             </span>
                                                         </p>
                                                         <p class="form-row form-row-wide validate-required validate-phone"
                                                             id="billing_phone_field" data-priority="100">
                                                             <label for="billing_phone" class=""> Phone </label>
                                                             <span class="woocommerce-input-wrapper">
                                                                 <input type="tel" class="input-text" name="phone"
                                                                     id="billing_phone" placeholder="+"
                                                                     value="{{ old('phone') }}" autocomplete="tel" />

                                                             </span>
                                                         </p>
                                                         <p class="form-row form-row-wide validate-required validate-email"
                                                             id="billing_email_field" data-priority="110">
                                                             <label for="billing_email" class=""> Email </label>
                                                             <span class="woocommerce-input-wrapper">
                                                                 <input type="email" class="input-text" name="email"
                                                                     id="billing_email" placeholder="jd@emprise.tours"
                                                                     value="{{ old('email') }}"
                                                                     autocomplete="email" />

                                                             </span>
                                                         </p>

                                                         <div class="form-row form-row-wide address-field update_totals_on_change validate-required"
                                                             id="billing_country_field" data-priority="40">
                                                             <label for="billing_country"> Country </label>
                                                             <div class="woocommerce-input-wrapper">
                                                                 <select name="country" id="billing_country"
                                                                     class="country_to_state country_select select2-hidden-accessible"
                                                                     autocomplete="country"
                                                                     data-placeholder="Select a country / region…"
                                                                     data-label="Country / Region" tabindex="-1"
                                                                     aria-hidden="true">

                                                                     <option value="" selected="selected">Select
                                                                         country</option>
                                                                     <option value="AF">Afghanistan</option>
                                                                     <option value="AX">Åland Islands</option>
                                                                     <option value="AL">Albania</option>
                                                                     <option value="DZ">Algeria</option>
                                                                     <option value="AS">American Samoa</option>
                                                                     <option value="AD">Andorra</option>
                                                                     <option value="AO">Angola</option>
                                                                     <option value="AI">Anguilla</option>
                                                                     <option value="AQ">Antarctica</option>
                                                                     <option value="AG">Antigua and Barbuda
                                                                     </option>
                                                                     <option value="AR">Argentina</option>
                                                                     <option value="AM">Armenia</option>
                                                                     <option value="AW">Aruba</option>
                                                                     <option value="AU">Australia</option>
                                                                     <option value="AT">Austria</option>
                                                                     <option value="AZ">Azerbaijan</option>
                                                                     <option value="BS">Bahamas</option>
                                                                     <option value="BH">Bahrain</option>
                                                                     <option value="BD">Bangladesh</option>
                                                                     <option value="BB">Barbados</option>
                                                                     <option value="BY">Belarus</option>
                                                                     <option value="PW">Belau</option>
                                                                     <option value="BE">Belgium</option>
                                                                     <option value="BZ">Belize</option>
                                                                     <option value="BJ">Benin</option>
                                                                     <option value="BM">Bermuda</option>
                                                                     <option value="BT">Bhutan</option>
                                                                     <option value="BO">Bolivia</option>
                                                                     <option value="BQ">Bonaire, Saint Eustatius
                                                                         and Saba</option>
                                                                     <option value="BA">Bosnia and Herzegovina
                                                                     </option>
                                                                     <option value="BW">Botswana</option>
                                                                     <option value="BV">Bouvet Island</option>
                                                                     <option value="BR">Brazil</option>
                                                                     <option value="IO">British Indian Ocean
                                                                         Territory</option>
                                                                     <option value="BN">Brunei</option>
                                                                     <option value="BG">Bulgaria</option>
                                                                     <option value="BF">Burkina Faso</option>
                                                                     <option value="BI">Burundi</option>
                                                                     <option value="KH">Cambodia</option>
                                                                     <option value="CM">Cameroon</option>
                                                                     <option value="CA">Canada</option>
                                                                     <option value="CV">Cape Verde</option>
                                                                     <option value="KY">Cayman Islands</option>
                                                                     <option value="CF">Central African Republic
                                                                     </option>
                                                                     <option value="TD">Chad</option>
                                                                     <option value="CL">Chile</option>
                                                                     <option value="CN">China</option>
                                                                     <option value="CX">Christmas Island</option>
                                                                     <option value="CC">Cocos (Keeling) Islands
                                                                     </option>
                                                                     <option value="CO">Colombia</option>
                                                                     <option value="KM">Comoros</option>
                                                                     <option value="CG">Congo (Brazzaville)
                                                                     </option>
                                                                     <option value="CD">Congo (Kinshasa)</option>
                                                                     <option value="CK">Cook Islands</option>
                                                                     <option value="CR">Costa Rica</option>
                                                                     <option value="HR">Croatia</option>
                                                                     <option value="CU">Cuba</option>
                                                                     <option value="CW">Curaçao</option>
                                                                     <option value="CY">Cyprus</option>
                                                                     <option value="CZ">Czech Republic</option>
                                                                     <option value="DK">Denmark</option>
                                                                     <option value="DJ">Djibouti</option>
                                                                     <option value="DM">Dominica</option>
                                                                     <option value="DO">Dominican Republic</option>
                                                                     <option value="EC">Ecuador</option>
                                                                     <option value="EG">Egypt</option>
                                                                     <option value="SV">El Salvador</option>
                                                                     <option value="GQ">Equatorial Guinea</option>
                                                                     <option value="ER">Eritrea</option>
                                                                     <option value="EE">Estonia</option>
                                                                     <option value="ET">Ethiopia</option>
                                                                     <option value="FK">Falkland Islands</option>
                                                                     <option value="FO">Faroe Islands</option>
                                                                     <option value="FJ">Fiji</option>
                                                                     <option value="FI">Finland</option>
                                                                     <option value="FR">France</option>
                                                                     <option value="GF">French Guiana</option>
                                                                     <option value="PF">French Polynesia</option>
                                                                     <option value="TF">French Southern Territories
                                                                     </option>
                                                                     <option value="GA">Gabon</option>
                                                                     <option value="GM">Gambia</option>
                                                                     <option value="GE">Georgia</option>
                                                                     <option value="DE">Germany</option>
                                                                     <option value="GH">Ghana</option>
                                                                     <option value="GI">Gibraltar</option>
                                                                     <option value="GR">Greece</option>
                                                                     <option value="GL">Greenland</option>
                                                                     <option value="GD">Grenada</option>
                                                                     <option value="GP">Guadeloupe</option>
                                                                     <option value="GU">Guam</option>
                                                                     <option value="GT">Guatemala</option>
                                                                     <option value="GG">Guernsey</option>
                                                                     <option value="GN">Guinea</option>
                                                                     <option value="GW">Guinea-Bissau</option>
                                                                     <option value="GY">Guyana</option>
                                                                     <option value="HT">Haiti</option>
                                                                     <option value="HM">Heard Island and McDonald
                                                                         Islands</option>
                                                                     <option value="HN">Honduras</option>
                                                                     <option value="HK">Hong Kong</option>
                                                                     <option value="HU">Hungary</option>
                                                                     <option value="IS">Iceland</option>
                                                                     <option value="IN">India</option>
                                                                     <option value="ID">Indonesia</option>
                                                                     <option value="IR">Iran</option>
                                                                     <option value="IQ">Iraq</option>
                                                                     <option value="IE">Ireland</option>
                                                                     <option value="IM">Isle of Man</option>
                                                                     <option value="IL">Israel</option>
                                                                     <option value="IT">Italy</option>
                                                                     <option value="CI">Ivory Coast</option>
                                                                     <option value="JM">Jamaica</option>
                                                                     <option value="JP">Japan</option>
                                                                     <option value="JE">Jersey</option>
                                                                     <option value="JO">Jordan</option>
                                                                     <option value="KZ">Kazakhstan</option>
                                                                     <option value="KE">Kenya</option>
                                                                     <option value="KI">Kiribati</option>
                                                                     <option value="KW">Kuwait</option>
                                                                     <option value="KG">Kyrgyzstan</option>
                                                                     <option value="LA">Laos</option>
                                                                     <option value="LV">Latvia</option>
                                                                     <option value="LB">Lebanon</option>
                                                                     <option value="LS">Lesotho</option>
                                                                     <option value="LR">Liberia</option>
                                                                     <option value="LY">Libya</option>
                                                                     <option value="LI">Liechtenstein</option>
                                                                     <option value="LT">Lithuania</option>
                                                                     <option value="LU">Luxembourg</option>
                                                                     <option value="MO">Macao</option>
                                                                     <option value="MG">Madagascar</option>
                                                                     <option value="MW">Malawi</option>
                                                                     <option value="MY">Malaysia</option>
                                                                     <option value="MV">Maldives</option>
                                                                     <option value="ML">Mali</option>
                                                                     <option value="MT">Malta</option>
                                                                     <option value="MH">Marshall Islands</option>
                                                                     <option value="MQ">Martinique</option>
                                                                     <option value="MR">Mauritania</option>
                                                                     <option value="MU">Mauritius</option>
                                                                     <option value="YT">Mayotte</option>
                                                                     <option value="MX">Mexico</option>
                                                                     <option value="FM">Micronesia</option>
                                                                     <option value="MD">Moldova</option>
                                                                     <option value="MC">Monaco</option>
                                                                     <option value="MN">Mongolia</option>
                                                                     <option value="ME">Montenegro</option>
                                                                     <option value="MS">Montserrat</option>
                                                                     <option value="MA">Morocco</option>
                                                                     <option value="MZ">Mozambique</option>
                                                                     <option value="MM">Myanmar</option>
                                                                     <option value="NA">Namibia</option>
                                                                     <option value="NR">Nauru</option>
                                                                     <option value="NP">Nepal</option>
                                                                     <option value="NL">Netherlands</option>
                                                                     <option value="NC">New Caledonia</option>
                                                                     <option value="NZ">New Zealand</option>
                                                                     <option value="NI">Nicaragua</option>
                                                                     <option value="NE">Niger</option>
                                                                     <option value="NG">Nigeria</option>
                                                                     <option value="NU">Niue</option>
                                                                     <option value="NF">Norfolk Island</option>
                                                                     <option value="KP">North Korea</option>
                                                                     <option value="MK">North Macedonia</option>
                                                                     <option value="MP">Northern Mariana Islands
                                                                     </option>
                                                                     <option value="NO">Norway</option>
                                                                     <option value="OM">Oman</option>
                                                                     <option value="PK">Pakistan</option>
                                                                     <option value="PS">Palestinian Territory
                                                                     </option>
                                                                     <option value="PA">Panama</option>
                                                                     <option value="PG">Papua New Guinea</option>
                                                                     <option value="PY">Paraguay</option>
                                                                     <option value="PE">Peru</option>
                                                                     <option value="PH">Philippines</option>
                                                                     <option value="PN">Pitcairn</option>
                                                                     <option value="PL">Poland</option>
                                                                     <option value="PT">Portugal</option>
                                                                     <option value="PR">Puerto Rico</option>
                                                                     <option value="QA">Qatar</option>
                                                                     <option value="RE">Reunion</option>
                                                                     <option value="RO">Romania</option>
                                                                     <option value="RU">Russia</option>
                                                                     <option value="RW">Rwanda</option>
                                                                     <option value="BL">Saint Barthélemy</option>
                                                                     <option value="SH">Saint Helena</option>
                                                                     <option value="KN">Saint Kitts and Nevis
                                                                     </option>
                                                                     <option value="LC">Saint Lucia</option>
                                                                     <option value="SX">Saint Martin (Dutch part)
                                                                     </option>
                                                                     <option value="MF">Saint Martin (French part)
                                                                     </option>
                                                                     <option value="PM">Saint Pierre and Miquelon
                                                                     </option>
                                                                     <option value="VC">Saint Vincent and the
                                                                         Grenadines</option>
                                                                     <option value="WS">Samoa</option>
                                                                     <option value="SM">San Marino</option>
                                                                     <option value="ST">São Tomé and Príncipe
                                                                     </option>
                                                                     <option value="SA">Saudi Arabia</option>
                                                                     <option value="SN">Senegal</option>
                                                                     <option value="RS">Serbia</option>
                                                                     <option value="SC">Seychelles</option>
                                                                     <option value="SL">Sierra Leone</option>
                                                                     <option value="SG">Singapore</option>
                                                                     <option value="SK">Slovakia</option>
                                                                     <option value="SI">Slovenia</option>
                                                                     <option value="SB">Solomon Islands</option>
                                                                     <option value="SO">Somalia</option>
                                                                     <option value="ZA">South Africa</option>
                                                                     <option value="GS">South Georgia/Sandwich
                                                                         Islands</option>
                                                                     <option value="KR">South Korea</option>
                                                                     <option value="SS">South Sudan</option>
                                                                     <option value="ES">Spain</option>
                                                                     <option value="LK">Sri Lanka</option>
                                                                     <option value="SD">Sudan</option>
                                                                     <option value="SR">Suriname</option>
                                                                     <option value="SJ">Svalbard and Jan Mayen
                                                                     </option>
                                                                     <option value="SZ">Swaziland</option>
                                                                     <option value="SE">Sweden</option>
                                                                     <option value="CH">Switzerland</option>
                                                                     <option value="SY">Syria</option>
                                                                     <option value="TW">Taiwan</option>
                                                                     <option value="TJ">Tajikistan</option>
                                                                     <option value="TZ">Tanzania</option>
                                                                     <option value="TH">Thailand</option>
                                                                     <option value="TL">Timor-Leste</option>
                                                                     <option value="TG">Togo</option>
                                                                     <option value="TK">Tokelau</option>
                                                                     <option value="TO">Tonga</option>
                                                                     <option value="TT">Trinidad and Tobago
                                                                     </option>
                                                                     <option value="TN">Tunisia</option>
                                                                     <option value="TR">Turkey</option>
                                                                     <option value="TM">Turkmenistan</option>
                                                                     <option value="TC">Turks and Caicos Islands
                                                                     </option>
                                                                     <option value="TV">Tuvalu</option>
                                                                     <option value="UG">Uganda</option>
                                                                     <option value="UA">Ukraine</option>
                                                                     <option value="AE">United Arab Emirates
                                                                     </option>
                                                                     <option value="GB">United Kingdom (UK)
                                                                     </option>
                                                                     <option value="US">United States (US)</option>
                                                                     <option value="UM">United States (US) Minor
                                                                         Outlying Islands</option>
                                                                     <option value="UY">Uruguay</option>
                                                                     <option value="UZ">Uzbekistan</option>
                                                                     <option value="VU">Vanuatu</option>
                                                                     <option value="VA">Vatican</option>
                                                                     <option value="VE">Venezuela</option>
                                                                     <option value="VN">Vietnam</option>
                                                                     <option value="VG">Virgin Islands (British)
                                                                     </option>
                                                                     <option value="VI">Virgin Islands (US)
                                                                     </option>
                                                                     <option value="WF">Wallis and Futuna</option>
                                                                     <option value="EH">Western Sahara</option>
                                                                     <option value="YE">Yemen</option>
                                                                     <option value="ZM">Zambia</option>
                                                                     <option value="ZW">Zimbabwe</option>
                                                                 </select>

                                                             </div>
                                                         </div>
                                                         <p class="form-row address-field validate-required validate-postcode form-row-wide"
                                                             id="billing_postcode_field" data-priority="90"
                                                             data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                                             <label for="billing_postcode" class=""> Postal Code
                                                             </label>
                                                             <span class="woocommerce-input-wrapper">
                                                                 <input type="text" class="input-text"
                                                                     name="postalCode" id="billing_postcode"
                                                                     placeholder="000000"
                                                                     value="{{ old('postalCode') }}"
                                                                     autocomplete="postal-code" />
                                                             </span>
                                                         </p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="col-1">
                                             <div class="woocommerce-billing-fields">
                                                 <div class="woocommerce-billing-fields__field-wrapper">
                                                     <h6 class="checkout__section-title">
                                                         <span> Card Checkout </span>
                                                     </h6>
                                                     <div class="checkout__payment-details">
                                                         <p class="form-row form-row-wide validate-required"
                                                             id="card_name_field" data-priority="10">
                                                             <label for="card_name" class="">Cardholder
                                                                 Name</label>
                                                             <span class="woocommerce-input-wrapper">
                                                                 <input type="text" class="input-text"
                                                                     name="card_name" id="card_name"
                                                                     placeholder="Cardholder Name" value=""
                                                                     autocomplete="cardholder" />
                                                             </span>
                                                         </p>
                                                         <p class="form-row form-row-wide validate-required"
                                                             id="card_number_field" data-priority="20">
                                                             <label for="card_number" class="">Card
                                                                 Number</label>
                                                             <span class="woocommerce-input-wrapper">
                                                                 <input type="text" class="input-text"
                                                                     name="card_number" id="card_number"
                                                                     placeholder="0000 0000 0000 0000" value=""
                                                                     autocomplete="cc-number" />
                                                             </span>
                                                         </p>
                                                         <p class="form-row form-row-wide validate-required"
                                                             id="expiry_date_field" data-priority="30">
                                                             <label for="expiry_date" class="">Expiry
                                                                 Date</label>
                                                             <span class="woocommerce-input-wrapper">
                                                                 <input type="text" class="input-text"
                                                                     name="expiry_date" id="expiry_date"
                                                                     placeholder="MM/YY" value=""
                                                                     autocomplete="cc-exp" />
                                                             </span>
                                                         </p>
                                                         <p class="form-row form-row-wide validate-required"
                                                             id="cvv_field" data-priority="40">
                                                             <label for="cvv" class="">CVV</label>
                                                             <span class="woocommerce-input-wrapper">
                                                                 <input type="text" class="input-text"
                                                                     name="cvv" id="cvv" placeholder="CVV"
                                                                     value="" autocomplete="cc-csc" />
                                                             </span>
                                                         </p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="col-1 pt-5 pb-5">
                                             <div class="woocommerce-billing-fields">
                                                 <div class="woocommerce-billing-fields__field-wrapper">
                                                     <h6 class="checkout__section-title">
                                                         <span> M-Pesa Checkout </span>
                                                     </h6>
                                                     <div class="mpesa-checkout-details">
                                                         <p class="form-row form-row-first validate-required"
                                                             id="mpesa_phone_field" data-priority="10">
                                                             <label for="mpesa_phone" class=""> M-Pesa Phone
                                                                 Number </label>
                                                             <span class="woocommerce-input-wrapper">
                                                                 <input type="tel" class="input-text"
                                                                     name="mpesa_phone" id="mpesa_phone"
                                                                     placeholder="M-Pesa Phone Number" value="254"
                                                                     autocomplete="tel" />
                                                             </span>
                                                         </p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="col-1 pt-5">
                                             <div class="woocommerce-billing-fields">
                                                 <div class="woocommerce-billing-fields__field-wrapper">
                                                     <h6 class="checkout__section-title">
                                                         <span> PayPal Checkout </span>
                                                     </h6>
                                                     <div class="paypal-checkout-details">
                                                         <p class="form-row form-row-first validate-required"
                                                             id="paypal_email_field" data-priority="10">
                                                             <label for="paypal_email" class=""> PayPal
                                                                 Email
                                                             </label>
                                                             <span class="woocommerce-input-wrapper">
                                                                 <input type="email" class="input-text"
                                                                     name="paypal_email" id="paypal_email"
                                                                     placeholder="Your PayPal Email" value=""
                                                                     autocomplete="email" />
                                                             </span>
                                                         </p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="col-2">
                                             <div class="woocommerce-shipping-fields"></div>
                                             <div class="woocommerce-additional-fields">
                                                 <h3>Additional information</h3>
                                                 <div class="woocommerce-additional-fields__field-wrapper">
                                                     <p class="form-row notes" id="order_comments_field"
                                                         data-priority="">
                                                         <label for="order_comments" class="">
                                                             Order notes
                                                             <span class="optional"> (optional) </span>
                                                         </label>
                                                         <span class="woocommerce-input-wrapper">
                                                             <textarea name="order_comments" class="input-text" id="order_comments"
                                                                 placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                                                         </span>
                                                     </p>
                                                 </div>
                                             </div>
                                         </div>

                                     </div>
                                     <div id="order_review" class="woocommerce-checkout-review-order">

                                         <table class="shop_table woocommerce-checkout-review-order-table">
                                             <tbody>
                                                 <tr class="cart_item">
                                                     <td class="product-name">
                                                         <h6 class="cart-item-title">Your Ticket Details</h6>
                                                         <ul class="cart-item-card">
                                                             <li class="cart-item-card__header">
                                                                 <div>
                                                                     @php
                                                                         $images = $events->image ? json_decode($events->image) : [];
                                                                     @endphp

                                                                     @foreach ($images as $image)
                                                                         <img class="cart-item-card__img"
                                                                             src="{{ asset($image) }}"
                                                                             alt="..." />
                                                                     @endforeach
                                                                 </div>

                                                                 <div>
                                                                     <p class="cart-item-card__title">
                                                                         {{ $events->title }}
                                                                     </p>
                                                                     <p class="cart-item-card__date">
                                                                         <span> Happening on </span>
                                                                         <span>{{ \Carbon\Carbon::parse($events->date)->format('F j, Y') }}</span>

                                                                     </p>
                                                                 </div>
                                                             </li>
                                                             <li class="cart-item-card__item">
                                                                 <span class="cart-item-card__close">
                                                                     <i class="rlr-icon-font flaticon-cross"></i>
                                                                 </span>
                                                                 <div class="cart-item-card__iconcontainer">
                                                                     <span>
                                                                         <i
                                                                             class="rlr-icon-font flaticon-carbon-user"></i>
                                                                     </span>
                                                                 </div>
                                                                 <div class="cart-item-card__item-title">
                                                                     <p>For {{ $events->age }} + </p>
                                                                     <p>
                                                                         <b> <span id="ticket-type-display"></span>
                                                                             {{ $events->price }} <span
                                                                                 id="ticket-price-display"></span> </b>
                                                                     </p>
                                                                 </div>
                                                                 <p class="cart-item-card__item-number">
                                                                     <span class="times"> x </span>
                                                                     <span id="ticket-quantity-display"></span>
                                                                 </p>

                                                                 @php
                                                                     $eventPrice = $events->price;
                                                                 @endphp

                                                                 <p class="cart-item-card__item-price">
                                                                     <span class="cart-item-card__item-price">
                                                                     </span>
                                                                 </p>
                                                             </li>
                                                         </ul>
                                                     </td>
                                                 </tr>
                                             </tbody>
                                             <tfoot>
                                                 <tr>
                                                 </tr>
                                                 <tr class="order-total">
                                                     <th>Total payment</th>
                                                     <td>
                                                         <strong>
                                                             <span class="woocommerce-Price-amount amount">
                                                                 <bdi>
                                                                     <span
                                                                         class="woocommerce-Price-currencySymbol">$</span>
                                                                     <span id="total-payment"></span>

                                                                 </bdi>
                                                             </span>
                                                         </strong>
                                                     </td>
                                                 </tr>
                                                 <tr>
                                                     <td>
                                                         <button type="submit" class="button alt">Place
                                                             Order</button>
                                                     </td>
                                                 </tr>
                                             </tfoot>
                                         </table>

                                     </div>
                                 </form>
                             </div>
                         </div>

                     </div>
                 </article>

             </div>
         </div>
     </div>
 </main>


 <script>
     // Retrieve values from localStorage
     const storedTicketType = localStorage.getItem('selectedTicketType');
     const storedTicketQuantity = localStorage.getItem('ticketQuantity');
     const eventPrice = {{ $events->price }}; 
     const vipPrice = {{ $events->vipPrice }}; 

     // Display the stored ticket type and quantity
     const ticketTypeDisplay = document.getElementById('ticket-type-display');
     const ticketQuantityDisplay = document.getElementById('ticket-quantity-display');

     ticketTypeDisplay.innerText = storedTicketType || 'None';
     ticketQuantityDisplay.innerText = storedTicketQuantity || 'None';

     // Function to update the total payment amount
     const updateTotalPayment = (totalPrice) => {
         const totalPaymentElement = document.getElementById('total-payment');
         totalPaymentElement.innerText = totalPrice.toFixed(2);
     };

     // Function to calculate and update total price
     const calculateAndUpdateTotal = () => {
         let totalPrice = 0;

         // Check if there's a stored ticket type and quantity, then calculate total price
         if (storedTicketType && storedTicketQuantity) {
             const parsedTicketQuantity = parseInt(storedTicketQuantity, 10);

             // Check the stored ticket type and set the price accordingly
             if (storedTicketType === 'VIP') {
                 totalPrice = vipPrice * parsedTicketQuantity;
             } else {
                 totalPrice = eventPrice * parsedTicketQuantity;
             }

             const numberOfTicketsInput = document.getElementById('total-tickets-input');
             if (numberOfTicketsInput) {
                 numberOfTicketsInput.value = parsedTicketQuantity;
             }

             // Update the total amount input field
             const totalAmountInput = document.getElementById('total-amount-input');

             if (totalAmountInput) {
                 totalAmountInput.value = totalPrice.toFixed(2);
             }

             // Display the total price
             const cartItemPriceElement = document.querySelector('.cart-item-card__item-price');
             if (cartItemPriceElement) {
                 cartItemPriceElement.innerText = `${totalPrice.toFixed(2)}`;
             }

             updateTotalPayment(totalPrice);
         } else {
             const totalPaymentElement = document.getElementById('total-payment');
             totalPaymentElement.innerText = '';
         }
     };

     calculateAndUpdateTotal();
 </script>



 @include('ticketHub.include.footer')
