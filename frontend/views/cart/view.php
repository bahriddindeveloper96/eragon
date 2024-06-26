<!-- ============================================================= Header End ============================================================= -->
<div id="content" class="site-content">
                <div class="col-full">
                    <div class="row">
                        <nav class="woocommerce-breadcrumb">
                            <a href="<?= \yii\helpers\Url::home();?>">Home</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                            Cart
                        </nav>
                        <!-- .woocommerce-breadcrumb -->
                        
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="type-page hentry">
                                    <div class="entry-content">
                                        <div class="woocommerce">
                                            <?php if(!empty($session['cart'])): ?>
                                                <div class="cart-wrapper">
                                                    <form method="post" action="#" class="woocommerce-cart-form">
                                                        <table class="shop_table shop_table_responsive cart">
                                                            <thead>
                                                                <tr>
                                                                    <th class="product-remove">&nbsp;</th>
                                                                    <th class="product-names">Photo</th>
                                                                    <th class="product-name">Product</th>
                                                                    <th class="product-price">Price</th>
                                                                    <th class="product-quantity">Quantity</th>
                                                                    <th class="product-subtotal">Total</th>
                                                                    <th class="product-subtotal"><span class="fa fa-remove text-dark" aria-hidden="true"></span></th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($session['cart'] as $id => $item):?>
                                                                    <?php 
                                                                        $lastPhotoId = null; // Boshlang'ich qiymat null bo'lishi kerak
                                                                        foreach($item['photo'] as $photo) {
                                                                            $lastPhotoId = $photo['photo']; // Har bir bosilganing id sini saqlash
                                                                        }
                                                                    ?>             
                                                                    
                                                                              
                                                                    <tr>
                                                                        <td class="product-remove">
                                                                            <a class="remove" href="#">×</a>
                                                                        </td>
                                                                        <td class="product-name">
                                                                            <a href="<?= \yii\helpers\Url::to(['product/view','id'=>$id]);?>">
                                                                                <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $lastPhotoId, ['height' => '50','class'=>"wp-post-image",'alt' => "$lastPhotoId",]) ?>
                                                                            </a>
                                                                        </td>
                                                                        <td data-title="Product" class="product-name">
                                                                            <div class="media cart-item-product-detail">
                                                                                <a href="<?= \yii\helpers\Url::to(['product/view','id'=>$id]);?>">
                                                                                    <img width="180" height="180" alt="" class="wp-post-image" src="/images/products/cart-1.jpg">
                                                                                </a>
                                                                                <div class="media-body align-self-center">
                                                                                    <a href="<?= \yii\helpers\Url::to(['product/view','id'=>$id]);?>"><?= $item['name'];?></a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td data-title="Price" class="product-price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span><?= $item['price']?>
                                                                            </span>
                                                                        </td>
                                                                        <td class="product-quantity" data-title="Quantity">
                                                                            <div class="quantity">
                                                                                <label for="quantity-input-1">Quantity</label>
                                                                                <input id="quantity-input-1" type="number"  value="<?= $item['qty']?>" title="Qty" class="input-text qty text" size="4">
                                                                            </div>
                                                                        </td>
                                                                        <td data-title="Total" class="product-subtotal">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span><?= $item['qty'] * $item['price']?>
                                                                            </span>
                                                                            
                                                                        </td>
                                                                            
                                                                        <td>
                                                                           <a href="<?= \yii\helpers\Url::to(['cart/del-item','id'=>$id]);?>"> <span data-id="<?= $id?>" class="fa fa-remove text-danger del-item" aria-hidden="true"></span></a>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach;?>
                                                            </tbody>
                                                        </table>
                                                        <!-- .shop_table shop_table_responsive -->
                                                    </form>
                                                    <!-- .woocommerce-cart-form -->
                                                    <div class="cart-collaterals">
                                                        <div class="cart_totals">
                                                            <h2>Cart totals</h2>
                                                            <table class="shop_table shop_table_responsive">
                                                                <tbody>
                                                                    <tr class="cart-subtotal">
                                                                        <th>Subtotal</th>
                                                                        <td data-title="Subtotal">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <span class="woocommerce-Price-currencySymbol">$</span><?= $session['cart.sum']?></span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="shipping">
                                                                        <th>Shipping</th>
                                                                        <td data-title="Shipping">Flat rate</td>
                                                                    </tr>
                                                                    <tr class="order-total">
                                                                        <th>Total</th>
                                                                        <td data-title="Total">
                                                                            <strong>
                                                                                <span class="woocommerce-Price-amount amount">
                                                                                    <span class="woocommerce-Price-currencySymbol">$</span><?= $session['cart.sum']?></span>
                                                                            </strong>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!-- .shop_table shop_table_responsive -->
                                                            <div class="wc-proceed-to-checkout">
                                                                <form class="woocommerce-shipping-calculator" method="post" action="#">
                                                                    <p>
                                                                        <a class="shipping-calculator-button" data-toggle="collapse" href="#shipping-form" aria-expanded="false" aria-controls="shipping-form">Calculate shipping</a>
                                                                    </p>
                                                                    <div class="collapse" id="shipping-form">
                                                                        <div class="shipping-calculator-form">
                                                                            <p id="calc_shipping_country_field" class="form-row form-row-wide">
                                                                                <select rel="calc_shipping_state" class="country_to_state" id="calc_shipping_country" name="calc_shipping_country">
                                                                                    <option value="">Select a country…</option>
                                                                                    <option value="AX">Åland Islands</option>
                                                                                    <option value="AF">Afghanistan</option>
                                                                                    <option value="AL">Albania</option>
                                                                                    <option value="DZ">Algeria</option>
                                                                                    <option value="AS">American Samoa</option>
                                                                                    <option value="AD">Andorra</option>
                                                                                    <option value="AO">Angola</option>
                                                                                    <option value="AI">Anguilla</option>
                                                                                    <option value="AQ">Antarctica</option>
                                                                                    <option value="AG">Antigua and Barbuda</option>
                                                                                    <option value="AR">Argentina</option>
                                                                                    <option value="AM">Armenia</option>
                                                                                    <option value="AW">Aruba</option>
                                                                                    <option value="AU">Australia</option>
                                                                                    <option value="AT">Austria</option>
                                                                                    <option value="AZ">Azerbaijan</option>
                                                                                </select>
                                                                            </p>
                                                                            <p id="calc_shipping_state_field" class="form-row form-row-wide validate-required">
                                                                                <span>
                                                                                    <select id="calc_shipping_state" name="calc_shipping_state">
                                                                                        <option value="">Select an option…</option>
                                                                                        <option value="AP">Andhra Pradesh</option>
                                                                                        <option value="AR">Arunachal Pradesh</option>
                                                                                        <option value="AS">Assam</option>
                                                                                        <option value="BR">Bihar</option>
                                                                                        <option value="CT">Chhattisgarh</option>
                                                                                        <option value="GA">Goa</option>
                                                                                        <option value="GJ">Gujarat</option>
                                                                                        <option value="HR">Haryana</option>
                                                                                        <option value="HP">Himachal Pradesh</option>
                                                                                        <option value="JK">Jammu and Kashmir</option>
                                                                                        <option value="JH">Jharkhand</option>
                                                                                        <option value="KA">Karnataka</option>
                                                                                        <option value="KL">Kerala</option>
                                                                                        <option value="MP">Madhya Pradesh</option>
                                                                                        <option value="MH">Maharashtra</option>
                                                                                        <option value="MN">Manipur</option>
                                                                                        <option value="ML">Meghalaya</option>
                                                                                        <option value="MZ">Mizoram</option>
                                                                                        <option value="NL">Nagaland</option>
                                                                                        <option value="OR">Orissa</option>
                                                                                        <option value="PB">Punjab</option>
                                                                                        <option value="RJ">Rajasthan</option>
                                                                                        <option value="SK">Sikkim</option>
                                                                                        <option value="TN">Tamil Nadu</option>
                                                                                        <option value="TS">Telangana</option>
                                                                                        <option value="TR">Tripura</option>
                                                                                        <option value="UK">Uttarakhand</option>
                                                                                        <option value="UP">Uttar Pradesh</option>
                                                                                        <option value="WB">West Bengal</option>
                                                                                        <option value="AN">Andaman and Nicobar Islands</option>
                                                                                        <option value="CH">Chandigarh</option>
                                                                                        <option value="DN">Dadra and Nagar Haveli</option>
                                                                                        <option value="DD">Daman and Diu</option>
                                                                                        <option value="DL">Delhi</option>
                                                                                        <option value="LD">Lakshadeep</option>
                                                                                        <option value="PY">Pondicherry (Puducherry)</option>
                                                                                    </select>
                                                                                </span>
                                                                            </p>
                                                                            <p id="calc_shipping_postcode_field" class="form-row form-row-wide validate-required">
                                                                                <input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="Postcode / ZIP" value="" class="input-text">
                                                                            </p>
                                                                            <p>
                                                                                <button class="button" value="1" name="calc_shipping" type="submit">Update totals</button>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <!-- .wc-proceed-to-checkout -->
                                                                <a class="checkout-button button alt wc-forward" href="<?= \yii\helpers\Url::to(['cart/checkout']);?>">Proceed to checkout</a>
                    
                                                                <a class="back-to-shopping" href="<?= \yii\helpers\Url::home();?>">Back to Shopping</a>
                                                            </div>
                                                            <!-- .wc-proceed-to-checkout -->
                                                        </div>
                                                        <!-- .cart_totals -->
                                                    </div>
                                                    <!-- .cart-collaterals -->
                                                </div>
                                            <!-- .cart-wrapper -->
                                            <?php else: ?>
                                                <h3>Корзина пуста</h3>      
                                            <?php endif;?>
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .entry-content -->
                                </div>
                                <!-- .hentry -->
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
            <div class="col-full">
                <section class="brands-carousel">
                    <h2 class="sr-only">Brands Carousel</h2>
                    <div class="col-full" data-ride="tm-slick-carousel" data-wrap=".brands" data-slick="{&quot;slidesToShow&quot;:6,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;responsive&quot;:[{&quot;breakpoint&quot;:400,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:800,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                        <div class="brands">
                            <div class="item">
                                <a href="shop.html">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>apple</h4>
                                            </div>
                                            <!-- /.info -->
                                        </figcaption>
                                        <img width="145" height="50" class="img-responsive desaturate" alt="apple" src="/images/brands/1.png">
                                    </figure>
                                </a>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <a href="shop.html">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>bosch</h4>
                                            </div>
                                            <!-- /.info -->
                                        </figcaption>
                                        <img width="145" height="50" class="img-responsive desaturate" alt="bosch" src="/images/brands/2.png">
                                    </figure>
                                </a>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <a href="shop.html">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>cannon</h4>
                                            </div>
                                            <!-- /.info -->
                                        </figcaption>
                                        <img width="145" height="50" class="img-responsive desaturate" alt="cannon" src="/images/brands/3.png">
                                    </figure>
                                </a>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <a href="shop.html">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>connect</h4>
                                            </div>
                                            <!-- /.info -->
                                        </figcaption>
                                        <img width="145" height="50" class="img-responsive desaturate" alt="connect" src="/images/brands/4.png">
                                    </figure>
                                </a>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <a href="shop.html">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>galaxy</h4>
                                            </div>
                                            <!-- /.info -->
                                        </figcaption>
                                        <img width="145" height="50" class="img-responsive desaturate" alt="galaxy" src="/images/brands/5.png">
                                    </figure>
                                </a>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <a href="shop.html">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>gopro</h4>
                                            </div>
                                            <!-- /.info -->
                                        </figcaption>
                                        <img width="145" height="50" class="img-responsive desaturate" alt="gopro" src="/images/brands/6.png">
                                    </figure>
                                </a>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <a href="shop.html">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>handspot</h4>
                                            </div>
                                            <!-- /.info -->
                                        </figcaption>
                                        <img width="145" height="50" class="img-responsive desaturate" alt="handspot" src="/images/brands/7.png">
                                    </figure>
                                </a>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <a href="shop.html">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>kinova</h4>
                                            </div>
                                            <!-- /.info -->
                                        </figcaption>
                                        <img width="145" height="50" class="img-responsive desaturate" alt="kinova" src="/images/brands/8.png">
                                    </figure>
                                </a>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <a href="shop.html">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>nespresso</h4>
                                            </div>
                                            <!-- /.info -->
                                        </figcaption>
                                        <img width="145" height="50" class="img-responsive desaturate" alt="nespresso" src="/images/brands/9.png">
                                    </figure>
                                </a>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <a href="shop.html">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>samsung</h4>
                                            </div>
                                            <!-- /.info -->
                                        </figcaption>
                                        <img width="145" height="50" class="img-responsive desaturate" alt="samsung" src="/images/brands/10.png">
                                    </figure>
                                </a>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <a href="shop.html">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>speedway</h4>
                                            </div>
                                            <!-- /.info -->
                                        </figcaption>
                                        <img width="145" height="50" class="img-responsive desaturate" alt="speedway" src="/images/brands/11.png">
                                    </figure>
                                </a>
                            </div>
                            <!-- .item -->
                            <div class="item">
                                <a href="shop.html">
                                    <figure>
                                        <figcaption class="text-overlay">
                                            <div class="info">
                                                <h4>yoko</h4>
                                            </div>
                                            <!-- /.info -->
                                        </figcaption>
                                        <img width="145" height="50" class="img-responsive desaturate" alt="yoko" src="/images/brands/12.png">
                                    </figure>
                                </a>
                            </div>
                            <!-- .item -->
                        </div>
                    </div>
                    <!-- .col-full -->
                </section>
                <!-- .brands-carousel -->
            </div>
            <!-- .col-full -->