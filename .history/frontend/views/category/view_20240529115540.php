  <!-- ============================================================= Header End ============================================================= -->
  <?php 
    use app\components\CategoryWidget;
    use app\components\FiltrPriceWidget;
    use app\components\FiltrBrandWidget;
    use common\models\Stock;
    use yii\helpers\Html;
    use app\components\ColorWidget;
    use common\models\ProductItems;
 ?>
  <div id="content" class="site-content" tabindex="-1">
                <div class="col-full">
                    <div class="row">'
                        
                        <nav class="woocommerce-breadcrumb">                        
                            <a href="<?= \yii\helpers\Url::home();?>">Главный</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span><?= $category->name;?>
                        </nav>
                        <!-- .woocommerce-breadcrumb -->
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                
                                <!-- .shop-archive-header -->
                                <div class="shop-control-bar">
                                    <div class="handheld-sidebar-toggle">
                                        <button type="button" class="btn sidebar-toggler">
                                            <i class="fa fa-sliders"></i>
                                            <span>Filters</span>
                                        </button>
                                    </div>
                                    <!-- .handheld-sidebar-toggle -->
                                    <h1 class="woocommerce-products-header__title page-title"><?= $category->name;?></h1>
                                    <ul role="tablist" class="shop-view-switcher nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#grid-extended" title="Grid Extended View" data-toggle="tab" class="nav-link ">
                                                <i class="tm tm-grid"></i>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#list-view-large" title="List View Large" data-toggle="tab" class="nav-link ">
                                                <i class="tm tm-listing-large"></i>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                    <!-- .shop-view-switcher -->
                                    <!-- <form class="form-techmarket-wc-ppp" method="POST">
                                        <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                            <option value="20">Show 20</option>
                                            <option value="40">Show 40</option>
                                            <option value="-1">Show All</option>
                                        </select>
                                        <input type="hidden" value="5" name="shop_columns">
                                        <input type="hidden" value="15" name="shop_per_page">
                                        <input type="hidden" value="right-sidebar" name="shop_layout">
                                    </form> -->
                                    <!-- .form-techmarket-wc-ppp -->
                                    <!-- <form method="get" class="woocommerce-ordering">
                                        <select class="orderby" name="orderby">
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option selected="selected" value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                        <input type="hidden" value="5" name="shop_columns">
                                        <input type="hidden" value="15" name="shop_per_page">
                                        <input type="hidden" value="right-sidebar" name="shop_layout">
                                    </form> -->
                                    <!-- .woocommerce-ordering -->
                                    <nav class="techmarket-advanced-pagination">
                                        <form class="form-adv-pagination" method="post">
                                            <input type="number" value="1" class="form-control" step="1" max="5" min="1" size="2" id="goto-page">
                                        </form> of 5<a href="#" class="next page-numbers">→</a>
                                    </nav>
                                    <!-- .techmarket-advanced-pagination -->
                                </div>
                                <!-- .shop-control-bar -->
                                <div class="tab-content">
                                    <div id="grid-extended" class="tab-pane active" role="tabpanel">
                                        <div class="woocommerce columns-5">
                                            <div class="products">
                                                <?php if(!empty($products)):?> 
                                                    <?php foreach($products as $product):?> 
                                                        <?php $items = ProductItems::find()->where(['product_id'=> $product->id])->all();?>
                                                        <?php foreach($items as $item):?>
                                                            <?php endforeach;?>
                                                            <?php $stocks = Stock::find()->where(['product_items_id'=> $item->id]);?>
                                                            <?php foreach($stocks as $stock):?>
                                                                <?php endforeach;?>
                                                        <?php foreach($item->photos as $photo):?>                                                            
                                                        <?php endforeach;?>                                                  
                                                        <div class="product first">
                                                            <div class="yith-wcwl-add-to-wishlist">
                                                                <a href="#" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                            </div>
                                                            <!-- .yith-wcwl-add-to-wishlist -->
                                                            <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$product->id]);?>">                                                                
                                                                <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $photo->photo, [
                                                                    'class' => 'attachment-shop_catalog size-shop_catalog wp-post-image',
                                                                    'width' => '224',
                                                                    'height' => '197',
                                                                    'alt' => "$product->name",
                                                                ]) ?>
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <?= $item->price;?><span class="woocommerce-Price-currencySymbol"> so'm</span></span>
                                                                </span>
                                                                <h2 class="woocommerce-loop-product__title"><?= $product->name;?></h2>
                                                            </a>
                                                            <!-- .woocommerce-LoopProduct-link -->
                                                            <div class="techmarket-product-rating">
                                                                <div title="Rated 5.00 out of 5" class="star-rating">
                                                                    <span style="width:100%">
                                                                        <strong class="rating">5.00</strong> out of 5</span>
                                                                </div>
                                                                <span class="review-count">(1)</span>
                                                            </div>
                                                            <!-- .techmarket-product-rating -->
                                                            <span class="sku_wrapper">Brand:<?= $product->brand->name;?>
                                                                <span class="sku">5487FB8/13</span>
                                                            </span>
                                                            <div class="woocommerce-product-details__short-description">
                                                                    <?= $product->description;?>
                                                            </div>
                                                            <!-- .woocommerce-product-details__short-description -->
                                                            <a data-id="<?= $item->id;?>" class="button product_type_simple add_to_cart_button add-to-cart" href="<?= \yii\helpers\Url::to(['cart/add','id'=>$item->id]);?>">Add to cart</a>
                                                            <a class="add-to-compare-link" href="#">Add to compare</a>
                                                        </div>
                                                    <?php endforeach;?>
                                                    
                                                    <?php else:?>                                                    
                                                        <div class="container">
                                                            <h3>Здесь товаров пока нет</h3>
                                                        </div>                                                        
                                                <?php endif;?>
                                            </div>
                                            <!-- .products -->
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .tab-pane -->
                                    <div id="list-view-large" class="tab-pane" role="tabpanel">
                                        <div class="woocommerce columns-1">
                                            <div class="products">
                                                <?php if(!empty($products)):?>
                                                    <?php foreach($products as $product):?>
                                                        <?php $items = ProductItems::find()->where(['product_id'=> $product->id])->all();?>
                                                        <?php foreach($item->photos as $photo):?>                                                            
                                                        <?php endforeach;?> 
                                                        <div class="product list-view-large first ">
                                                            <div class="media">
                                                                <?= \yii\helpers\Html::img(Yii::getAlias('@fileUrl') . '/backend/web/uploads/product/' . $photo->photo, [
                                                                    'class' => 'attachment-shop_catalog size-shop_catalog wp-post-image',
                                                                    'width' => '224',
                                                                    'height' => '197',
                                                                    'alt' => "$product->name",
                                                                ]) ?>
                                                                <div class="media-body">
                                                                    <div class="product-info">
                                                                        <div class="yith-wcwl-add-to-wishlist">
                                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Add to Wishlist</a>
                                                                        </div>
                                                                        <!-- .yith-wcwl-add-to-wishlist -->
                                                                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="<?= \yii\helpers\Url::to(['product/view', 'id'=>$product->id]);?>">
                                                                            <h2 class="woocommerce-loop-product__title"><?= $product->name;?></h2>
                                                                            
                                                                        </a>
                                                                        <br/>
                                                                        
                                                                        <div class="brand" style="margin-top:1.5rem;" >
                                                                            <a href="#">
                                                                                <img alt="galaxy" src="/images/brands/5.png">
                                                                            </a>
                                                                        </div>
                                                                        <!-- .brand -->
                                                                        <div class="woocommerce-product-details__short-description">
                                                                            <?= $product->description;?>
                                                                        </div>
                                                                        <!-- .woocommerce-product-details__short-description -->
                                                                        <span class="sku_wrapper">Brand:<?= $product->brand->name_uz;?>
                                                                            <span class="sku">5487FB8/13</span>
                                                                        </span>
                                                                    </div>
                                                                    <!-- .product-info -->
                                                                    <div class="product-actions">
                                                                        <div class="availability">
                                                                            Availability:
                                                                            <p class="stock in-stock"><!--?= $stock->id;?--> на склады</p>
                                                                        </div>
                                                                        <span class="price">
                                                                            <span class="woocommerce-Price-amount amount">
                                                                                <?= $item->price;?><span class="woocommerce-Price-currencySymbol"> so'm</span></span>
                                                                        </span>
                                                                        <!-- .price -->
                                                                        <a class="button add_to_cart_button add-to-cart" data-id="<?= $product->id;?>" href="<?= \yii\helpers\Url::to(['cart/add','id'=>$product->id]);?>">Add to Cart</a>
                                                                        <a class="add-to-compare-link" href="compare.html">Add to compare</a>
                                                                    </div>
                                                                    <!-- .product-actions -->
                                                                </div>
                                                                <!-- .media-body -->
                                                            </div>
                                                            <!-- .media -->
                                                        </div>
                                                    <?php endforeach;?>
                                                    <!-- .product -->
                                                    <?php else:?>                                                    
                                                        <div class="container">
                                                            <h3>Здесь товаров пока нет</h3>
                                                        </div>                                                        
                                                <?php endif;?>
                                                <!-- .product -->
                                            </div>
                                            <!-- .products -->
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .tab-pane -->                                    
                                </div>
                                <!-- .tab-content -->
                                <div class="shop-control-bar-bottom">
                                    <?= Html::beginForm(['category/view','id'=>$category->id], 'post', ['class' => 'form-techmarket-wc-ppp']) ?>
                                        <!-- <select class="techmarket-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp">
                                            <option value="1">Show 20</option>
                                            <option value="2">Show 40</option>
                                            <option value="3">Show All</option>
                                        </select>
                                        <input type="hidden" value="5" name="shop_columns">
                                        <input type="hidden" value="15" name="shop_per_page">
                                        <input type="hidden" value="right-sidebar" name="shop_layout"> -->
                                    <?= Html::endForm() ?>
                                    <!-- .form-techmarket-wc-ppp -->
                                    <p class="woocommerce-result-count">
                                    Показаны <?= $pages->getPage() * $pages->getPageSize() + 1 ?>–<?= min(($pages->getPage() + 1) * $pages->getPageSize(), $totalCount) ?> из <?= $totalCount ?> результаты
                                    </p>
                                    <?= \yii\widgets\LinkPager::widget([
                                        'pagination' => $pages,
                                        'options' => ['class' => 'pagination woocommerce-pagination'],
                                        'linkContainerOptions' => ['class' => 'page-item'],
                                        'linkOptions' => ['class' => 'page-link'],
                                        'prevPageLabel' => '←',
                                        'nextPageLabel' => '→',
                                    ]) ?>                                        
                                </div>
                                <!-- .shop-control-bar-bottom -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                        <div id="secondary" class="widget-area shop-sidebar" role="complementary">
                            <?= CategoryWidget::widget() ?> 
                            <div id="techmarket_products_filter-3" class="widget widget_techmarket_products_filter">
                                <span class="gamma widget-title">Filters</span>
                                <?= FiltrPriceWidget::widget() ?>
                                <?= FiltrBrandWidget::widget() ?>
                                <!-- .woocommerce widget_layered_nav -->
                                <?= ColorWidget::widget() ?>
                                <!-- .woocommerce widget_layered_nav -->
                            </div>
                            
                            <!-- .widget_techmarket_products_carousel_widget -->
                        </div>
                        <!-- #secondary -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-full -->
            </div>
            <!-- #content -->
            
            <!-- .col-full -->