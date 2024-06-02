<?php if(!empty($products)):?>
    <section class="column-2 section-products-carousel-tabs tab-carousel-1">
        <div class="section-products-carousel-tabs-wrap">
            <header class="section-header">
                <ul role="tablist" class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab-59f89f0881f930" data-toggle="tab">Новые поступления</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#tab-59f89f0881f931" data-toggle="tab">В продаже</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#tab-59f89f0881f932" data-toggle="tab">Рекомендуем</a>
                    </li>
                </ul>
            </header>
            <!-- .section-header -->
            <div class="tab-content">
                <div id="tab-59f89f0881f930" class="tab-pane active" role="tabpanel">
                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
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
                                                    <span class="amount"> <?= $product->price;?></span>
                                                </span>
                                                <!-- /.price -->
                                                <h2 class="woocommerce-loop-product__title"><?=$product->product->name;?></h2>
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
                <div id="tab-59f89f0881f931" class="tab-pane" role="tabpanel">
                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
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
                                                        <span class="amount"> <?= $product->price;?></span>
                                                    </span>
                                                    <!-- /.price -->
                                                    <h2 class="woocommerce-loop-product__title"><?=$product->product->name;?></h2>
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
                <div id="tab-59f89f0881f932" class="tab-pane" role="tabpanel">
                    <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
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
                                                        <span class="amount"> <?= $product->price;?></span>
                                                    </span>
                                                    <!-- /.price -->
                                                    <h2 class="woocommerce-loop-product__title"><?=$product->product->name;?></h2>
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
                
            </div>
            <!-- .tab-content -->
        </div>
        <!-- .section-products-carousel-tabs-wrap -->
    </section>
<?php endif;?>
