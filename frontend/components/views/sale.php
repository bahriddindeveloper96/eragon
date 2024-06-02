<?php if(!empty($products)):?>    
    <section class="column-1 deals-carousel" id="sale-with-timer-carousel">
        <div class="deals-carousel-inner-block">
            <header class="section-header">
                <h2 class="section-title">
                    <strong>Deals</strong> of the week</h2>
                <nav class="custom-slick-nav"></nav>
            </header>
            <!-- /.section-header -->
            <div class="sale-products-with-timer-carousel deals-carousel-v1">
                <div class="products-carousel">
                    <div class="container-fluid">
                        <div class="woocommerce columns-1">
                            <div class="products" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#sale-with-timer-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}}]}">
                                <?php foreach($products as $product):?>
                                    <div class="sale-product-with-timer product">
                                        <a class="woocommerce-LoopProduct-link" href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$product->product->id]);?>">
                                            <div class="sale-product-with-timer-header">
                                                <div class="price-and-title">
                                                    <span class="price">
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <?= $product->price;?><span class="woocommerce-Price-currencySymbol">so'm</span></span>
                                                        </ins>
                                                        <del>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <?= $product->old_price;?><span class="woocommerce-Price-currencySymbol">so'm</span></span>
                                                        </del>
                                                    </span>
                                                    <!-- /.price -->
                                                    <h2 class="woocommerce-loop-product__title"><?= $product->product->name;?></h2>
                                                </div>
                                                <!-- /.price-and-title -->
                                                <div class="sale-label-outer">
                                                    <div class="sale-saved-label">
                                                        <span class="saved-label-text">Save</span>
                                                        <span class="saved-label-amount">
                                                        <?php 
                                                            $wallet = $product->old_price;
                                                            $wallets = $product->price;
                                                            $itog = $wallet - $wallets;
                                                        ?>
                                                        <span class="woocommerce-Price-amount amount" style="font-size:10px">
                                                         <?= $itog;?><span class="woocommerce-Price-currencySymbol"  style="font-size:9px"> so'm</span></span>
                                                        </span>
                                                    </div>
                                                    <!-- /.sale-saved-label -->
                                                </div>
                                                <!-- /.sale-label-outer -->
                                            </div>
                                            <?php foreach($product->photos as $photo):?>                                                            
                                            <?php endforeach;?> 
                                            <!-- /.sale-product-with-timer-header -->
                                            <!-- <img width="224" height="197" alt="" class="wp-post-image" src="/images/eragon/1top.jpg"> -->
                                            <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $photo->photo, [
                                                'class' => 'attachment-shop_catalog size-shop_catalog wp-post-image',
                                                'width' => '224',
                                                'height' => '197',
                                                //'alt' => "$product->product->name",
                                            ]) ?>
                                            <div class="deal-progress">
                                                <div class="deal-stock">
                                                    <div class="stock-sold">Already Sold:
                                                        <strong>0</strong>
                                                    </div>
                                                    <div class="stock-available">Available:
                                                        <strong>1000</strong>
                                                    </div>
                                                </div>
                                                <!-- /.deal-stock -->
                                                <div class="progress">
                                                    <span style="width:0%" class="progress-bar">0</span>
                                                </div>
                                                <!-- /.progress -->
                                            </div>
                                            <!-- /.deal-progress -->
                                            <div class="deal-countdown-timer">
                                                <div class="marketing-text">
                                                    <span class="line-1">Hurry up!</span>
                                                    <span class="line-2">Offers ends in:</span>
                                                </div>
                                                <!-- /.marketing-text -->
                                                <span class="deal-time-diff" style="display:none;">72000</span>
                                                <div class="deal-countdown countdown"></div>
                                            </div>
                                            <!-- /.deal-countdown-timer -->
                                        </a>
                                        <!-- /.woocommerce-LoopProduct-link -->
                                    </div>
                                    <!-- /.sale-product-with-timer -->
                                <?php endforeach;?>
                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.woocommerce -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.slick-list -->
            </div>
            <!-- /.sale-products-with-timer-carousel -->
            <footer class="section-footer">
                <nav class="custom-slick-pagination">
                    <a class="slider-prev left" href="#" data-target="#sale-with-timer-carousel .products">
                        <i class="tm tm-arrow-left"></i>Previous deal</a>
                    <a class="slider-next right" href="#" data-target="#sale-with-timer-carousel .products">Next deal<i class="tm tm-arrow-right"></i></a>
                </nav>
            </footer>
            <!-- /.section-footer -->
        </div>
        <!-- /.deals-carousel-inner-block -->
    </section>
<?php endif;?>