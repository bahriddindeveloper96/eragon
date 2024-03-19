<!-- ============================================================= Header End ============================================================= -->
<div id="content" class="site-content">
                <div class="col-full">
                    <div class="row">
                        <nav class="woocommerce-breadcrumb">
                            <a href="home-v1.html">Home</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                            Checkout
                        </nav>
                        <!-- .woocommerce-breadcrumb -->
                        <div class="content-area" id="primary">
                            <main class="site-main" id="main">
                                <div class="type-page hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <div class="woocommerce-info">Returning customer? <a data-toggle="collapse" href="#login-form" aria-expanded="false" aria-controls="login-form" class="showlogin">Click here to login</a>
                                            </div>
                                            <div class="collapse" id="login-form">
                                                <form method="post" class="woocomerce-form woocommerce-form-login login">
                                                    <p class="before-login-text">
                                                        Vestibulum lacus magna, faucibus vitae dui eget, aliquam fringilla. In et commodo elit. Class aptent taciti sociosqu ad litora.
                                                    </p>
                                                    <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                                    <p class="form-row form-row-first">
                                                        <label for="username">Username or email
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" id="username" name="username" class="input-text">
                                                    </p>
                                                    <p class="form-row form-row-last">
                                                        <label for="password">Password
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="password" id="password" name="password" class="input-text">
                                                    </p>
                                                    <div class="clear"></div>
                                                    <p class="form-row">
                                                        <input type="submit" value="Login" name="login" class="button">
                                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                            <input type="checkbox" value="forever" id="rememberme" name="rememberme" class="woocommerce-form__input woocommerce-form__input-checkbox">
                                                            <span>Remember me</span>
                                                        </label>
                                                    </p>
                                                    <p class="lost_password">
                                                        <a href="#">Lost your password?</a>
                                                    </p>
                                                    <div class="clear"></div>
                                                </form>
                                            </div>
                                            <!-- .collapse -->
                                            <div class="woocommerce-info">Have a coupon? <a data-toggle="collapse" href="#checkoutCouponForm" aria-expanded="false" aria-controls="checkoutCouponForm" class="showlogin">Click here to enter your code</a>
                                            </div>
                                            <div class="collapse" id="checkoutCouponForm">
                                                <form method="post" class="checkout_coupon">
                                                    <p class="form-row form-row-first">
                                                        <input type="text" value="" id="coupon_code" placeholder="Coupon code" class="input-text" name="coupon_code">
                                                    </p>
                                                    <p class="form-row form-row-last">
                                                        <input type="submit" value="Apply coupon" name="apply_coupon" class="button">
                                                    </p>
                                                    <div class="clear"></div>
                                                </form>
                                            </div>
                                            <!-- .collapse -->
                                            <form action="#" class="checkout woocommerce-checkout" method="post" name="checkout">
                                                <div id="customer_details" class="col2-set">
                                                    <div class="col-1">
                                                        <div class="woocommerce-billing-fields">
                                                            <h3>Billing Details</h3>
                                                            <div class="woocommerce-billing-fields__field-wrapper-outer">
                                                                <div class="woocommerce-billing-fields__field-wrapper">
                                                                    <p id="billing_first_name_field" class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                                        <label class="" for="billing_first_name">First Name
                                                                            <abbr title="required" class="required">*</abbr>
                                                                        </label>
                                                                        <input type="text" value="" placeholder="" id="billing_first_name" name="billing_first_name" class="input-text ">
                                                                    </p>
                                                                    <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                                        <label class="" for="billing_last_name">Last Name
                                                                            <abbr title="required" class="required">*</abbr>
                                                                        </label>
                                                                        <input type="text" value="" placeholder="" id="billing_last_name" name="billing_last_name" class="input-text ">
                                                                    </p>
                                                                    <div class="clear"></div>                                                                    
                                                                    <p id="billing_country_field" class="form-row form-row-wide validate-required validate-email">
                                                                        <label class="" for="billing_country">Country
                                                                            <abbr title="required" class="required">*</abbr>
                                                                        </label>
                                                                        <select autocomplete="country" class="country_to_state country_select select2-hidden-accessible" id="billing_country" name="billing_country" tabindex="-1" aria-hidden="true">
                                                                            <option value="">Select a country…</option>
                                                                            <option value="AX">Åland Islands</option>
                                                                            <option value="AF">Afghanistan</option>                                                                            
                                                                        </select>
                                                                    </p>
                                                                    <div class="clear"></div>
                                                                    <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                                        <label class="" for="billing_address_1">Street address
                                                                            <abbr title="required" class="required">*</abbr>
                                                                        </label>
                                                                        <input type="text" value="" placeholder="Street address" id="billing_address_1" name="billing_address_1" class="input-text ">
                                                                    </p>
                                                                    <p id="billing_address_2_field" class="form-row form-row-wide address-field">
                                                                        <input type="text" value="" placeholder="Apartment, suite, unit etc. (optional)" id="billing_address_2" name="billing_address_2" class="input-text ">
                                                                    </p>
                                                                    
                                                                    <p id="billing_postcode_field" class="form-row form-row-wide address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode">
                                                                        <label class="" for="billing_postcode">Postcode / ZIP
                                                                            <abbr title="required" class="required">*</abbr>
                                                                        </label>
                                                                        <input type="text" value="" placeholder="" id="billing_postcode" name="billing_postcode" class="input-text ">
                                                                    </p>
                                                                    <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                                                        <label class="" for="billing_phone">Phone
                                                                            <abbr title="required" class="required">*</abbr>
                                                                        </label>
                                                                        <input type="tel" value="" placeholder="" id="billing_phone" name="billing_phone" class="input-text ">
                                                                    </p>
                                                                    <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                                                                        <label class="" for="billing_email">Email Address
                                                                            <abbr title="required" class="required">*</abbr>
                                                                        </label>
                                                                        <input type="email" value="" placeholder="" id="billing_email" name="billing_email" class="input-text ">
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <!-- .woocommerce-billing-fields__field-wrapper-outer -->
                                                        </div>                                                        
                                                    </div>
                                                    <!-- .col-1 -->
                                                    <div class="col-2">                                                        
                                                        <!-- .woocommerce-shipping-fields -->
                                                        <div class="woocommerce-additional-fields">
                                                            <div class="woocommerce-additional-fields__field-wrapper">
                                                                <p id="order_comments_field" class="form-row notes">
                                                                    <label class="" for="order_comments">Order notes</label>
                                                                    <textarea cols="5" rows="2" placeholder="Notes about your order, e.g. special notes for delivery." id="order_comments" class="input-text " name="order_comments"></textarea>
                                                                </p>
                                                            </div>
                                                            <!-- .woocommerce-additional-fields__field-wrapper-->
                                                        </div>
                                                        <!-- .woocommerce-additional-fields -->
                                                    </div>
                                                    <!-- .col-2 -->
                                                </div>
                                                <!-- .col2-set -->
                                                <h3 id="order_review_heading">Your order</h3>
                                                <div class="woocommerce-checkout-review-order" id="order_review">
                                                    <div class="order-review-wrapper">
                                                        <h3 class="order_review_heading">Your Order</h3>
                                                        <?php if(!empty($session['cart'])): ?>
                                                            <table class="shop_table woocommerce-checkout-review-order-table">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="product-name">Product</th>
                                                                        <th class="product-total">Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php foreach($session['cart'] as $id => $item):?>
                                                                    <tr class="cart_item">
                                                                        <td class="product-name">
                                                                            <strong class="product-quantity"><?= $item['qty'];?> ×</strong> <?= $item['name'];?>&nbsp;
                                                                        </td>
                                                                        <td class="product-total">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span><?= $item['qty'] * $item['price']?></span>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach;?>
                                                                    
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr class="cart-subtotal">
                                                                        <th>Subtotal</th>
                                                                        <td>
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span><?= $session['cart.sum']?></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="order-total">
                                                                        <th>Total</th>
                                                                        <td>
                                                                            <strong>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span><?= $session['cart.sum']?></span>
                                                                            </strong>
                                                                        </td>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                            <?php else: ?>
                                                            <h3>Корзина пуста</h3>      
                                                        <?php endif;?>                                                        
                                                        <div class="woocommerce-checkout-payment" id="payment">
                                                            <ul class="wc_payment_methods payment_methods methods">
                                                                <li class="wc_payment_method payment_method_bacs">
                                                                    <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                                                                    <label for="payment_method_bacs">Direct bank transfer</label>
                                                                    
                                                                </li>
                                                                <li class="wc_payment_method payment_method_cheque">
                                                                    <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
                                                                    <label for="payment_method_cheque">Check payments </label>
                                                                    
                                                                </li>
                                                                <li class="wc_payment_method payment_method_cod">
                                                                    <input type="radio" data-order_button_text="" value="cod" name="payment_method" class="input-radio" id="payment_method_cod">
                                                                    <label for="payment_method_cod">Cash on delivery </label>
                                                                    
                                                                </li>
                                                            </ul>
                                                            <div class="form-row place-order">
                                                                <p class="form-row terms wc-terms-and-conditions woocommerce-validated">
                                                                    <label class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                                        <input type="checkbox" id="terms" name="terms" class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                                                        <span>I’ve read and accept the <a class="woocommerce-terms-and-conditions-link" href="terms-and-conditions.html">terms &amp; conditions</a></span>
                                                                        <span class="required">*</span>
                                                                    </label>
                                                                    <input type="hidden" value="1" name="terms-field">
                                                                </p>
                                                                <a href="order-received.html" class="button wc-forward text-center">Place order</a>
                                                            </div>
                                                        </div>
                                                        <!-- /.woocommerce-checkout-payment -->
                                                    </div>
                                                    <!-- /.order-review-wrapper -->
                                                </div>
                                                <!-- .woocommerce-checkout-review-order -->
                                            </form>
                                            <!-- .woocommerce-checkout -->
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .entry-content -->
                                </div>
                                <!-- #post-## -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-full -->
            </div>
            <!-- #content -->