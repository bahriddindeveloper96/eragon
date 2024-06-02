<?php 
 use common\models\ProductItems;
 use app\components\BrandWidget;
?>
<div id="content" class="site-content" tabindex="-1">
                <div class="col-full">
                    <div class="row">
                        <nav class="woocommerce-breadcrumb">
                            <a href="<?= \yii\helpers\Url::home();?>">Bosh sahifa</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span><a href="product-category.html"><?= $product->category->name;?></a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span><?= $product->name;?>
                        </nav>
                        <!-- .woocommerce-breadcrumb -->
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="product product-type-simple">
                                        <?php if(!empty($product)):?>  
                                            <?php foreach($items as $item):?>
                                                <?php endforeach;?>
                                            <div class="single-product-wrapper">
                                                <div class="product-images-wrapper thumb-count-4">
                                                    <span class="onsale">-
                                                        <?php 
                                                            $wallet = $item->old_price;
                                                            $wallets = $item->price;
                                                            $itog = $wallet - $wallets;
                                                        ?>
                                                        <span class="woocommerce-Price-amount amount">
                                                            
                                                            <?= $itog;?><span class="woocommerce-Price-currencySymbol"> so'm</span>
                                                        </span>
                                                    </span>
                                                    <!-- .onsale -->
                                                    <div id="techmarket-single-product-gallery" class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images" data-columns="4">
                                                        <?php if(!empty($product)):?>  
                                                            <?php foreach($items as $item):?>
                                                                <?php endforeach;?>
                                                            <div class="techmarket-single-product-gallery-images" data-ride="tm-slick-carousel" data-wrap=".woocommerce-product-gallery__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper&quot;}">
                                                                <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                                                                    <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
                                                                    <figure class="woocommerce-product-gallery__wrapper ">
                                                                        <?php foreach($item->photos as $photo):?>
                                                                            <div data-thumb="<?= Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $photo->photo ?>" class="woocommerce-product-gallery__image">
                                                                                <a href="<?= Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $photo->photo ?>" tabindex="0">                                                                                
                                                                                    <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $photo->photo, [
                                                                                        'class' => 'attachment-shop_single size-shop_single wp-post-image',
                                                                                        'width' => '600',
                                                                                        'height' => '600',
                                                                                        'alt' => "$product->name",
                                                                                    ]) ?>
                                                                                </a>
                                                                            </div>                                                                        
                                                                        <?php endforeach;?>
                                                                    </figure>
                                                                </div>
                                                                <!-- .woocommerce-product-gallery -->
                                                            </div>
                                                        <?php endif;?>
                                                        <!-- .techmarket-single-product-gallery-images -->
                                                        <?php if(!empty($product)):?>
                                                            <div class="techmarket-single-product-gallery-thumbnails" data-ride="tm-slick-carousel" data-wrap=".techmarket-single-product-gallery-thumbnails__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;vertical&quot;:true,&quot;verticalSwiping&quot;:true,&quot;focusOnSelect&quot;:true,&quot;touchMove&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-up\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-down\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .woocommerce-product-gallery__wrapper&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:765,&quot;settings&quot;:{&quot;vertical&quot;:false,&quot;horizontal&quot;:true,&quot;verticalSwiping&quot;:false,&quot;slidesToShow&quot;:4}}]}">
                                                                <figure class="techmarket-single-product-gallery-thumbnails__wrapper">
                                                                    <?php foreach($item->photos as $photo):?>
                                                                        <figure data-thumb="<?= Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $photo->photo ?>" class="techmarket-wc-product-gallery__image">                                                                        
                                                                            <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $photo->photo, [
                                                                                'class' => 'attachment-shop_thumbnail size-shop_thumbnail wp-post-image',
                                                                                'width' => '180',
                                                                                'height' => '180',
                                                                                'alt' => "$product->name",
                                                                            ]) ?>
                                                                        </figure>                                                                    
                                                                    <?php endforeach;?>
                                                                </figure>
                                                                <!-- .techmarket-single-product-gallery-thumbnails__wrapper -->
                                                            </div>
                                                        <?php endif;?>
                                                        <!-- .techmarket-single-product-gallery-thumbnails -->
                                                    </div>
                                                    <!-- .techmarket-single-product-gallery -->
                                                </div>
                                                <!-- .product-images-wrapper -->
                                                <div class="summary entry-summary">
                                                    <div class="single-product-header">
                                                        <h1 class="product_title entry-title"><?= $product->name;?></h1>
                                                        <a class="add-to-wishlist" href="#"> Add to Wishlist</a>
                                                    </div>
                                                    <!-- .single-product-header -->
                                                    <div class="single-product-meta">
                                                        <div class="brand">
                                                            <a href="#">
                                                                <img alt="galaxy" src="/images/brands/5.png">
                                                            </a>
                                                        </div>
                                                        <div class="cat-and-sku">
                                                            <h6>
                                                                <a rel="tag" href="product-category.html"><?= $product->category->name;?></a>
                                                                <br>
                                                                <span class="sku_wrapper">Склад шт:
                                                                <span class="sku"><!--?= $item->stocks->quantity;?--></span>
                                                                </span>                
                                                            </h6>
                                                            
                                                        </div>
                                                        <div class="product-label">
                                                            <div class="ribbon label green-label">
                                                                <span>A+</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .single-product-meta -->
                                                    <div class="rating-and-sharing-wrapper">
                                                        <div class="woocommerce-product-rating">
                                                            <div class="star-rating">
                                                                <span style="width:100%">Rated
                                                                    <strong class="rating">5.00</strong> out of 5 based on
                                                                    <span class="rating">1</span> customer rating</span>
                                                            </div>
                                                            <a rel="nofollow" class="woocommerce-review-link" href="#reviews">(<span class="count">1</span> customer review)</a>
                                                        </div>
                                                    </div>
                                                    <!-- .rating-and-sharing-wrapper -->
                                                    <div class="woocommerce-product-details__short-description">
                                                        <?= $product->description;?>
                                                    </div>
                                                    <!-- .woocommerce-product-details__short-description -->
                                                    <div class="product-actions-wrapper">
                                                        <div class="product-actions">
                                                            <p class="price">
                                                                <del>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <?= $item->old_price;?><span class="woocommerce-Price-currencySymbol"> so'm</span></span>
                                                                </del>
                                                                <ins>
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <?= $item->price;?><span class="woocommerce-Price-currencySymbol"> so'm</span></span>
                                                                </ins>
                                                            </p>
                                                            <!-- .single-product-header -->
                                                            
                                                                <div class="quantity">
                                                                    <label for="quantity-input">Quantity</label>
                                                                    <input type="number" size="4" class="input-text qty text" value="1" id="qty">
                                                                </div>
                                                                <!-- .quantity -->
                                                                <div class="m-3 mt-5">
                                                                <a data-id="<?= $item->id ?>" class="single_add_to_cart_button button add-to-cart">Add to cart</a>               
                                                                </div>
                                                                
                                                                <!-- <button data-id="" class="single_add_to_cart_button button add-to-cart" value="185" name="add-to-cart" type="submit">Add to cart</button> -->
                                                           
                                                            <!-- .cart -->
                                                            <!-- <a class="add-to-compare-link" href="#">Add to compare</a> -->
                                                        </div>
                                                        <!-- .product-actions -->
                                                    </div>
                                                    <!-- .product-actions-wrapper -->
                                                </div>
                                                <!-- .entry-summary -->
                                            </div>
                                            <!-- .single-product-wrapper -->
                                            
                                            <!-- .tm-related-products-carousel -->
                                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                                <ul role="tablist" class="nav tabs wc-tabs">
                                                    <!-- <li class="nav-item accessories_tab">
                                                        <a class="nav-link active" data-toggle="tab" role="tab" aria-controls="tab-accessories" href="#tab-accessories">Аксессуары</a>
                                                    </li> -->
                                                    <li class="nav-item specification_tab">
                                                        <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-specification" href="#tab-specification">СПЕЦИФИКАЦИЯ</a>
                                                    </li>
                                                    <li class="nav-item description_tab">
                                                        <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-description" href="#tab-description">ОПИСАНИЕ</a>
                                                    </li>
                                                    
                                                    <li class="nav-item reviews_tab">
                                                        <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-reviews" href="#tab-reviews">Отзывы (1)</a>
                                                    </li>
                                                </ul>
                                                <!-- /.ec-tabs -->
                                                <div class="tab-content">
                                                    
                                                    <div class="tab-pane panel wc-tab" id="tab-description" role="tabpanel">
                                                        <h2>Description</h2>
                                                        <?= $product->content;?>
                                                        <!-- .outer-wrap -->
                                                    </div>
                                                    <div class="tab-pane" id="tab-specification" role="tabpanel">
                                                        <div class="tm-shop-attributes-detail like-column columns-3">
                                                            
                                                            <h3 class="tm-attributes-title">Атрибуты</h3>
                                                            <?php foreach($item->productValues as $value):?>
                                                                <table class="shop_attributes">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th><?= $value->xususiy->name?></th>
                                                                            <td><?= $value->name;?></td>
                                                                        </tr>
                                                                        
                                                                       
                                                                    </tbody>
                                                                </table>
                                                            <?php endforeach;?>
                                                            
                                                            <!-- /.shop_attributes -->
                                                        </div>
                                                        <!-- /.tm-shop-attributes-detail -->
                                                    </div>
                                                    <div class="tab-pane" id="tab-reviews" role="tabpanel">
                                                        <div class="techmarket-advanced-reviews" id="reviews">
                                                            <div class="advanced-review row">
                                                                <div class="advanced-review-rating">
                                                                    <h2 class="based-title">Review (1)</h2>
                                                                    <div class="avg-rating">
                                                                        <span class="avg-rating-number">5.0</span>
                                                                        <div title="Rated 5.0 out of 5" class="star-rating">
                                                                            <span style="width:100%"></span>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.avg-rating -->
                                                                    <div class="rating-histogram">
                                                                        <div class="rating-bar">
                                                                            <div title="Rated 5 out of 5" class="star-rating">
                                                                                <span style="width:100%"></span>
                                                                            </div>
                                                                            <div class="rating-count">1</div>
                                                                            <div class="rating-percentage-bar">
                                                                                <span class="rating-percentage" style="width:100%"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rating-bar">
                                                                            <div title="Rated 4 out of 5" class="star-rating">
                                                                                <span style="width:80%"></span>
                                                                            </div>
                                                                            <div class="rating-count zero">0</div>
                                                                            <div class="rating-percentage-bar">
                                                                                <span class="rating-percentage" style="width:0%"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rating-bar">
                                                                            <div title="Rated 3 out of 5" class="star-rating">
                                                                                <span style="width:60%"></span>
                                                                            </div>
                                                                            <div class="rating-count zero">0</div>
                                                                            <div class="rating-percentage-bar">
                                                                                <span class="rating-percentage" style="width:0%"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rating-bar">
                                                                            <div title="Rated 2 out of 5" class="star-rating">
                                                                                <span style="width:40%"></span>
                                                                            </div>
                                                                            <div class="rating-count zero">0</div>
                                                                            <div class="rating-percentage-bar">
                                                                                <span class="rating-percentage" style="width:0%"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="rating-bar">
                                                                            <div title="Rated 1 out of 5" class="star-rating">
                                                                                <span style="width:20%"></span>
                                                                            </div>
                                                                            <div class="rating-count zero">0</div>
                                                                            <div class="rating-percentage-bar">
                                                                                <span class="rating-percentage" style="width:0%"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.rating-histogram -->
                                                                </div>
                                                                <!-- /.advanced-review-rating -->
                                                                <div class="advanced-review-comment">
                                                                    <div id="review_form_wrapper">
                                                                        <div id="review_form">
                                                                            <div class="comment-respond" id="respond">
                                                                                <h3 class="comment-reply-title" id="reply-title">Add a review</h3>
                                                                                <form novalidate="" class="comment-form" id="commentform" method="post" action="#">
                                                                                    <div class="comment-form-rating">
                                                                                        <label>Your Rating</label>
                                                                                        <p class="stars">
                                                                                            <span><a href="#" class="star-1">1</a><a href="#" class="star-2">2</a><a href="#" class="star-3">3</a><a href="#" class="star-4">4</a><a href="#" class="star-5">5</a></span>
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="comment-form-comment">
                                                                                        <label for="comment">Your Review</label>
                                                                                        <textarea aria-required="true" rows="8" cols="45" name="comment" id="comment"></textarea>
                                                                                    </p>
                                                                                    <p class="comment-form-author">
                                                                                        <label for="author">Name
                                                                                            <span class="required">*</span>
                                                                                        </label>
                                                                                        <input type="text" aria-required="true" size="30" value="" name="author" id="author">
                                                                                    </p>
                                                                                    <p class="comment-form-email">
                                                                                        <label for="email">Email
                                                                                            <span class="required">*</span>
                                                                                        </label>
                                                                                        <input type="text" aria-required="true" size="30" value="" name="email" id="email">
                                                                                    </p>
                                                                                    <p class="form-submit">
                                                                                        <input type="submit" value="Add Review" class="submit" id="submit" name="submit">
                                                                                        <input type="hidden" id="comment_post_ID" value="185" name="comment_post_ID">
                                                                                        <input type="hidden" value="0" id="comment_parent" name="comment_parent">
                                                                                    </p>
                                                                                </form>
                                                                                <!-- /.comment-form -->
                                                                            </div>
                                                                            <!-- /.comment-respond -->
                                                                        </div>
                                                                        <!-- /#review_form -->
                                                                    </div>
                                                                    <!-- /#review_form_wrapper -->
                                                                </div>
                                                                <!-- /.advanced-review-comment -->
                                                            </div>
                                                            <!-- /.advanced-review -->
                                                            <div id="comments">
                                                                <ol class="commentlist">
                                                                    <li id="li-comment-83" class="comment byuser comment-author-admin bypostauthor even thread-even depth-1">
                                                                        <div class="comment_container" id="comment-83">
                                                                            <div class="comment-text">
                                                                                <div class="star-rating">
                                                                                    <span style="width:100%">Rated
                                                                                        <strong class="rating">5</strong> out of 5</span>
                                                                                </div>
                                                                                <p class="meta">
                                                                                    <strong itemprop="author" class="woocommerce-review__author">first last</strong>
                                                                                    <span class="woocommerce-review__dash">&ndash;</span>
                                                                                    <time datetime="2017-06-21T08:05:40+00:00" itemprop="datePublished" class="woocommerce-review__published-date">June 21, 2017</time>
                                                                                </p>
                                                                                <div class="description">
                                                                                    <p>Wow great product</p>
                                                                                </div>
                                                                                <!-- /.description -->
                                                                            </div>
                                                                            <!-- /.comment-text -->
                                                                        </div>
                                                                        <!-- /.comment_container -->
                                                                    </li>
                                                                    <!-- /.comment -->
                                                                </ol>
                                                                <!-- /.commentlist -->
                                                            </div>
                                                            <!-- /#comments -->
                                                        </div>
                                                        <!-- /.techmarket-advanced-reviews -->
                                                    </div>
                                                </div>
                                            </div>
                                            <?php else:?>                                                    
                                                <div class="container">
                                                    <h3>Здесь товаров пока нет</h3>
                                                </div>                                                        
                                        <?php endif;?>                                            
                                        <div class="tm-related-products-carousel section-products-carousel" id="tm-related-products-carousel" data-ride="tm-slick-carousel" data-wrap=".products" data-slick="{&quot;slidesToShow&quot;:7,&quot;slidesToScroll&quot;:7,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#tm-related-products-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:780,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:5}}]}">
                                            
                                            <section class="related">
                                                <header class="section-header">
                                                    <h2 class="section-title">Related products</h2>
                                                    <nav class="custom-slick-nav"></nav>
                                                </header>
                                                <!-- .section-header -->
                                                <div class="products">
                                                    <?php foreach($relateds as $related):?>
                                                        <?php $items = ProductItems::find()->where(['product_id'=>$related->id])->all();?>
                                                        <?php foreach($items as $item):?>
                                                            <?php endforeach;?>
                                                        <?php foreach($item->photos as $photo):?>                                                            
                                                        <?php endforeach;?>
                                                        <div class="product">
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <a href="#" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                            </div>
                                                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$related->id]);?>" class="woocommerce-LoopProduct-link">
                                                                <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $photo->photo, [
                                                                    'class' => 'attachment-shop_catalog size-shop_catalog wp-post-image',
                                                                    'width' => '224',
                                                                    'height' => '197',
                                                                    'alt' => "$product->name",
                                                                ]) ?>
                                                                <span class="price">
                                                                    <ins>
                                                                        <span class="amount"> </span>
                                                                    </ins>
                                                                    <span class="amount"><?= $item->price;?> so'm</span>
                                                                </span>
                                                                <!-- /.price -->
                                                                <h2 class="woocommerce-loop-product__title"><?= $related->name;?></h2>
                                                            </a>
                                                            <div class="hover-area">
                                                                <a data-id="<?= $related->id;?>" class="button add_to_cart_button add-to-cart" href="<?= \yii\helpers\Url::to(['cart/add','id'=>$product->id]);?>" rel="nofollow">Add to cart</a>
                                                                <a class="add-to-compare-link" href="#">Add to compare</a>
                                                            </div>
                                                        </div>
                                                    <?php endforeach;?>                                                   
                                                </div>
                                            </section>
                                            <!-- .single-product-wrapper -->
                                        </div>
                                        <?= BrandWidget::widget() ?>
                                        <!-- .brands-carousel -->
                                        
                                </div>
                                <!-- .product -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-full -->
            </div>