<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\widgets\ActiveForm;
?>
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
                                            <?php if(Yii::$app->session->hasFlash('success')):?>
                                                <div class="col-sm-12 alert alert-primary">
                                                    <?php echo Yii::$app->session->getFlash('success');?>
                                                </div>
                                            <?php endif;?>
                                            <?php if(Yii::$app->session->hasFlash('error')):?>
                                                <div class="col-sm-12 alert alert-danger">
                                                    <?php echo Yii::$app->session->getFlash('error');?>
                                                </div>
                                            <?php endif;?>
                                            <div class="woocommerce-info">Returning customer? <a data-toggle="collapse" href="#login-form" aria-expanded="false" aria-controls="login-form" class="showlogin">Click here to login</a>
                                            </div>
                                            <!-- <div class="collapse" id="login-form">
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
                                            </div> -->
                                            <!-- .collapse -->
                                            <div class="woocommerce-info">Have a coupon? <a data-toggle="collapse" href="#checkoutCouponForm" aria-expanded="false" aria-controls="checkoutCouponForm" class="showlogin">Click here to enter your code</a>
                                            </div>
                                            <!-- <div class="collapse" id="checkoutCouponForm">
                                                <form method="post" class="checkout_coupon">
                                                    <p class="form-row form-row-first">
                                                        <input type="text" value="" id="coupon_code" placeholder="Coupon code" class="input-text" name="coupon_code">
                                                    </p>
                                                    <p class="form-row form-row-last">
                                                        <input type="submit" value="Apply coupon" name="apply_coupon" class="button">
                                                    </p>
                                                    <div class="clear"></div>
                                                </form>
                                            </div> -->
                                            <!-- .collapse -->
                                                <?php $form = ActiveForm::begin([
                                                    'options' => ['class' => '']
                                                ])?>
                                                    
                                                    <div class="row">
                                                        <div class="row col-sm-8">                                                           
                                                                <?= $form->field($order, 'name'); ?>
                                                                 <?= $form->field($order, 'surname'); ?>
                                                                <?= $form->field($order, 'email'); ?> 
                                                                <?= $form->field($order, 'phone'); ?>
                                                                <?= $form->field($order, 'address'); ?>
                                                                <?= $form->field($order, 'address2'); ?>
                                                        </div>                                                        
                                                        <div class="col-sm-4">
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
                                                        </div>
                                                    </div>
                                                          
                                                <?php ActiveForm::end()?>
                                            
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