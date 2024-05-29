<?php
    use app\components\BrandWidget;
    use app\components\BannerWidget;
    use app\components\SaleWidget;
    use app\components\BlockWidget;
?>
<div id="content" class="site-content">
                <div class="col-full">
                    <div class="row">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <?= BannerWidget::widget() ?>
                                <!-- .home-v1-slider -->
                                <div class="section-deals-carousel-and-products-carousel-tabs row">
                                    <?= SaleWidget::widget() ?>
                                    <?= BlockWidget::widget() ?>                                   
                                </div>
                                <div class="fullwidth-notice stretch-full-width">
                                    <div class="col-full">
                                        <p class="message">Download our new app today! Dont miss our mobile-only offers and shop with Android Play.</p>
                                    </div>
                                    <!-- .col-full -->
                                </div>
                                <?= SellerWidget::widget() ?>
                                <!-- .section-products-carousel-tabs-3 -->
                                <div class="banner full-width-banner">
                                    <a href="shop.html">
                                        <div style="background-size: cover; background-position: center center; background-image: url( images/eragon/full-width.png ); height: 236px;" class="banner-bg">
                                            <div class="caption">
                                                <div class="banner-info">
                                                    <h3 class="title">
                                                        <strong>Extremely Portable</strong>, learn
                                                        <br> to ride in just 3 minutes</h3>
                                                    <h4 class="subtitle">Travel up to 22km in a single charge</h4>
                                                </div>
                                                <span class="banner-action button">Browse now
                                                    <i class="feature-icon d-flex ml-4 tm tm-long-arrow-right"></i>
                                                </span>
                                            </div>
                                            <!-- /.caption -->
                                        </div>
                                        <!-- /.banner-b -->
                                    </a>
                                    <!-- /.section-header -->
                                </div>
                                <!-- /.banner -->
                                <?= BrandWidget::widget() ?>
                                <!-- .brands-carousel -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-full -->
            </div>