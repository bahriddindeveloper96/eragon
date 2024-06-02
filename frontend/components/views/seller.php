<?php if(!empty($products)):?>
    <section class="section-hot-new-arrivals section-products-carousel-tabs techmarket-tabs">
        <div class="section-products-carousel-tabs-wrap">
            <header class="section-header">
                <h2 class="section-title">Распродажа</h2>
                <ul role="tablist" class="nav justify-content-end">
                    <li class="nav-item"><a class="nav-link active" href="#tab-59f89f08825d50" data-toggle="tab">Top 20</a></li>
                    <li class="nav-item"><a class="nav-link " href="#tab-59f89f08825d51" data-toggle="tab">Audio &amp; Video</a></li>
                    <li class="nav-item"><a class="nav-link " href="#tab-59f89f08825d52" data-toggle="tab">Laptops &amp; Computers</a></li>
                    <li class="nav-item"><a class="nav-link " href="#tab-59f89f08825d53" data-toggle="tab">Video Cameras</a></li>
                </ul>
            </header>
            <!-- .section-header -->
            <div class="tab-content">                
                    <div id="tab-59f89f08825d50" class="tab-pane active" role="tabpanel">
                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                            <div class="container-fluid">
                                <div class="woocommerce">
                                    <div class="products">
                                        <?php foreach($products as $product):?>
                                            <div class="product">
                                                <div class="yith-wcwl-add-to-wishlist">
                                                    <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                </div>
                                                <?php foreach($product->photos as $photo):?>                                                            
                                                <?php endforeach;?>
                                                <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$product->product->id]);?>" class="woocommerce-LoopProduct-link">
                                                <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $photo->photo, [
                                                    'class' => 'attachment-shop_catalog size-shop_catalog wp-post-image',
                                                    'width' => '224',
                                                    'height' => '197',
                                                    //'alt' => "$product->product->name",
                                                ]) ?>
                                                    <span class="price">
                                                        <ins>
                                                            <span class="amount"> </span>
                                                        </ins>
                                                        <span class="amount"> <?= $product->price;?> so'm</span>
                                                    </span>
                                                    <!-- /.price -->
                                                    <h2 class="woocommerce-loop-product__title"><?= $product->product->name;?></h2>
                                                </a>
                                                <div class="hover-area">
                                                    <a data-id="<?= $product->id;?>" class="button add_to_cart_button add-to-cart" href="<?= \yii\helpers\Url::to(['cart/add','id'=>$product->id]);?>">Add to cart</a>
                                                    <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                </div>
                                            </div>
                                         <?php endforeach;?> 
                                    </div>
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .container-fluid -->
                        </div>
                        <!-- .products-carousel -->
                    </div>
                    <!-- .tab-pane -->
                    <div id="tab-59f89f08825d51" class="tab-pane" role="tabpanel">
                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                            <div class="container-fluid">
                                <div class="woocommerce">
                                    <div class="products">
                                            <?php foreach($products as $product):?>
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <?php foreach($product->photos as $photo):?>                                                            
                                                    <?php endforeach;?>
                                                    <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$product->product->id]);?>" class="woocommerce-LoopProduct-link">
                                                    <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $photo->photo, [
                                                        'class' => 'attachment-shop_catalog size-shop_catalog wp-post-image',
                                                        'width' => '224',
                                                        'height' => '197',
                                                        //'alt' => "$product->product->name",
                                                    ]) ?>
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> <?= $product->price;?> so'm</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title"><?= $product->product->name;?></h2>
                                                    </a>
                                                    <div class="hover-area">
                                                    <a data-id="<?= $product->id;?>" class="button add_to_cart_button add-to-cart" href="<?= \yii\helpers\Url::to(['cart/add','id'=>$product->id]);?>">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                            <?php endforeach;?> 
                                        </div>
                                    </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .container-fluid -->
                        </div>
                        <!-- .products-carousel -->
                    </div>
                    <div id="tab-59f89f08825d52" class="tab-pane" role="tabpanel">
                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                            <div class="container-fluid">
                                <div class="woocommerce">
                                    <div class="products">
                                            <?php foreach($products as $product):?>
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <?php foreach($product->photos as $photo):?>                                                            
                                                    <?php endforeach;?>
                                                    <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$product->product->id]);?>" class="woocommerce-LoopProduct-link">
                                                    <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $photo->photo, [
                                                        'class' => 'attachment-shop_catalog size-shop_catalog wp-post-image',
                                                        'width' => '224',
                                                        'height' => '197',
                                                        //'alt' => "$product->product->name",
                                                    ]) ?>
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> <?= $product->price;?> so'm</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title"><?= $product->product->name;?></h2>
                                                    </a>
                                                    <div class="hover-area">
                                                    <a data-id="<?= $product->id;?>" class="button add_to_cart_button add-to-cart" href="<?= \yii\helpers\Url::to(['cart/add','id'=>$product->id]);?>">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                            <?php endforeach;?> 
                                        </div>
                                    </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .container-fluid -->
                        </div>
                        <!-- .products-carousel -->
                    </div>
                    <div id="tab-59f89f08825d53" class="tab-pane" role="tabpanel">
                        <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:700,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                            <div class="container-fluid">
                                <div class="woocommerce">
                                    <div class="products">
                                            <?php foreach($products as $product):?>
                                                <div class="product">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <a href="wishlist.html" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                    </div>
                                                    <?php foreach($product->photos as $photo):?>                                                            
                                                    <?php endforeach;?>
                                                    <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$product->product->id]);?>" class="woocommerce-LoopProduct-link">
                                                    <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $photo->photo, [
                                                        'class' => 'attachment-shop_catalog size-shop_catalog wp-post-image',
                                                        'width' => '224',
                                                        'height' => '197',
                                                        //'alt' => "$product->product->name",
                                                    ]) ?>
                                                        <span class="price">
                                                            <ins>
                                                                <span class="amount"> </span>
                                                            </ins>
                                                            <span class="amount"> <?= $product->price;?> so'm</span>
                                                        </span>
                                                        <!-- /.price -->
                                                        <h2 class="woocommerce-loop-product__title"><?= $product->product->name;?></h2>
                                                    </a>
                                                    <div class="hover-area">
                                                        <!-- <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a> -->
                                                        <a data-id="<?= $product->id;?>" class="button add_to_cart_button add-to-cart" href="<?= \yii\helpers\Url::to(['cart/add','id'=>$product->id]);?>">Add to cart</a>
                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                    </div>
                                                </div>
                                            <?php endforeach;?> 
                                        </div>
                                    </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .container-fluid -->
                        </div>
                        <!-- .products-carousel -->
                    </div>
                    <!-- .tab-pane -->
                
            </div>
            <!-- .tab-content -->
        </div>
        <!-- .section-products-carousel-tabs-wrap -->
    </section>
<?php endif;?>