<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>
<!-- ============================================================= Header End ============================================================= -->
<div id="content" class="site-content">
                <div class="col-full">
                    <div class="row">
                        <nav class="woocommerce-breadcrumb">
                            <a href="home-v1.html">Home</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>Error 404
                        </nav>
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="error404">
                                    <div class="info-404">
                                        <h2 class="title">404!</h2>
                                        <p class="lead error-text"><?= nl2br(Html::encode($message));?></p>
                                        <p class="lead">Пожалуйста поиск товаров </p>
                                        <div class="sub-form-row">
                                            <div class="widget woocommerce widget_product_search">
                                                <form class="search-form" method="get" action="<?= \yii\helpers\Url::to(['category/search']);?>">
                                                    <input type="text" placeholder="Поиск товаров..." name="q">
                                                    <button class="button" type="button">Поиск</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .sub-form-row -->
                                </div>
                                <!-- .error404 -->
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