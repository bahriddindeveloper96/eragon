<?php
    use app\components\BrandWidget;
    use app\components\BannerWidget;
    use app\components\SaleWidget;
    use app\components\BlockWidget;
    use app\components\SellerWidget;
    use app\components\PosterWidget;
?>
<div id="content" class="site-content">
                <div class="col-full">
                    <div class="row">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <?= BannerWidget::widget() ?>
                                <!-- -slider -->
                                <div class="section-deals-carousel-and-products-carousel-tabs row">
                                    <?= SaleWidget::widget() ?>
                                    <!-- -sele slider -->
                                    <?= BlockWidget::widget() ?>
                                    <!-- -block slider -->                                   
                                </div>
                                <div class="fullwidth-notice stretch-full-width">
                                    <div class="col-full">
                                        <p class="message">Download our new app today! Dont miss our mobile-only offers and shop with Android Play.</p>
                                    </div>
                                    <!-- .col-full -->
                                </div>
                                <?= SellerWidget::widget() ?>
                               <!-- -seller products slider -->
                                <?= PosterWidget::widget() ?>
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